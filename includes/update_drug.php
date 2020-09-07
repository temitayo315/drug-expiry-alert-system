<?php 
include "core.inc.php";
include "connect.php";
if (isset($_GET['drug'])) {
	$id = $_GET['drug'];
	$update = mysqli_query($conn,"UPDATE `drug_table` SET `evaluation`= 'eva' WHERE `drug_id`='$id'");
	echo "Drug sent for Evaluation <i class='fa fa-check'></i>";
}

?>