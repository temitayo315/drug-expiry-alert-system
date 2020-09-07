<?php

	include('../includes/core.inc.php');
	
	$fname = check_input($_POST['fname']);
	$lname = check_input($_POST['lname']);
	$phone = check_input($_POST['phone']);
	$cpass=check_input($_POST['cpass']);
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
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		//$fipassword=md5($password);
		mysqli_query($conn,"update `admin` set firstname='$fname', lastname='$lname', phone_number='$phone', Username='$username', Password='$password' where id='".$_SESSION['id']."'");
		mysqli_query($conn,"insert into activity_log (admin_id,action,activity_date) values ('".$_SESSION['id']."','Updated account',NOW())");
		?>
		<script>
			window.alert('Account updated successfully!');
			window.history.back();
		</script>
		<?php
	}
		
?>