<?php
	include('session.php');
	
	$id=$_GET['id'];
	
	mysqli_query($conn,"delete from user where userid='$id'");
	mysqli_query($conn,"delete from customer where userid='$id'");
	
	header('location:customer.php');

?>