<?php
	require_once(dirname(dirname(__FILE__)).'/dao/db.class.php');
	require_once(dirname(dirname(__FILE__)).'/dao/templatesDAO.class.php');
	require_once(dirname(dirname(__FILE__)).'/controller/utils.php');
	require_once(dirname(__FILE__).'/vendor/autoload.php');
	require_once(dirname(__FILE__).'/PHPMailer/PHPMailerAutoload.php');
	
	if(isset($_GET['resend'])){
		//logs configuration
		$day = gmdate("Y-m-d");
		$logfile = dirname(dirname(__FILE__)).'/logs/mws_'.$day.'.log';
		$db=DB::connectionDB();
		
		//find invoice data
		$sql="select * from facture where id=".$_GET['resend']."";
		$facts=$db->query($sql)->fetch(PDO::FETCH_ASSOC);
		if($facts!=null){
			//get tva
			$sql="select * from marketplaces where id='".$facts['marketplaceId']."'";
			$market=$db->query($sql)->fetch(PDO::FETCH_ASSOC);
			$tva=$market['tva'];
			
			//get template to use
			$tempDao = new TemplatesDAO();
			$row = $tempDao->getWithStatusTrue('true',$facts['marketplaceId'])->fetch(PDO::FETCH_ASSOC);
			
			//find all fields in setting 
			$sql="select * from parametres";
			$param=$db->query($sql)->fetch(PDO::FETCH_ASSOC);
			$destinataire=$param['emailTest'];
			if($param['production']=='true'){
				$destinataire=$facts['buyerEmail'];
			}
			
			//file to build and send
			$extension_name=$facts['sequenceNumber'].'_commande-AmazonFBA-'.$facts['suffixNumber'].'.pdf';
			$fich=dirname(__FILE__).'/factures/'.$extension_name;
			if(strlen(trim($param['sauvegardeFacture']))>0){
				if(stripos(trim($param['sauvegardeFacture']),'/')==1){
					if(!file_exists(dirname(__FILE__).trim($param['sauvegardeFacture']))){
						mkdir(dirname(__FILE__).trim($param['sauvegardeFacture']),0777,true);
					}
					$fich=dirname(__FILE__).trim($param['sauvegardeFacture']).'/'.$extension_name;
				}else{
					if(!file_exists(dirname(__FILE__).'/'.trim($param['sauvegardeFacture']))){
						mkdir(dirname(__FILE__).'/'.trim($param['sauvegardeFacture']),0777,true);
					}
					$fich=dirname(__FILE__).'/'.trim($param['sauvegardeFacture']).'/'.$extension_name;
				} 
			}
			
				//logo  encoding
				$logo = 'logo/'.$row['logo'];
				$type = pathinfo($logo, PATHINFO_EXTENSION);
				$data = file_get_contents($logo);
				$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
				$base64='<img src="'.$base64.'" alt="" />';
		
				// get the HTML
				ob_start();
				echo '<html>';
				//include(dirname(__FILE__).'/template/invoice.php');
				echo '<body>';
				echo stripslashes($row['contenu']);
				echo '</body>';
				echo '</html>';
				$content = ob_get_clean();
			
				$sql="select * from produits where facture = ".$facts['id']."";
				$produits=$db->query($sql)->fetch(PDO::FETCH_ASSOC);
				
				$tvap = $tva/100;
				$centime=0.01;
				$orderT=$facts['orderTotal'];
				$qteO=$produits['quantityOrdered'];
				$spi=$produits['shippingPrice'];
				$sdi=$produits['shippingDiscount'];
				$itemi=$produits['itemPrice'];
				
				$totalHt=$orderT/($tvap+1);
				$totalHt=number_format($totalHt,2);
				$tvaC = $totalHt*$tvap;
				$tvaC=number_format($tvaC,2);
				//check if we have tva round error
				$orderTotal=$totalHt+$tvaC;
				if($orderT>$orderTotal)$totalHt=$totalHt+$centime;
				if($orderT<$orderTotal)$totalHt=$totalHt-$centime;
				
				$sp=$spi/($tvap+1);
				$sp=number_format($sp,2);
				$sd=$sdi/($tvap+1);
				$sd=number_format($sd,2);
				$pt=$itemi/($tvap+1);
				$pt=number_format($pt,2);
				$pu=$pt/$qteO;
				$pu=number_format($pu,2);
			
				//in case we have more than 1 product in order
				$otherLine='';
				if($facts['numberOfItemsShipped']>1){
					$tab=numberOfProduct($db,$facts['id']);
					$otherLine=addProductRow($tab,$tvap);
				}
			
				$tht=$pt+($sp-$sd);
				if($totalHt>$tht){
					$pu=$pu+$centime;
					$pt=$pt+($centime*$qteO);
				}
				if($totalHt<$tht){
					$pu=$pu-$centime;
					$pt=$pt-($centime*$qteO);
				}
				//recheck if we have tva round error
				$orderTotal=$totalHt+$tvaC;
				if($orderT>$orderTotal)$totalHt=$totalHt+$centime;
				if($orderT<$orderTotal)$totalHt=$totalHt-$centime;
				
				$lignelivraison=getShippingRow($sp);
				$ligneremise=getShippingDiscount($sd);
				
				$post='';
				$pre='';
				if($facts['OrderCurrency']=='GBP'){
				$pre ='&pound;';
				}else{
				$post ='&euro;';
				}
			
				// construction of array
				$vars=array(
					'%currentDate%'=> date('d/m/Y'),
					'%sequenceNumber%'=> $facts['sequenceNumber'],
					'%purchaseDate%'=> date_format(new DateTime($facts['purchaseDate']),'d/m/Y'),
					'%amazonOrderId%'=> $facts['amazonOrderId'],
					'%title%'=> stripslashes($produits['title']),
					'%itemPrice%'=> getArroundAmount($pu),
					'%quantityOrdered%'=> $qteO,
					'%totalHt%'=> getArroundAmount($pt),
					'%total%'=> getArroundAmount($totalHt),
					'%tvaC%'=> $tvaC,
					'%tva%'=> $tva.'%',
					'%orderTotal%'=> getArroundAmount($orderT),
					'%predevise%'=> $pre,
					'%postdevise%'=> $post,
					'%otherLine%' => $otherLine,
					'%livraison%'=> $lignelivraison,
					'%remise%'=> $ligneremise,
					'%logo%'=> $base64,
					'%name%'=> stripslashes($facts['name']),
					'%addressLine1%'=> stripslashes($facts['addressLine1']),
					'%addressLine2%'=> stripslashes($facts['addressLine2']),
					'%addressLine3%'=> stripslashes($facts['addressLine3']),
					'%city%'=> stripslashes($facts['city']),
					'%stateOrRegion%'=> stripslashes($facts['stateOrRegion']),
					'%postalCode%'=> stripslashes($facts['postalCode']),
					'%phone%'=> stripslashes($facts['phone']),
					'%district%'=> stripslashes($facts['district']),
					'%country%'=> stripslashes($facts['country'])
				);
				$content=strtr($content,$vars);
			
				try
				{
					$html2pdf = new HTML2PDF('P','A4', 'fr', true, 'UTF-8', array(15, 5, 15, 5)); 
					//$html2pdf->pdf->SetDisplayMode('fullpage');
					$html2pdf->WriteHTML($content, isset($_GET['vuehtml'])); 
					ob_clean();
					
					//generate pdf and disk storage
					if(file_exists($fich))unlink($fich);
					$html2pdf->pdf->Output($fich,"F");
					
					//write logs
					error_log("\r\n".'['.gmdate("Y-m-d H:i:s").'] successful build pdf invoice number : '.$facts['amazonOrderId'], 3, $logfile);
				}
				catch(HTML2PDF_exception $e) {
					//write logs
					error_log("\r\n".'['.gmdate("Y-m-d H:i:s").'] Html2pdf EXCEPTION : '.$e, 3, $logfile);
					//echo $e;
					exit;
				}
			
				if($param['sendEmail']=='true'){
					// send mail
					$sujet=strtr(stripslashes($row['subject']),$vars);
					$mail = new PHPMailer();
					$mail->isSMTP();
					//$mail->SMTPDebug = 2;
					//$mail->Debugoutput = 'html';
					$mail->SMTPSecure = 'tls';
					$mail->SMTPAuth = true;
					$mail->Host = $param['serveurSMTP'];
					$mail->Port = $param['portSMTP'];
					$mail->Username = $param['userSMTP'];
					$mail->Password = Utils::decrypt($param['pwdSMTP']);
					
					$mail->IsHTML(true);
					$mail->CharSet = "utf-8";
					$mail->SetFrom($param['emailSMTP'], $param['emailSMTP']);
					$mail->Subject = $sujet;
					$mail->AddAddress($destinataire);
					$mail->Body = stripslashes($row['contenuEmail']);
					$mail->AddAttachment($fich);
					
					$reponse = $mail->Send();
					
					//verification of the response on sending mail and update status
					if($reponse){
						//echo "Message sent!";
						$sql="update facture set statut=1 where id = ".$facts['id']."";
						$db->exec($sql);
						//write logs
						error_log("\r\n".'['.gmdate("Y-m-d H:i:s").'] successful sending email invoice number : '.$facts['amazonOrderId'], 3, $logfile);
					}else{
						//echo 'Mailer Error: ' . $mail->ErrorInfo;
						//write logs
						error_log("\r\n".'['.gmdate("Y-m-d H:i:s").'] EXCEPTION Mailer Error : '.$mail->ErrorInfo, 3, $logfile);
						exit;
					}
				}
		}
	}
	
	function getShippingRow($val){
		$ligne='';
		if($val!='0'){
			if($val!='0.00'){
				$ligne='<tr >
					<td align="left" style="width:70%;"><p >Frais de livraison - Express</p></td>
					<td align="right" style="width:10%;><p >'.getArroundAmount($val).'</p></td>
					<td align="right" style="width:10%;><p ></p></td>
					<td align="right" style="width:10%;><p >'.getArroundAmount($val).'</p></td>
				</tr>';
			}
		}
		return $ligne;
	}
	
	function getShippingDiscount($val){
		$ligne='';
		if($val!='0'){
			if($val!='0.00'){
				$ligne='<tr >
				<td align="left" style="width:70%;"><p >Remise</p></td>
				<td align="right" style="width:10%;><p >-'.getArroundAmount($val).'</p></td>
				<td align="right" style="width:10%;><p ></p></td>
				<td align="right" style="width:10%;"><p >-'.getArroundAmount($val).'</p></td>
				</tr>';
			}
		}
		return $ligne;
	}
	
	function getArroundAmount($val){
		$len=strlen($val);
		if($len==1 || $len==2)return $val.'.00';
		if($len>=3){
			$pos=strpos($val,'.');
			if($pos!=null || !empty($pos)){
				if($pos==1){
					if($len==3)return $val.'0';
				}else{
					if($len==4)return $val.'0';
				}
			}
		}
		return $val;
	}
	
	function addProductRow(array $tab,$tva){
		$ligne='';
		for($i=0;$i<count($tab);$i++){
			$items=$tab[$i];
			$pt=$items['itemPrice']/($tva+1);
			$pt=number_format($pt,2);
			$pu=$pt/$items['quantityOrdered'];
			$pu=number_format($pu,2);
			$item='<tr >
				<td align="left" style="width:70%;"><p >'.$items['title'].'</p></td>
				<td align="right" style="width:10%;"><p >'.$pu.'</p></td>
				<td align="right" style="width:10%;"><p >'.$items['quantityOrdered'].'</p></td>
				<td align="right" style="width:10%;"><p >'.$pt.'</p></td>
				</tr>';
				if($i==0)$ligne=$item;
				else $ligne.=$item;
		}
		return $ligne;
	}
	
	function numberOfProduct($db,$id){
		$tab=array();
		$sql="select * from produits where facture = ".$id."";
		$produits=$db->query($sql);
		$i=1;
		while($p=$produits->fetch(PDO::FETCH_ASSOC)){
			if($i>1){
				$ligne=array();
				$ligne['title']=$p['title'];
				$ligne['itemPrice']=$p['itemPrice'];
				$ligne['quantityOrdered']=$p['quantityOrdered'];
				array_push($tab, $ligne);
			}
			$i++;
		}
		return $tab;
	}
		
?>