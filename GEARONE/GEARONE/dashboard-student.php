<?php include("config/connectDB.php"); ?>
<?php session_start(); 
	if (!(isset($_SESSION['studno']) && $_SESSION['studno'] != '')) {
		echo "<script language='javascript'>alert('You must Log-in first before you go to this page!'); window.location.href='login.php'; </script>";
		// header ("Location: index.php");
	}
?>
<?php 
    // appointment of student
    $result3 = mysqli_query($connections, "SELECT count(*) as total from appointmentrequest1 WHERE studid = '".$_SESSION['studno']."'");
    $data3 = mysqli_fetch_assoc($result3);

    $result4 = mysqli_query($connections, "SELECT count(*) as total from appointmentrequest1 WHERE appointmentdate = date_format(curdate(), '%m/%d/%Y')AND studid = '".$_SESSION['studno']."'");
    $data4 = mysqli_fetch_assoc($result4);

    $result5 = mysqli_query($connections, "SELECT count(*) as total from appointmentrequest1 WHERE appointmentdate > date_format(CURRENT_DATE(), '%m/%d/%Y')AND studid = '".$_SESSION['studno']."'");
    $data5 = mysqli_fetch_assoc($result5);

    $result6 = mysqli_query($connections, "SELECT count(*) as total from appointmentrequest1 WHERE appointmentdate < date_format(CURRENT_DATE(), '%m/%d/%Y')AND studid = '".$_SESSION['studno']."'");
    $data6 = mysqli_fetch_assoc($result6);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student - Dashboard</title>
    <link href="favicon.ico" rel="icon" type="image/png">
	<link href="resource2/css/bootstrap.min.css" rel="stylesheet">
	<link href="resource2/css/font-awesome.min.css" rel="stylesheet">
	<link href="resource2/css/datepicker3.css" rel="stylesheet">
	<link href="resource2/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span style="color: yellow;">Gear - 1</span> Driving School</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-usertitle">
				<div class="profile-usertitle-name" style="color: #fed136">
					<?php echo $_SESSION['name']; ?>
				</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="dashboard-student.php"><em class="fa fa-dashboard">&nbsp;</em><b> Dashboard</b></a></li>
			<li><a href="myprofile.php"><em class="fa fa-user">&nbsp;</em><b> My Profile</b></a></li>
			<li><a href="my-appointments.php" data-toggle="tooltip" data-placement="right" title="Page unavailable. Still on process."><em class="fa fa-calendar">&nbsp;</em><b> My Appointments</b></a></li>
			<li><a href="config/logout.php"><em class="fa fa-power-off">&nbsp;</em><b> Logout</b></a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-table color-blue" style="font-size: 50px;"></em>
							<div class="large"><?php echo $data3['total']; ?></div>
							<div class="text-muted">My Appointments</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-clock-o color-blue" style="font-size: 50px;"></em>
							<div class="large"><?php echo $data4['total']; ?></div>
							<div class="text-muted">My Appointments for Today</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-clock-o color-blue" style="font-size: 50px;"></em>
							<div class="large"><?php echo $data5['total']; ?></div>
							<div class="text-muted">My Past Appointments</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-clock-o color-blue" style="font-size: 50px;"></em>
							<div class="large"><?php echo $data6['total']; ?></div>
							<div class="text-muted">My Upcoming Appointments</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
	</div>

	
	<script src="resource2/js/jquery-1.11.1.min.js"></script>
	<script src="resource2/js/bootstrap.min.js"></script>
	<script src="resource2/js/chart.min.js"></script>
	<script src="resource2/js/chart-data.js"></script>
	<script src="resource2/js/easypiechart.js"></script>
	<script src="resource2/js/easypiechart-data.js"></script>
	<script src="resource2/js/bootstrap-datepicker.js"></script>
	<script src="resource2/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>