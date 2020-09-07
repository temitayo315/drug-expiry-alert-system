<?php
	include('core.inc.php');
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

	$sale_date=check_input($_POST['sale_date']);
	$dist_center=check_input($_POST['dist_center']);
	$drug=check_input($_POST['drug']);
	$qty=check_input($_POST['qty']);
	$price=check_input($_POST['price']);
	
	$query = mysqli_query($conn,"insert into sales (sales_id, admin_id, sales_date, dist_center, drug, sales_qty, sales_price) values (null,'".$_SESSION['id']."', '$sale_date', '$dist_center','$drug','$qty', '$price')");
	$userid=mysqli_insert_id($conn);
	
	if ($query) {
		mysqli_query($conn,"insert into activity_log (admin_id,action,activity_date) values (''".$_SESSION['id']."'','Made a new drug Sales',NOW())");
	
	?>
		<script>
			window.alert('Sales recorded successfully');
			window.history.back();
		</script>
	<?php
	}
}
?>