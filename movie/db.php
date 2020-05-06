<?php


$host="localhost";
$username="root";
$password="";
$db_name="movieDb";
// connexion
$conn = new mysqli($host, $username, $password,$db_name);
// Check connexion
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else{

}
?>
