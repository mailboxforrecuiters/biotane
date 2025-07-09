<?php
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
?> 
