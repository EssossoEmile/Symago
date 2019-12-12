	<style>
		<!--
			.ft9{
				font: 13px 'Arial';
				color: #929292;
				line-height: 16px;
			}
		-->
	</style>
	<table style="width: 100%">
        <tr>
            <td style="width: 60%" >
                <p style="width:100px;height:130px;">
					%logo%
				</p>
            </td>
            <td style=" width: 40%;" align="right">
               <p style="float:right;font-size:20px;">Invoice #: 123<br>Created: %currentDate%</p>
            </td>
        </tr>
    </table>

<table  style="width:100%;margin-top:10px;">
	<tr>
		<td class="ft9" style=" width: 25%;" align="left">
            Thibault Guerpillon<br>20 res de la Croix Blanche<br>91380 Chilly Mazarin<br>France
        </td>
        <td style=" width: 75%;" align="right">
            <p style="float:right;">%name%<br/>%addressLine2%<br>%addressLine1%<br>%postalCode% &nbsp; %city%<br>%country%</p>
        </td>
	</tr>
	<tr>
		<td class="ft9" style=" width: 20%;" align="left">
			https://sim-usa.mobi<br>contact@sim-usa.mobi
        </td>
        <td style=" width: 80%;" align="right">
        </td>
	</tr>
	<tr>
		<td class="ft9" style=" width: 20%;" align="left">
			<br>SIREN: 513559781<br>VAT ID: FR31513559781
        </td>
        <td style=" width: 80%;" align="right">
        </td>
	</tr>
	</table>
	
	<br><br><br><br>
	<table class="table" style="width:100%;" cellpadding="0" cellspacing="0">
		<tr class="tr" style="background: #eee; color: #000; font-weight:bold;">
			<td align="left" valign="top" style="width:50%;"><p >Payment Method</p></td>
			<td align="right" valign="top" style="width:50%;"><p >Order ID #</p></td>
		</tr>
		<tr class="tr" style="">
			<td align="left" style="width:50%;"><p >Amazon</p></td>
			<td align="right" style="width:50%;"><p >%amazonOrderId%</p></td>
		</tr>
	</table>
	<br>
	<table class="table" style="width:100%;" cellpadding="0" cellspacing="0">
		<tr class="tr" style="background: #eee; color: #000; font-weight:bold;">
			<td align="left" valign="top"><p >Item</p></td>
			<td align="right" valign="top"><p >Price</p></td>
			<td align="right" valign="top"><p >Quantity</p></td>
			<td align="right" valign="top"><p>Total</p></td>
		</tr>

		<tr>
				<td align="left" style="width:70%;"><p >%title%</p></td>
				<td align="right" style="width:10%;"><p >%itemPrice%</p></td>
				<td align="right" style="width:10%;"><p >%quantityOrdered%</p></td>
				<td align="right" style="width:10%;"><p >%totalHt%</p></td>
			</tr>
		
		%otherLine%
		
		%livraison%
		
		%remise%
		
		<tr style="" class="intr">			
			<td align="left" colspan="3" ><p ><strong>TOTAL HT</strong></p></td>	    		
			<td align="right" class="value"><p > <strong>%predevise% %total% %postdevise%</strong></p></td>
			
		</tr>
		<tr style="" class="intr">			
			<td align="left" colspan="3" ><p ><strong>TVA %tva%</strong></p></td>			
			<td align="right" class="value"><p > <strong>%predevise% %tvaC% %postdevise%</strong></p></td>
			
		</tr>
		<tr style="" class="intr">			
			<td align="left" colspan="3" ><p ><strong>TOTAL TTC</strong></p></td>			
			<td align="right" class="value" style=""><p ><strong>%predevise% %orderTotal% %postdevise%</strong></p></td>
			
		</tr>
	</table>
	<br><br><br>
	<p style="text-align:center;">RCS Evry - 513 559 781</p>
