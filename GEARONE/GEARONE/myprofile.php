<?php include("config/connectDB.php"); ?>
<?php session_start(); 
	if (!(isset($_SESSION['studno']) && $_SESSION['studno'] != '')) {
		echo "<script language='javascript'>alert('You must Log-in first before you go to this page!'); window.location.href='login.php'; </script>";
		// header ("Location: index.php");
	}
?>
<?php $myappointresult = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE studid = '".$_SESSION['studno']."'"); ?>
<?php 
	$forpicture = mysqli_query($connections, "SELECT * FROM accounts WHERE studno = '".$_SESSION['studno']."'"); 
	$recordd = mysqli_fetch_array($forpicture);
	$picture = $recordd['picture'];
?>
<?php  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE accounts SET picture = '$file' WHERE studno = '".$_SESSION['studno']."'";  
      if(mysqli_query($connections, $query)){  
		echo "<script language='javascript'>alert('Picture successfully changed!'); window.location.href='myprofile.php'; </script>";    

      }  
 }  
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
	<style type="text/css">
		.hvrbtn {
		    display: none;
		}

		img:hover + .hvrbtn, .hvrbtn:hover {
		    display: inline-block;
		}
	
		.container {
		    position: relative;
		    width: 100%;
		}

		.container img {
		    width: 100%;
		    height: auto;
		}

		.container .btn {
		    position: absolute;
		    top: 10%;
		    left: 85%;
		    transform: translate(-50%, -50%);
		    -ms-transform: translate(-50%, -50%);
		    font-size: 16px;
		    padding: 12px 24px;
		    border: none;
		    cursor: pointer;
		    border-radius: 5px;
		}
    	#chooseimage{
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
			<li class="active"><a href="myprofile.php"><em class="fa fa-user">&nbsp;</em><b> My Profile</b></a></li>
			<li><a href="my-appointments.php" data-toggle="tooltip" data-placement="right" title="Page unavailable. Still on process."><em class="fa fa-calendar">&nbsp;</em><b> My Appointment</b></a></li>
			<li><a href="config/logout.php"><em class="fa fa-power-off">&nbsp;</em><b> Logout</b></a></li>
		</ul>
	</div><!--/.sidebar-->
<?php 
$myprofile = "SELECT enrolrequests.firstname, enrolrequests.lastname, enrolrequests.email, enrolrequests.age, enrolrequests.bdate, enrolrequests.address, enrolrequests.contno, enrolrequests.workorschool, enrolrequests.coursetype, enrolrequests.courseoffer, enrolrequests.courseprice, accounts.username, accounts.password, accounts.picture FROM enrolrequests INNER JOIN accounts ON enrolrequests.reqid = accounts.studno WHERE reqid = '".$_SESSION['studno']."'";

if($result = $connections->query($myprofile))
{
    while($row = $result->fetch_assoc()) { ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb"> 
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">My Profile</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<span><h1 class="page-header">My Profile <button class="btn btn-warning" style="float: right;" data-toggle="tooltip" title="Edit Profile"><em class="fa fa-edit"></em></button></h1></span>

				<!-- <span><button class="btn btn-warning" style="float: right; margin: 5%;"><em class="fa fa-edit"></em></button></span> -->
			</div>
		</div><!--/.row-->



		<div class="panel panel-container">
			<div class="row">
				<div class="col-md-4 text-center">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="container">
	            				<?php
	            				if ($picture == "") { 
	            					echo '<img class="img-thumbnail imgg" src="profile.jpg" alt="">';
	            				} else { 
	            					echo '<img class="img-thumbnail imgg" src="data:image/jpeg;base64,'.base64_encode($picture ).'" alt="">';
	            				} 
	            				?>								
								<button class="btn btn-success hvrbtn" id="showuploadfile"><em class="fa fa-edit"></em></button>
							</div>
		            		<div id="chooseimage">
		            			<form method="post" enctype="multipart/form-data">
									<input type="file" name="image" id="image"/><br />  
									<input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" /> 
								</form>
		            		</div>
						</div>
					</div>
				</div>
				<!-- PANEL 1 -->
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading"><h2><strong><?php echo $row['lastname'] .", ". $row['firstname']; ?>
						</strong></h2></div>

						<div class="panel-body">
							<p style="font-size: 18px;"><b>Email Address: &nbsp; </b><?php echo $row['email']; ?></p>
							<p style="font-size: 18px;"><b>Age: &nbsp; </b><?php echo $row['age']; ?></p>
							<p style="font-size: 18px;"><b>Birth Date: &nbsp; </b><?php echo $row['bdate']; ?></p>
							<p style="font-size: 18px;"><b>Address: &nbsp; </b><?php echo $row['address']; ?></p>
							<p style="font-size: 18px;"><b>Mobile Number: &nbsp; </b><?php echo $row['contno']; ?></p>
							<p style="font-size: 18px;"><b>Current Work or School Attending: &nbsp; </b><?php echo $row['workorschool']; ?></p>
                            <p style="font-size: 18px;"><b>My Course: &nbsp; </b><?php echo $row['coursetype']; ?></p>
                            <p style="font-size: 18px;"><b>My Course Offer: &nbsp; </b><?php echo $row['courseoffer']; ?></p>
                            <p style="font-size: 18px;"><b>Course Price: &nbsp; </b><?php echo $row['courseprice']; ?></p>
						</div>
					</div>
				</div>				
			</div>
            <div class="row" style="margin: 2%;">
                <div class="col-lg-12">
                    <div class="panel-heading"><h2><strong>My Appointments</strong></h2></div><br>
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

		</div><!--/.row-->
	</div>   
    <?php }
    $result->free();
}
else
{
    echo "No results found";
}
?>

	
	<script src="resource2/js/jquery-1.11.1.min.js"></script>
	<script src="resource2/js/bootstrap.min.js"></script>
	<script src="resource2/js/chart.min.js"></script>
	<script src="resource2/js/chart-data.js"></script>
	<script src="resource2/js/easypiechart.js"></script>
	<script src="resource2/js/easypiechart-data.js"></script>
	<script src="resource2/js/bootstrap-datepicker.js"></script>
	<script src="resource2/js/custom.js"></script>
    <!-- SLIDING PANELS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
	<script> 
	$(document).ready(function(){
	    $("#showuploadfile").click(function(){
	        $("#chooseimage").slideToggle("slow");
	    });
	});
	</script>
	 <script>  
	 $(document).ready(function(){  
	      $('#insert').click(function(){  
	           var image_name = $('#image').val();  
	           if(image_name == '')  
	           {  
	                alert("Please Select Image");  
	                return false;  
	           }  
	           else  
	           {  
	                var extension = $('#image').val().split('.').pop().toLowerCase();  
	                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
	                {  
	                     alert('Invalid Image File');  
	                     $('#image').val('');  
	                     return false;  
	                }  
	           }  
	      });  
	 });  
	 </script> 		
</body>
</html>