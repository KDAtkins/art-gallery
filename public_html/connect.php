<?php
$servername = "localhost";
$username = "usero";  //Username
$password = "n7%JU=9^H.Bcg={L";  //DB password
$databasename = "phpmyadmindb"; //DB Name
// Create connection
$conn = new mysqli($servername, $username, $password,$databasename);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

echo "Connection Successful";

?>