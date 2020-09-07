<?php
	session_start();
	ob_start();
	include('../includes/connect.php');

	$sq=mysqli_query($conn,"select * from `admin` where id='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['Username'];
	$password = $srow['Password'];
	$firstname = $srow['firstname'];
	$lastname = $srow['lastname'];
?>