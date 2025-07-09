<html>

<head>

</head>

<body>

<?php

function receivePOST($variableName)
{
 return htmlspecialchars($_POST[$variableName]);
}

$textBox = receivePOST("one");
$textArea = receivePOST("two");
$dropDown = receivePOST("three");

if (!strlen($textBox) || !strlen($textArea) || !strlen($dropDown))
{
 echo "ERROR: Not all expected values have been entered/submitted!";
}
else
{
 echo "Received submitted data!<br/><br/>";
 echo "Text box contents: $textBox<br/><br/>";
 echo "Text area contents: $textArea<br/><br/>";
 echo "Drop down contents: $dropDown<br/><br/>";

$servername = "localhost";
$username = "root";
$password = "password1";
$dbname = "TEST";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO table1 (one, two, three)
VALUES ('$textBox', '$textArea', '$dropDown')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



}



?>

</body>

</html>
