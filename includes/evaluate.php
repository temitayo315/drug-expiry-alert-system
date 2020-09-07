<?php 
include "core.inc.php";
include "connect.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$update = mysqli_query($conn,"UPDATE `drug_table` SET `evaluation`= 'evaluated' WHERE `drug_id`='$id'");
	echo "Drug sent for Evaluation <i class='fa fa-check'></i>";
}

?>