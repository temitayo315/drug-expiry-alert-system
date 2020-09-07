<?php
	include('../includes/core.inc.php');
	
	$id=$_GET['id'];
	
	$name=check_input($_POST['name']);
	$location=check_input($_POST['location']);
	$contact=check_input($_POST['contact']);

	$query = mysqli_query($conn,"update distribution_center set Name='$name', Location='$location', Contact_info='$contact' where id='$id'");
	if ($query) {
	
	?>
		<script>
			window.alert('Customer updated successfully!');
			window.history.back();
		</script>
	<?php
}
?>