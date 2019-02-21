<?php
// Create your variables
			
// Create database variables
$servername = "localhost";
$username   = "root"; // For localhost it will be root
$password   = "mysql"; // If using Ammps "mysql" if other leave empty
$dbname     = "comp1006"; // replace with your database name
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) or die('Could not connect: '. mysql_error());
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>