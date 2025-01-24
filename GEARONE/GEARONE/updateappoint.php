<?php include('config/connectDB.php'); ?>
<?php $courseresult = mysqli_query($connections, "SELECT * FROM courses"); ?>
<?php session_start(); 
	if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		echo "<script language='javascript'>alert('You must Log-in first before you go to this page!'); window.location.href='dashboard-admin.php'; </script>";
	}
?>

<?php
$edit_state = false;
$upappointmentid = $upappointmentdate = $upappointmenttime = $cartype = $price = "";
if (isset($_GET['updateapp'])){
    $upappointmentid = $_GET['updateapp'];
    $edit_state = true;
    $rec = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentid = $upappointmentid");
    $record = mysqli_fetch_array($rec);
    $upstudid = $record['studid'];
    $upappointmentdate = $record['appointmentdate'];
    $upappointmenttime = $record['appointmenttime'];
    $upappointmentid = $record['appointmentid'];
}
?>

<?php
if (isset($_POST['updateappointment'])){
	$upappointmentdate = mysqli_real_escape_string($connections, $_POST['upappointmentdate']);
	$upappointmenttime = mysqli_real_escape_string($connections, $_POST['upappointmenttime']);
	$upappointmentid = mysqli_real_escape_string($connections, $_POST['upappointmentid']);
	
	$appquery = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appointmentdate' AND appointmenttime='$appointmenttime'");
    if(mysqli_num_rows($appquery) == 3){
        $appointyyErr = "The date and time that you had entered has already been occupied...";
		echo "<script language='javascript'>alert('The date and time that you had entered has already been occupied....'); </script>"; 
    
    }   
	mysqli_query($connections, "UPDATE appointmentrequest1 SET appointmentdate='$upappointmentdate', appointmenttime='$upappointmenttime' WHERE  appointmentid = $upappointmentid");
    echo "<script language='javascript'>alert('Record Successfully Updated!'); window.location.href='students.php'; </script>";

}
?>
<?php $studappresult = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE studid = $upstudid"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Create Announcements</title>
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
			<li><a href="requests.php"><em class="fa fa-folder-o">&nbsp;</em><b> Enrolment Request</b></a></li>
			<li><a href="students.php"><em class="fa fa-users">&nbsp;</em><b> Students</b></a></li>
			<li><a href="courses.php"><em class="fa fa-list">&nbsp;</em><b> Courses</b></a></li>
			<li><a href="sms.php" style="font-size: 13px"><em class="fa fa-comment-o">&nbsp;</em><b> Create Announcements</b></a></li>
			<li><a href="config/logout.php"><em class="fa fa-power-off">&nbsp;</em><b> Logout</b></a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Update Appointments</li>
			</ol>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update Appointments</h1>
            </div>
        </div><!--/.row-->		
        <div class="row" style="height: 400px;">
            <div class="col-lg-12">
	            <div class="row" style="margin-top: 2%;">
	                <div class="col-md-6">
	                    <div id="">
	                        <form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
	                            <div class="form-group">
	                                <label><b>Date For Appointment:</b></label>
	                                <input type="text" name="upappointmentid" class="form-control" value="<?php echo $upappointmentid; ?>" required readonly>
	                            </div>                                                         
	                            <div class="form-group">
	                                <label><b>Date For Appointment:</b></label>
	                                <input type="text" name="upappointmentdate" class="shootdate form-control" value="<?php echo $upappointmentdate; ?>" required autocomplete="off">
	                            </div>                                                         
	                            <div class="form-group">
	                                <label><b>Date For Appointment:</b></label>
	                                <select name="upappointmenttime" class="form-control" required="required">
	                                  <option value="07:00 AM" <?php if ($upappointmentdate=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
	                                  <option value="08:00 AM" <?php if ($upappointmentdate=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
	                                  <option value="09:00 AM" <?php if ($upappointmentdate=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
	                                  <option value="10:00 AM" <?php if ($upappointmentdate=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
	                                  <option value="11:00 AM" <?php if ($upappointmentdate=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
	                                  <option value="12:00 PM" <?php if ($upappointmentdate=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
	                                  <option value="01:00 PM" <?php if ($upappointmentdate=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
	                                  <option value="02:00 PM" <?php if ($upappointmentdate=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
	                                  <option value="03:00 PM" <?php if ($upappointmentdate=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
	                                  <option value="04:00 PM" <?php if ($upappointmentdate=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
	                                  <option value="05:00 PM" <?php if ($upappointmentdate=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
	                                  <option value="06:00 PM" <?php if ($upappointmentdate=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
	                                  <option value="07:00 PM" <?php if ($upappointmentdate=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
	                                </select>
	                            </div>   
	                            <div class="form-group">
	                            	<input type="submit" name="updateappointment" class="btn btn-success" value="UPDATE APPOINTMENT">
	                            </div>                                                      
	                        </form>

	                    </div>
	                </div>
					<div class="col-md-6">
			                <div class="container-fluid">
			                	<div class="table-responsive">
		                            <table id="table" class="table table-bordered text-center">
		                                <thead>
		                                    <tr>
		                                        <th>ID</th>
		                                        <th>DATE</th>
		                                        <th>TIME</th>
		                                        <th>SUBJECT</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                <?php while ($row = mysqli_fetch_array($studappresult)){ ?>
		                                    <tr>
		                                        <td><?php echo $row['appointmentid']; ?></td>
		                                        <td><?php echo $row['appointmentdate']; ?></td>
		                                        <td><?php echo $row['appointmenttime']; ?></td>
		                                        <td><?php echo $row['appointmentsubj']; ?></td>
		                                    </tr>
		                                <?php } ?>
		                                </tbody>
		                            </table> 
			                	</div>
			                </div>
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