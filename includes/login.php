<?php
	session_start();
	require('connect.php');
	
	
	function check_input($data) {
		require 'connect.php';

		$data = mysqli_real_escape_string($conn, $data);
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$username=check_input($_POST['username']);
		$pass = check_input($_POST["password"]);
		$fpassword=md5($pass);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
			$_SESSION['msg'] = "Username should not contain space and special characters!"; 
			header('location: ../index.php');
		}
		else{
			
		$query=mysqli_query($conn,"select * from `admin` where Username='$username' and Password='$pass'");
		
		if(mysqli_num_rows($query)==0){
			$_SESSION['msg'] = "Login Failed, Invalid Input!";
			header('location: ../index.php');
		}
		else{
			
			$row=mysqli_fetch_array($query);
			if ($row['Access']==1){
				$_SESSION['id']=$row['id'];
				?>
				<script>
					window.alert('Login Success, Welcome Admin!');
					window.location.href='../admin/';
				</script>
				<?php
			}
			elseif ($row['Access']==2){
				$_SESSION['id']=$row['id'];
				?>
				<script>
					window.alert('Login Success, Welcome Factory worker!');
					window.location.href='../factory_worker/';
				</script>
				<?php
			}
		}
		
		}
	}
?>