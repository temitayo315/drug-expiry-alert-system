<?php
	include('session.php');

	if (isset($_GET['clicked'])) {
		$id = $_GET['clicked'];
		mysqli_query($conn,"delete * from batch where b_id='$id'");
		echo "Drug Trashed out!<i class='fa fa-check'></i>";
		header('location:batch.php');
	
}	

?>