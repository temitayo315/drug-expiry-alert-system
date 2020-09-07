<?php 	session_start();
		include('header.php'); ?>
<body style="background-image: url('image/download.jpg'); background-size:cover;">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
				<h1 class="navbar-brand" style="text-align:center;color: #fff;font-size: 30px;margin-left: 450px;text-transform: uppercase;">Drug Expiry Alert System</h1>
            </div>
        </nav>
<div class="container">
	<div id="login_form" class="well">
		<h2><center><span class="glyphicon glyphicon-lock"></span> Please Login</center></h2>
		<hr>
		<form method="POST" action="includes/login.php">
		Username: <input type="text" name="username" class="form-control" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
</div>
<?php include('script.php'); ?>
</body>
</html>