<?php
	include('core.inc.php');
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

	$name=check_input($_POST['name']);
	$address=check_input($_POST['address']);
	$contact=check_input($_POST['contact']);
	
	$query = mysqli_query($conn,"insert into distribution_center (name, Location, Contact_info) values ('$name', '$address', '$contact')");
	$userid=mysqli_insert_id($conn);
	
	if ($query) {
		mysqli_query($conn,"insert into activity_log (admin_id,action,activity_date) values ('$userid','Added new Distribution Center',NOW())");
	
	?>
		<script>
			window.alert('New Center Added!');
			window.history.back();
		</script>
	<?php
	}
}
