

<?php

if(isset($_POST['ryGalFull'])){
	//echo var_dump($_POST);
	//$causticDifference = $_POST['causticBagBeginShift'] - $_POST['causticBagEndShift'];
	//$runningWaterDifference = $_POST['endShiftRunningGallons'] - $_POST['startShiftRunningGallons'];
	//$lameBagDifference = $_POST['limeBag'] - $_POST['limeBagStartShift'];
	$to = 'bthomas@iwpusa.com, aparsons@iwpusa.com, vrobbins@iwpusa.com, sperez@iwpusa.com,
			ekayser@iwpusa.com, ttrawick@iwpusa.com, aburkett@iwpusa.com, Mlefever@iwpusa.com,
			YTapia@iwpusa.com, rsaenz@iwpusa.com, cnutting@iwpusa.com, jmartinez@co-west.com, claudia@co-west.com, jtrawick@iwpusa.com, rlopez@iwpusa.com, mgonzalez@iwpusa.com
';
	$subject = 'W Division Inventory Report';
	$message = "<style>
					tr {
						font-family: calibri;
					}
					
					p {
						padding-top: -10px;
						padding-bottom: -10px;
					}
					
					.even {
						background-color:#add8e6;
					}
					
					table {
						border: 2px solid black;
					}
				</style>
				
				
				
				
				
				<h2>Co-West Operator Inventory Report</h2>
				<table>
				<tr>
					<td>Date:</td>
					<td>" . $_POST['dateMonth'] . "/" . $_POST['dateDay'] . "/" . $_POST['dateYear'] . "</td>
				</tr>				
				<tr class='even'>
					<td>End of Shift:</td>
					<td>" . $_POST['timeHour'] . ":" . $_POST['timeMinute'] . " " . $_POST['timeAMPM'] . "</td>
				</tr>
				<tr>
					<td>Raw Yellow Grease Gallons:</td>
					<td>" . $_POST['ryGalFull'] . "</td>
				</tr>
				
				<tr class='even'>
					<td>Raw Yellow Grease in Heating Tank:</td>
					<td>" . $_POST['rawYellowGreaseHeatingTank'] . "</td>
				</tr>
				<tr>
				<tr>
					<td>Finish Brown Grease Gallons:</td>
					<td>" . $_POST['fyGalFull'] . "</td>
				</tr>
		

				<tr class='even'>
					<td>Raw Brown Grease Gallons:</td>
					<td>" . $_POST['fbGalFull'] . "</td>
				</tr>
				
				<tr>
					<td>HYFLOC 5220 Gallons Used:</td>
					<td>" . $_POST['hyflocFive'] . "</td>
				</tr>
				<tr>
				<tr  class='even'>
					<td>HYFLOC 3755 Gallons Used:</td>
					<td>" . $_POST['hyflocThree'] . "</td>
				</tr>
				
				<tr>
					<td>Limebags Used:</td>
					<td>" . $_POST['limeBag'] . "</td>
				</tr>
				<tr>
				<tr class='even'>
					<td>Caustic Bags Used:</td>
					<td>" . $_POST['causticBagEndShift'] . "</td>
				</tr>
				<tr>

				<tr >
					<td>Diesel Fuel Gallons:</td>
					<td>" . $_POST['dieselInch'] . "</td>
				</tr>
				<tr>		

				<tr class='even'>
					<td>Waste Water Treated Gallons:</td>
					<td>" . $_POST['totalProcessedGallons'] . "</td>
				</tr>
				<tr>					
				
				</table>
				<h2>Tank Inches From Top</h2>
				<table>
					<tr>
						<th>Tank</th>
						<th>Inches</th>
					</tr>
					<tr class='even'>
						<td>Receiving Frac 1:</td>
						<td>" . $_POST['receivingFrac_1'] . "</td>
					</tr>
					<tr>
						<td>Receiving Frac 2:</td>
						<td>" . $_POST['receivingFrac_2'] . "</td>
					</tr>					
					<tr class='even'>
						<td>Receiving Frac 3:</td>
						<td>" . $_POST['receivingFrac_3'] . "</td>
					</tr>
					<tr>
						<td>Receiving Frac 4:</td>
						<td>" . $_POST['receivingFrac_4'] . "</td>
					</tr>		
					<tr class='even'>
						<td>Receiving Frac 5:</td>
						<td>" . $_POST['receivingFrac_5'] . "</td>
					</tr>
					<tr>
						<td>Finished Water Tank 1:</td>
						<td>" . $_POST['finishedWater_1'] . "</td>
					</tr>					
					<tr class='even'>
						<td>Finished Water Tank 2:</td>
						<td>" . $_POST['finishedWater_2'] . "</td>
					</tr>
					<tr class='even'>
						<td>Sludge Tank 11:</td>
						<td>" . $_POST['sludgeFrac_11'] . "</td>
					</tr>						
					<tr>
						<td>Sludge Tank 12:</td>
						<td>" . $_POST['sludgeFrac_12'] . "</td>
					</tr>
					<tr class='even'>
						<td>RY Frac:</td>
						<td>" . $_POST['ryFracPost'] . "</td>
					</tr>						
					<tr>
						<td>FB Frac:</td>
						<td>" . $_POST['fbFracPost'] . "</td>
					</tr>	
					<tr class='even'>
						<td>RB Frac:</td>
						<td>" . $_POST['rbFracPost'] . "</td>
					</tr>				
				</table>
					<h2>Inventory Conversions</h2>				
				<table>
					<tr>
						<th>Chemical</th>
						<th>Lbs/Bags</th>
					</tr>
					<tr class='even'>
						<td>Lime Bags:</td>
						<td>" . $_POST['limeConversion'] . " Bags</td>
					</tr>
					<tr>
						<td>Caustic Bags:</td>
						<td>" . $_POST['causticConversion'] . " Bags</td>
					</tr>					
					<tr class='even'>
						<td>3755 Anionic:</td>
						<td>" . $_POST['anionicConversion'] . "</td>
					</tr>
					<tr>
						<td>5220 Cationic:</td>
						<td>" . $_POST['cationicConversion'] . "</td>
					</tr>	
				"
				
				
				;

				
	$headers = 'From: noreply@iwpusa.com \r\n';
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	mail($to, $subject, $message, $headers);
} else {
	echo "There is no data being posted :(";
}



?>