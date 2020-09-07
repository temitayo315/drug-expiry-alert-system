<?php
//include "connect.php";
include "core.inc.php";

if($_SERVER['REQUEST_METHOD']=='POST'){

	$name= check_input($_POST['name']);
	$date = date('d-M-Y');
	
	$query = mysqli_query($conn,"insert into batch values ('', '".$_SESSION["id"]."', '$name',NOW())");
	if ($query) {
		mysqli_query($conn,"insert into activity_log (admin_id,action,activity_date) values ('".$_SESSION['id']."','Added new batch',NOW())");

	?>
		<script>
			window.alert('New Batch added successfully!');
			window.history.back();
		</script>
	<?php
	}
}
?>