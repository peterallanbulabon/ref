<?php include("config/connectDB.php"); ?>
<?php session_start(); 
	if (!(isset($_SESSION['studno']) && $_SESSION['studno'] != '')) {
		echo "<script language='javascript'>alert('You must Log-in first before you go to this page!'); window.location.href='login.php'; </script>";
		// header ("Location: index.php");
	}
?>
<?php $myappointresult = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE studid = '".$_SESSION['studno']."'"); ?>
<?php 
$mycourse = mysqli_query($connections, "SELECT * FROM enrolrequests WHERE reqid = '".$_SESSION['studno']."'"); 
$record = mysqli_fetch_array($mycourse);
$courseoffer = $record['courseoffer'];
$firstname = $record['firstname'];
$lastname = $record['lastname'];
$email = $record['email'];
?>
<?php include("config/errors-appointments.php"); ?>


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
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <style type="text/css">
    	#panel{
    		display: none;
    	}
    </style>
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
					<?php echo  $_SESSION['name']; ?>
				</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="dashboard-student.php"><em class="fa fa-dashboard">&nbsp;</em><b> Dashboard</b></a></li>
			<li><a href="myprofile.php"><em class="fa fa-user">&nbsp;</em><b> My Profile</b></a></li>
			<li class="active"><a href="my-appointments.php" data-toggle="tooltip" data-placement="right" title="Page unavailable. Still on process."><em class="fa fa-calendar">&nbsp;</em><b> My Appointment</b></a></li>
			<li><a href="config/logout.php"><em class="fa fa-power-off">&nbsp;</em><b> Logout</b></a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb"> 
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">My Appointment</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">My Appointment</h1>
			</div>
		</div><!--/.row-->
		<!-- PANELS -->
		<div class="panel panel-container">
            <div class="row" style="margin: 2%;">
                <div class="col-lg-12">
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
                                <?php while ($row = mysqli_fetch_array($myappointresult)){ ?>
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
            <div class="row">
            	<div class="col-lg-12">
            		<button href="" class="btn btn-success" id="flipbtn" style="margin: 2%;"><em class="fa fa-caret-down">&nbsp;</em> UPDATE MY APPOINTMENT</button>
            		<span class="text-danger"><?php echo $noticeErr; ?></span>
            	</div>
            </div>    
            <div class="row" style="margin: 2%;">
            	<div class="col-lg-12">
            		<div id="panel">
            			<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
	            			<input type="hidden" name="courseoffer" class="form-control" value="<?php echo $courseoffer;?>" required>
	            			<input type="hidden" name="name" class="form-control" value="<?php echo $firstname.' '.$lastname;?>" required>
	            			<input type="hidden" name="email" class="form-control" value="<?php echo $email;?>" required>
				            <p class="text-muted"><i>If you wanted to update your appointment ablablbalbalbal.</i></p>

				            <div class="panel-heading"><h4><strong>Payment Schedule</strong></h4></div><br>
				            <div class="row">
				              <div class="col-md-6">
				                <label><b>Date For Appointment:</b></label>
				                <input type="text" name="appointmentdate" class="shootdate form-control" value="<?php echo $appointmentdate; ?>" required autocomplete="off">
				              </div>
				              <div class="col-md-6">
				                <label><b>Time For Appointment:</b></label>
				                <select name="appointmenttime" class="form-control" required="required">
				                  <option value="07:00 AM" <?php if ($apptdropdown=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
				                  <option value="08:00 AM" <?php if ($apptdropdown=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
				                  <option value="09:00 AM" <?php if ($apptdropdown=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
				                  <option value="10:00 AM" <?php if ($apptdropdown=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
				                  <option value="11:00 AM" <?php if ($apptdropdown=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
				                  <option value="12:00 PM" <?php if ($apptdropdown=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
				                  <option value="01:00 PM" <?php if ($apptdropdown=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
				                  <option value="02:00 PM" <?php if ($apptdropdown=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
				                  <option value="03:00 PM" <?php if ($apptdropdown=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
				                  <option value="04:00 PM" <?php if ($apptdropdown=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
				                  <option value="05:00 PM" <?php if ($apptdropdown=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
				                  <option value="06:00 PM" <?php if ($apptdropdown=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
				                  <option value="07:00 PM" <?php if ($apptdropdown=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
				                </select>
				              </div>
				              <div class="col-md-12 text-danger">
				                <span><?php echo $appointErr; ?></span>
				                <span><?php echo $appointyyErr; ?></span>
				              </div>               
				            </div>
				            <div class="panel-heading"><h4><strong>Driving Schedule</strong></h4></div><br>
						
							<?php include('drivingschedule.php'); ?>
							<div class="text-right" style="margin: 2%;">
								<input type="submit" class="btn btn-info mt-5" name="done" value="SUBMIT">
							</div>            				
            			</form>

            		</div>
            	</div>
            </div>    
		</div><!--/.row-->
	</div>   	
            

	<script src="resource2/js/jquery-1.11.1.min.js"></script>
	<script src="resource2/js/bootstrap.min.js"></script>
	<script src="resource2/js/chart.min.js"></script>
	<script src="resource2/js/chart-data.js"></script>
	<script src="resource2/js/easypiechart.js"></script>
	<script src="resource2/js/easypiechart-data.js"></script>
	<script src="resource2/js/bootstrap-datepicker.js"></script>
	<script src="resource2/js/custom.js"></script>
	<!-- TABLES -->
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- SLIDING PANELS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Javascript on disabling past dates       -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
	<script> 
	$(document).ready(function(){
	    $("#flipbtn").click(function(){
	        $("#panel").slideToggle("slow");
	    });
	});
	</script>
	<script type="text/javascript">
	  $( function() {
	      $( ".shootdate" ).datepicker({
	          minDate: 0
	      });
	  });
	</script>      
			
</body>
</html>