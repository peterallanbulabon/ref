<?php include("config/connectDB.php"); ?>
<?php session_start(); 
    if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
        echo "<script language='javascript'>alert('You must Log-in first before you go to this page!'); window.location.href='dashboard-admin.php'; </script>";
        // header ("Location: index.php");
    }
?>
<?php
//fetch add to update
if (isset($_GET['viewstudent'])){
    $reqid = $_GET['viewstudent'];
    $rec = mysqli_query($connections, "SELECT * FROM enrolrequests WHERE reqid = $reqid");
    $record = mysqli_fetch_array($rec);
    $reqid = $record['reqid'];
    $firstname = $record['firstname'];
    $lastname = $record['lastname'];
    $email = $record['email'];
    $age = $record['age'];
    $bdate = $record['bdate'];
    $address = $record['address'];
    $contno = $record['contno'];
    $workorschool = $record['workorschool'];
    $coursetype = $record['coursetype'];
    $courseoffer = $record['courseoffer'];
    $courseprice = $record['courseprice'];
}
?>
<?php $studappresult = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE studid = $reqid"); ?>
<?php 
    $forpicture = mysqli_query($connections, "SELECT * FROM accounts WHERE studno = $reqid"); 
    $recordd = mysqli_fetch_array($forpicture);
    $picture = $recordd['picture'];
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - View Student</title>
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
        .container {
            position: relative;
            width: 100%;
        }

        .container img {
            width: 100%;
            height: auto;
        }   
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
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="dashboard-admin.php">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">View Student</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">View Student</h1>
            </div>
        </div><!--/.row-->
        
        <div class="panel panel-container">
            <div class="row">
                <!-- PANEL 2 -->
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PANEL 1 -->
                <div class="col-md-6">
                    <div class="panel panel-default">
                         <input type="hidden" name="reqid" value="<?php echo $reqid; ?>">
                        <div class="panel-heading"><h2><strong><?php echo $lastname .", ". $firstname; ?></strong></h2></div>

                        <div class="panel-body">
                            <p style="font-size: 18px;"><b>Email Address: &nbsp; </b><?php echo $email; ?></p>
                            <p style="font-size: 18px;"><b>Age: &nbsp; </b><?php echo $age; ?></p>
                            <p style="font-size: 18px;"><b>Birth Date: &nbsp; </b><?php echo $bdate; ?></p>
                            <p style="font-size: 18px;"><b>Address: &nbsp; </b><?php echo $address; ?></p>
                            <p style="font-size: 18px;"><b>Mobile Number: &nbsp; </b><?php echo $contno; ?></p>
                            <p style="font-size: 18px;"><b>Current Work or School Attending: &nbsp; </b><?php echo $workorschool; ?></p>
                            <p style="font-size: 18px;"><b>My Course: &nbsp; </b><?php echo $coursetype; ?></p>
                            <p style="font-size: 18px;"><b>My Course Offer: &nbsp; </b><?php echo $courseoffer; ?></p>
                            <p style="font-size: 18px;"><b>Course Price: &nbsp; </b><?php echo $courseprice; ?></p>
                        </div>
                    </div>
                </div>
            </div>

        <div class="panel panel-container">
            <div class="row" style="margin-bottom: 1%;">
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
                                        <th>UPDATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = mysqli_fetch_array($studappresult)){ ?>
                                    <tr>
                                        <td><?php echo $row['appointmentid']; ?></td>
                                        <td><?php echo $row['appointmentdate']; ?></td>
                                        <td><?php echo $row['appointmenttime']; ?></td>
                                        <td><?php echo $row['appointmentsubj']; ?></td>
                                        <td><a class="btn btn-info" id="" href="updateappoint.php?updateapp=<?php echo $row['appointmentid']; ?>">UPDATE</a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table> 
                        </div>                        
                    </div>
                </div>            
            </div> 
   
        </div><!--/.row-->


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