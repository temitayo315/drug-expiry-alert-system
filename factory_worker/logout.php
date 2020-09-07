<?php
	session_start();
	
	include('conn.php');
	
	mysqli_query($con,"update userlog set logout=NOW() where userlogid='".$_SESSION['userlog']."'");
	
	session_destroy();
	header('location:../../index.php');

?>