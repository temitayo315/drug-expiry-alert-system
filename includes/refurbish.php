<?php 
include "core.inc.php";
include "connect.php";
if (isset($_POST['update'])) {
	$id = $_GET['drug'];
	$pro_date = $_POST['pro_date'];
	$ex_date = $_POST['expiry_date'];
    $comment = $_POST['comment'];

	$update = mysqli_query($conn,"UPDATE `drug_table` SET `prod_date`='$pro_date', `expiry_date`='$ex_date', `evaluation`= 'refurbished', `comment`='$comment' WHERE `drug_id`='$id'");
    ?>
	<script>alert('Drug Successfully Refurbished');</script>
    <script>window.location.href="../factory_worker/product.php";</script>
<?php } ?>
