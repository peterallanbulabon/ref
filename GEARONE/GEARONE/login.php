<?php include("config/connectDB.php"); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
    <link href="favicon.ico" rel="icon" type="image/png">

	<link href="resource2/css/bootstrap.min.css" rel="stylesheet">
	<link href="resource2/css/datepicker3.css" rel="stylesheet">
	<link href="resource2/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.bg{
			background: url(resource1/img/header-bg.jpg);
		}
	</style>
</head>
<body class="bg">
	<div style="vertical-align: middle; margin-top: 5%;">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<a href="index.php" style="text-decoration: none; color: black;">
						<span><img src="favicon.png" width="18%"></span>GEAR - 1 DRIVING SCHOOL						
					</a>
				</div>
				<div class="panel-body">
					<form method="post" action="login.php">
						<fieldset>
							<div class="form-group">
								<label><b>Username:</b></label>
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="" required="" autocomplete="off">
							</div>
							<div class="form-group">
								<label><b>Password:</b></label>
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
							</div>
							<div class="form-group">
								<a href="index.php#portfolio">Dont have an account? <span style="color: #58D68D;">ENROLL NOW!</span></a>
							</div>
							<input type="submit" name="login" class="btn btn-primary" value="Login">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	

<?php
if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($connections, $_POST['username']);
	$password = mysqli_real_escape_string($connections, $_POST['password']);
	$query = mysqli_query($connections, "SELECT * FROM accounts WHERE username='$username' AND password='$password'");

	if(mysqli_num_rows($query) == 1){
		$nakuha = mysqli_fetch_array($query);
		$firstname =  $nakuha['firstname'];
		$lastname =  $nakuha['lastname'];
		$studno =  $nakuha['studno'];
		
		$_SESSION['name'] = $lastname .", ". $firstname;
		$_SESSION['studno'] = $studno;

		echo "<script language='javascript'>alert('Welcome ".$firstname."! You are now Logged In!'); window.location.href='dashboard-student.php'; </script>";
	}	
	if ($username == "admin" && $password == "admin") {

		$_SESSION['username'] = 'Admin';

		echo "<script language='javascript'>alert('Welcome ".$username."! You are now Logged In!'); window.location.href='dashboard-admin.php'; </script>";
	}
	if(mysqli_num_rows($query) == 0 || $username != 'admin' && $password != 'admin'){
		echo "<script language='javascript'>alert('You entered the wrong username/password combination.');</script>";
	}
}
?>
	

<script src="resource2/js/jquery-1.11.1.min.js"></script>
	<script src="resource2/js/bootstrap.min.js"></script>
</body>
</html>
