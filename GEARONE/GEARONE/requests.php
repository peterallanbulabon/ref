<?php include('config/connectDB.php'); ?>
<?php $results = mysqli_query($connections, "SELECT * FROM enrolrequests WHERE reqstatus= 'PENDING'"); ?>
<?php session_start(); 
	if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		echo "<script language='javascript'>alert('You must Log-in first before you go to this page!'); window.location.href='dashboard-admin.php'; </script>";
		// header ("Location: index.php");
	}
?>
<?php
if (isset($_GET['reject'])){
	$reqid = $_GET['reject'];
    $rec2 = mysqli_query($connections, "SELECT * FROM enrolrequests WHERE reqid = $reqid");
    $record2 = mysqli_fetch_array($rec2);
    $reqid = $record2['reqid'];
    $firstname = $record2['firstname'];
    $lastname = $record2['lastname'];
    $email = $record2['email'];

	mysqli_query($connections, "UPDATE enrolrequests SET reqstatus = 'REJECTED' WHERE reqid=$reqid");
    echo "<script language='javascript'>alert('Request Rejected!'); window.location.href='requests.php'; </script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Enrolment Request</title>
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
    <!-- table -->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

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
					<?php echo $_SESSION['username']; ?>
				</div>			
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="dashboard-admin.php"><em class="fa fa-dashboard">&nbsp;</em><b> Dashboard</b></a></li>
			<li class="active"><a href="requests.php"><em class="fa fa-folder-o">&nbsp;</em><b> Enrolment Request</b></a></li>
			<li><a href="students.php"><em class="fa fa-users">&nbsp;</em><b> Students</b></a></li>
			<li><a href="courses.php"><em class="fa fa-list">&nbsp;</em><b> Courses</b></a></li>
			<li><a href="sms.php" style="font-size: 13px"><em class="fa fa-comment-o">&nbsp;</em><b> Create Announcements</b></a></li>
			<li><a href="config/logout.php"><em class="fa fa-power-off">&nbsp;</em><b> Logout</b></a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard-admin.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Enrolment Requests</li>
			</ol>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Enrolment Requests</h1>
            </div>
        </div><!--/.row-->		
        <div class="row">
            <div class="col-lg-12">
                <div class="container-fluid">
                	<div class="table-responsive">
	                    <table id="table" class=" text-center table table-bordered">
	                        <thead>
	                            <tr>
	                                <th>NAME</th>
	                                <th>EMAIL</th>
	                                <th>MOBILE</th>
	                                <th>COURSE TYPE</th>
	                                <th>COURSE OFFER</th>
	                                <th>COURSE PRICE</th>
	                                <th>EXPECTED APPOINTMENT</th>
	                                <th colspan="3">ACTION</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        <?php while ($row = mysqli_fetch_array($results)){ ?>
	                            <tr>
	                                <td><?php echo $row['lastname'] .", ". $row['firstname']; ?></td>
	                                <td><?php echo $row['email']; ?></td>
	                                <td><?php echo $row['contno']; ?></td>
	                                <td><?php echo $row['coursetype']; ?></td>
	                                <td><?php echo $row['courseoffer']; ?></td>
	                                <td><?php echo $row['courseprice']; ?></td>
	                                <td><?php echo $row['expectedappoint']; ?></td>
	                                <td><a style="font-size: 10px;" class="btn btn-info" href="requests.php?approve=<?php echo $row['reqid']; ?>">VIEW <br> REQUEST</a></td>
	                                <td><a style="font-size: 10px;" class="btn btn-success" href="requests.php?approve=<?php echo $row['reqid']; ?>">APPROVE <br> REQUEST</a></td>
	                                <td><a style="font-size: 10px;" class="btn btn-warning" href="requests.php?reject=<?php echo $row['reqid']; ?>">REJECT <br> REQUEST</a></td>
	                            </tr>
	                        <?php } ?>
	                        </tbody>
	                    </table> 
	                    <?php include('config/approve.php'); ?>               			                    	
                	</div>
                </div>
            </div>            
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
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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
    <script type="text/javascript">
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>

		
</body>
</html>