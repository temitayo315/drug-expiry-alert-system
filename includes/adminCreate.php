<?php

	include('core.inc.php');
	if (isset($_POST['create'])) {
		# code...
	$fname = check_input($_POST['fname']);
	$lname = check_input($_POST['lname']);
	$phone = check_input($_POST['phone']);
	$username=check_input($_POST['username']);
	$cpass=check_input($_POST['password']);
	$repass=check_input($_POST['repass']);
	
	if($cpass!=$repass){
		?>
		<script>
			window.alert('Required passwords did not match. Account not updated!');
			window.history.back();
		</script>
		<?php
	}
	else{
		//$fipassword=md5($password);
		if(mysqli_query($conn,"insert into `admin` values('','$fname','$lname','$phone','$username','$cpass', '2')")){
			mysqli_query($conn,"insert into activity_log (admin_id,action,activity_date) values ('".$_SESSION['id']."','Created new account',NOW())");
		?>
		<script>
			window.alert('New Admin created successfully!');
			window.history.back();
		</script>
		<?php
	}else{
		?>
		<script>
			window.alert('New Admin created successfully!');
			window.history.back();
		</script>
	<?php 
		}
	}
}
		
?>