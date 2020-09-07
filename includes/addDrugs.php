<?php
	include('core.inc.php');
	
	if($_SERVER['REQUEST_METHOD']=='POST'){


	$batch= check_input($_POST['batch']);
	$name= check_input($_POST['name']);
	$desc= check_input($_POST['desc']);
	//$qrCode= check_input($_POST['qrCode']);
	$pro_date= check_input($_POST['pro_date']);
	$ex_date= check_input($_POST['ex_date']);
	$qty= check_input($_POST['qty']);
	$price= check_input($_POST['price']);
	$status = 2;
	
				
	$insert = "INSERT INTO `drug_table`(`drug_id`, `admin_id`, `batch_id`, `drug_name`, `description`, `prod_date`, `expiry_date`, `qty`, `price`,`status`,`evaluation`) VALUES ('','".$_SESSION['id']."','$batch','$name','$desc','$pro_date','$ex_date','$qty','$price','$status','normal')";
	$query = mysqli_query($conn, $insert);
	$pid=mysqli_insert_id($conn);

	if($query){
		mysqli_query($conn,"INSERT INTO `activity_log` (admin_id, action, activity_date) VALUES ('".$_SESSION['id']."', 'Added new drug', NOW())");
	?>

		<script>
			window.alert('Drug added successfully!');
			window.history.back();
		</script>
<?php		}else{
			echo "Error!".mysqli_error($conn);
}
	}
	?>