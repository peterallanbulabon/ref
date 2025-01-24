<?php include('config/connectDB.php'); ?>
<?php $courseresult = mysqli_query($connections, "SELECT * FROM courses"); ?>
<?php session_start(); 
	if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		echo "<script language='javascript'>alert('You must Log-in first before you go to this page!'); window.location.href='dashboard-admin.php'; </script>";
	}
?>
<?php
$edit_state = false;
$courseno = $courseoffer = $coursetype = $cartype = $price = "";
if (isset($_GET['updatecourse'])){
    $courseno = $_GET['updatecourse'];
    $edit_state = true;
    $rec = mysqli_query($connections, "SELECT * FROM courses WHERE courseno = $courseno");
    $record = mysqli_fetch_array($rec);
    $courseoffer = $record['courseoffer'];
    $coursetype = $record['coursetype'];
    $cartype = $record['cartype'];
    $price = $record['price'];
    $courseno = $record['courseno'];
}
?>
<?php
if (isset($_POST['updateccourse'])){
	$courseno = mysqli_real_escape_string($connections, $_POST['courseno']);
	$courseoffer = mysqli_real_escape_string($connections, $_POST['courseoffer']);
	$coursetype = mysqli_real_escape_string($connections, $_POST['coursetype']);
	$cartype = mysqli_real_escape_string($connections, $_POST['cartype']);
	$price = mysqli_real_escape_string($connections, $_POST['price']);


	mysqli_query($connections, "UPDATE courses SET courseoffer='$courseoffer', coursetype='$coursetype', cartype='$cartype', price='$price' WHERE courseno=$courseno");
    echo "<script language='javascript'>alert('Record Successfully Updated!'); window.location.href='courses.php'; </script>";

}
?>
<?php
if (isset($_POST['addcourse'])){
	$courseoffer =$_POST['courseoffer'];
	$coursetype =$_POST['coursetype'];
	$cartype =$_POST['cartype'];
	$price =$_POST['price'];
	$sql = "INSERT INTO courses (courseoffer, coursetype, cartype, price) VALUES('$courseoffer', '$coursetype', '$cartype', '$price')";
	mysqli_query($connections, $sql);
    echo "<script language='javascript'>alert('Record Successfully Added!'); window.location.href='courses.php'; </script>";
}
?>
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
				<li class="active">Add Courses</li>
			</ol>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Courses</h1>
            </div>
        </div><!--/.row-->		
        <div class="row" style="height: 400px;">
            <div class="col-lg-12">
				<form method="post" action="add-course.php">
					<div class="container-fluid">
						<div class="col-md-4">
                            <?php if ($edit_state == true): ?>
			            		<div class="form-group">
				                	<label><b>Course No.:</b></label>
				                	<input type="text" name="courseno" class="form-control" value="<?php echo $courseno; ?>" readonly>
				                </div> 
                            <?php endif ?>													
		            		<div class="form-group">
			                	<label><b>Course Offer:</b></label>
			                	<input type="text" name="courseoffer" class="form-control" value="<?php echo $courseoffer; ?>" required>
			                </div>       
		            		<div class="form-group">
			                	<label><b>Course Type:</b></label>
			                	<input type="text" name="coursetype" class="form-control" value="<?php echo $coursetype; ?>" required>
			                </div>       
		            		<div class="form-group">
			                	<label><b>Car Type:</b></label>
			                	<input type="text" name="cartype" class="form-control" value="<?php echo $cartype; ?>" required>
			                </div>       
		            		<div class="form-group">
			                	<label><b>Price:</b></label>
			                	<input type="text" name="price" class="form-control" value="<?php echo $price; ?>" required>
			                </div> 
		            		<div class="form-group text-right">
                            <?php if ($edit_state == false): ?>
			                	<input type="submit" name="addcourse" class="btn btn-success" value="ADD COURSES">
                            <?php else: ?>
			                	<input type="submit" name="updateccourse" class="btn btn-success" value="UPDATE COURSE">
                            <?php endif ?>

			                </div> 
						</div>
						<div class="col-md-8">
				                <div class="container-fluid">
				                	<div class="table-responsive">
					                    <table id="table" class="table table-bordered text-center">
					                        <thead>
					                            <tr>
					                                <th>COURSE NO.</th>
					                                <th>COURSE OFFERS</th>
					                                <th>COURSE TYPE</th>
					                                <th>CAR TYPE</th>
					                                <th>PRICE</th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                        <?php while ($row = mysqli_fetch_array($courseresult)){ ?>
					                            <tr>
					                                <td><?php echo $row['courseno']; ?></td>
					                                <td><?php echo $row['courseoffer']; ?></td>
					                                <td><?php echo $row['coursetype']; ?></td>
					                                <td><?php echo $row['cartype']; ?></td>
					                                <td><?php echo $row['price']; ?></td>
					                            </tr>
					                        <?php } ?>
					                        </tbody>
					                    </table> 
				                	</div>
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