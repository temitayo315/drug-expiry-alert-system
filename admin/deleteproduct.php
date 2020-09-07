<?php
	include('session.php');
	$pid=$_GET['id'];
	
	
	
	mysqli_query($conn,"delete from drug_table where drug_id='$pid'");
	
	echo "<script>alert('Drug Trashed out!')</script>";

	header('location:product.php');

?>