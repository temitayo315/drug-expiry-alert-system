<?php
	session_start();
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location:../index.php');
    exit();
	}
	
	include('includes/connect.php');

	$sq=mysqli_query($conn,"select * from `admin` where id='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['Username'];
	$fullname = $srow['Fullname'];

?>