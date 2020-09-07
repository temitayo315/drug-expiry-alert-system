<?php

	include('session.php');
	
	$cpass=md5($_POST['cpass']);
	$repass=md5($_POST['repass']);
	
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
		
		$fipassword=md5($password);
		mysqli_query($conn,"update `admin` set Username='$username', Password='$fipassword' where id='".$_SESSION['id']."'");
		mysqli_query($conn,"insert into activity_log (admin_id,action,activity_date) values ('".$_SESSION['id']."','Updated account',NOW())");
		?>
		<script>
			window.alert('Account updated successfully!');
			window.history.back();
		</script>
		<?php
	}
		
?>