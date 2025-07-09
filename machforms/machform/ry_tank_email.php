

<?php

if(isset($_POST['postDifference'])){
	//echo var_dump($_POST);
	//$causticDifference = $_POST['causticBagBeginShift'] - $_POST['causticBagEndShift'];
	//$runningWaterDifference = $_POST['endShiftRunningGallons'] - $_POST['startShiftRunningGallons'];
	//$lameBagDifference = $_POST['limeBag'] - $_POST['limeBagStartShift'];
	$to = 'bthomas@iwpusa.com, aparsons@iwpusa.com, aburkett@iwpusa.com, cnutting@iwpusa.com
';
	$subject = 'RY Tank Co-West Inventory Report';
	$message = "<style>
					tr {
						font-family: calibri;
						font-size: 20px;
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
				
				
				
				
				
				<h2>RY Tank Inventory Report</h2>
				<table>
				<tr>
					<td>Date:</td>
					<td>" . $_POST['postMonth'] . "/" . $_POST['postDay'] . "/" . $_POST['postYear'] . "</td>
				</tr>				
				<tr class='even'>
					<td>Co-West Oil Lbs:</td>
					<td>" . $_POST['postOilYard'] ."</td>
				</tr>
				<tr>
					<td>Newbos Oil Lbs:</td>
					<td>" . $_POST['postNewbos'] . "</td>
				</tr>
				
				<tr class='even'>
					<td>Difference Lbs:</td>
					<td>" . $_POST['postDifference'] . "</td>
				</tr>
				<tr>
				
				<tr>					
				
				</table>
				"
				
				
				;

				
	$headers = 'From: noreply@iwpusa.com \r\n';
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	mail($to, $subject, $message, $headers);
} else {
	echo "There is no data being posted";
}



?>