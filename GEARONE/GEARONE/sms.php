<?php include('config/connectDB.php'); ?>
<?php $studnos = mysqli_query($connections, "SELECT * FROM enrolrequests WHERE reqstatus = 'APPROVED'"); ?>
<?php session_start(); 
	if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		echo "<script language='javascript'>alert('You must Log-in first before you go to this page!'); window.location.href='dashboard-admin.php'; </script>";
		// header ("Location: index.php");
	}
?>
<?php include('config/itexmo.php'); ?>
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
			<li class="active"><a href="sms.php" style="font-size: 14px"><em class="fa fa-comment-o">&nbsp;</em><b> Create Announcements</b></a></li>
			<li><a href="config/logout.php"><em class="fa fa-power-off">&nbsp;</em><b> Logout</b></a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard-admin.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Create Announcements</li>
			</ol>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Create Announcements</h1>
            </div>
        </div><!--/.row-->		
        <div class="row" style="height: 400px;">
            <div class="col-lg-12">
				<form method="post" action="sms.php">
					<div class="container-fluid">
						<div class="col-md-6">
		            		<div class="form-group">
			                	<label><b>Message:</b></label>
			                	<textarea class="form-control" name="msg" rows="10" style="resize: none;" maxlength="100" onkeyup="countchar(this)"></textarea>
			                	<p class="help-block h6 text-right">Characters left is <b id="charNum">100</b>.</p>
			                </div>       
						</div>
						<div class="col-md-6">
			                <div class="form-group">
			                	<label><b>Recipient:</b></label>
			                	<div class="table-responsive">
						            <table class="table table-bordered">
						            	<tr>
						            		<th>NAME</th>
						            		<th>CONTACT NO.</th>
						            		<th>SELECT</th>
						            	</tr>
			                        	<?php while ($row = mysqli_fetch_array($studnos)){ ?>
				                            <tr>
		                                		<td><?php echo $row['lastname'] .", ". $row['firstname']; ?></td>
				                                <td><?php echo $row['contno']; ?></td>
							            		<td><input type="checkbox" name="number[]" value="<?php echo $row['contno']; ?>"></td>
				                            </tr>
			                        	<?php } ?>
						            </table>
			                	</div>
							</div>
			                <div class="form-group text-right">
			                	<input type="submit" name="send" value="SEND" class="btn btn-success">
			                	
			                </div>
						</div>
	            	</div>					
				</form>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
    <script type="text/javascript">
      function countchar(val){
        var len = val.value.length;
        if (len >= 100) {
          val.value = val.value.substring(0, 100);
        }else{
          $('#charNum').text(100 - len);
        }
      };
    </script>
		
</body>
</html>