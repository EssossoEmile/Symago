	<table style="width: 100%">
        <tr>
            <td style="text-indent: 10mm; width: 60%" >
                <p style="width:100px;height:130px;">
					%logo%
				</p>
            </td>
            <td style=" width: 40%;margin-right:10px;" align="right">
               <b style="font-size:40px">Facture</b><br/>
				<b style="font-size:40px">%currentDate%</b>
            </td>
        </tr>
    </table>
<span id="page_1" style="width:700px; height:30px;margin:auto;">
	<P class="p1 ft1"><b>SIREN : 513559781</b></P>
	<P class="p2 ft1"><b>TVA Intracommunautaire : FR31513559781</b></P>
	
</span>

<table  style="width:100%;margin-top:10px;">
	<tr>
		<td class="ft9" style="text-indent: 10mm; width: 20%;" align="left">
            <b>ADRESSE</b><br>
			Thibault Guerpillon<br>20 res de la Croix Blanche<br>91380 Chilly Mazarin<br>France
        </td>
        <td style=" width: 80%;" align="right">
            <p style="float:right;"><strong>%name%<br/>%addressLine2%<br>%addressLine1%<br>%postalCode% &nbsp; %city%<br>%country%</strong></p>
        </td>
	</tr>
	<tr>
		<td class="ft9" style="text-indent: 10mm; width: 20%;" align="left">
			<b>E-MAIL</b><br>contact@sim-usa.mobi
        </td>
        <td style=" width: 80%;" align="right">
        </td>
	</tr>
	<tr>
		<td class="ft9" style="text-indent: 10mm; width: 20%;" align="left">
			<b>WEB</b><br>https://sim-usa.mobi
        </td>
        <td style=" width: 80%;" align="right">
        </td>
	</tr>
	</table><br><br>
	
	<span id="page_2" style="width:100%;margin:auto; text-align:left;">
	
		<p class="p3 ft9">Facture %sequenceNumber% - Date de la commande: %purchaseDate%</p><br>
		<p class="p6 ft10"><strong>Ref : %amazonOrderId%</strong></p>
		
	</span><br>
	<table class="table" style="width:100%;margin:auto;">
		<tr class="tr" style="background: #727c92; color: white; text-align: center;">
			<td ><p >Description</p></td>
			<td ><p >Prix</p></td>
			<td ><p >Quantite</p></td>
			<td colspan="3"><p>TOTAL HT</p></td>
		</tr>

		<tr >
				<td style="width:60%"><p >%title%</p></td>
				<td style="width:10%" class="value"><p >%itemPrice%</p></td>
				<td style="width:10%" class="value"><p >%quantityOrdered%</p></td>
				<td style="width:10%" class="value"><p >%totalHt%</p></td>
			</tr>
		
		%otherLine%
		
		%livraison%
		
		%remise%

		<tr style="background: #d1d4e0; " class="intr">			
			<td colspan="3" ><p ><strong>TOTAL HT</strong></p></td>	    		
			<td class="value"><p > <strong>%predevise% %total% %postdevise%</strong></p></td>
			
		</tr>
		<tr style="background: #d1d4e0;" class="intr">			
			<td colspan="3" ><p ><strong>TVA %tva%</strong></p></td>			
			<td class="value"><p > <strong>%predevise% %tvaC% %postdevise%</strong></p></td>
			
		</tr>
		<tr style="background: #d1d4e0;" class="intr">			
			<td colspan="3" ><p ><strong>TOTAL TTC</strong></p></td>			
			<td  class="value" style=""><p ><strong>%predevise% %orderTotal% %postdevise%</strong></p></td>
			
		</tr>
	</table>
	<p style="text-align:center;">RCS Evry - 513 559 781</p>
