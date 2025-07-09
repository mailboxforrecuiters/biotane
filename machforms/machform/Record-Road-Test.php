<!DOCTYPE html>
<html>
<header>
	<style>
		h1 {
			font-family: calibri;
			padding-left:10px;
		}
		
		body { 
			background-color: #D3D3D3;
			border: 5px solid gold;
			border-collapse: separate;
			border-spacing: 150px;
			max-width:600px;
			margin: auto;
			
		}
		
		p, a{
			font-family: calibri;
			padding-left:10px;
			font-size:18px;

		}
		

	</style>		
</header>
<body>
<center><img src="https://www.imperialwesternproducts.com/wp-content/uploads/2010/12/iwp_logo2.png" alt="Imperial Western Products"></center>
<?php
	include "protected/global.php";
	ini_set("display_errors", 1);

	if (isset($_GET['currentEntry'])){
		
		$entry = mysql_escape_string($_GET['currentEntry']);
		
		$conn = mysqli_connect("localhost", "root", "Chr0nOTrigg3r35!", "Inetforms");
		if ($conn-> connect_error){
			die("Connection failed:". $conn-> connect_error);
			}
			
			$sql = "SELECT * FROM ap_form_57427 WHERE id = '$entry'";
			
			$result = $conn-> query($sql);
			
			$unsatisfactory = array();
			
			if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					
					for ($i = 14; $i < 154; $i++){
						
						$rowCheck = 'element_' . $i;
						
						//Machform section break styling takes up an element number
						//element_24 is a section break, continue through loop if section break. 
						$notQuestions = array(24, 32, 33, 40, 45, 50, 53, 59, 60, 67, 73, 78, 84, 86, 96, 103, 107, 111, 120, 134, 135, 145, 150);
						if (in_array($i, $notQuestions)){
							continue;
						}
						
						if($row["$rowCheck"] == 2){
							$unsatisfactory[] = $rowCheck;
						}
					}
					
					for ($j = 299; $j < 307; $j++){
						
						$rowCheck = 'element_' . $j;
						
						if($row["$rowCheck"] == 2){
							$unsatisfactory[] = $rowCheck;
						}						
					}
					
					if (count($unsatisfactory) > 0){
						
						$employeeName = $row['element_1_1'] . " " . $row['element_1_2'];
						$instructor = $row['element_5_1'] . " " . $row['element_5_2'];
						$dateTest = $row['element_7'];
						$link = "<a href=https://inet.iwpusa.com/machforms/machform/view_entry.php?form_id=57427&entry_id=" . $row['id'] . "' target=_blank>Click here to view the failed Record of Road Test</a>";
						
						$to = 'Bthomas@iwpusa.com, cnutting@iwpusa.com, dswartz@iwpusa.com, disen@iwpusa.com, kmickle@iwpusa.com, EInfante@iwpusa.com, avilla@iwpusa.com, brios@iwpusa.com';
						
						$subject = $employeeName . " Requires Reevaluation " . $row['element_7'];
						
						$message = "
									<p>Hello,</p>
									<p><strong>$employeeName</strong> Requires Record of Road Test Reevaluation</p>
									<p>$employeeName took the Record of Road Test on $dateTest by $instructor</p>
									$link
									<p>$employeeName is required to retake the Record of Road Test until all questions are marked satisfactory</p>
						";
						
						$headers = 'From: noreply@iwpusa.com \r\n';
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
						
						mail($to, $subject, $message, $headers);
						
						
						//Need to update the table for this when the time comes. 
						$new_sql = "UPDATE ap_form_57427 SET element_322 = 2 WHERE id = '$entry'";
						$conn-> query($new_sql);
						
						echo "	<h1>IWP Record of Road Test</h1>
								<p>Thank for completing the IWP Record of Road Test</p>
								<p>unfortunately $employeeName completed the test with unsatisfactory results and will need to reschedule another exam</p>
								<p>Ken Mickle and Doug Swartz have been notified of the failed test and the requirement for a re-evaluation</p>
								<a href='https://inet.iwpusa.com/RoadTest.php'>Click here to administer a new Record of Road Test</a>"
								;
					//var_dump($unsatisfactory);
					} else{
						$employeeName = $row['element_1_1'] . " " . $row['element_1_2'];
						echo "<h1>IWP Record of Road Test</h1>
								<p>Thank for completing the IWP Record of Road Test</p>
								<p>$employeeName completed the Record of Road Test with all Satisfactory Results</p>
								<p>Ken Mickle and Doug Swartz have been notified of the completed evaluation</p>
								<p>If this is a re-evaluation remember to mark off completed on the initial evaluation</p>
								<a href='https://inet.iwpusa.com/RoadTest.php'>Click here to administer a new Record of Road Test</a>";
					}
				}	
			}
		}
?>


</body>
</html>