<?php

$host = "localhost:3306";
$username = "root";
$password = "";
$db = "deal_project";
$conn = mysqli_connect($host,$username,$password,$db);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>