<?php 
include "core.inc.php";


	$batch_query = mysqli_query($conn, "SELECT * FROM batch");
	$row_count = mysqli_num_rows($batch_query);
	echo $row_count;

?>