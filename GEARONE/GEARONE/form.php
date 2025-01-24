<?php include("config/connectDB.php"); ?>
<?php include("config/errors.php"); ?>
<?php
if (isset($_GET['coursechoice'])){
    $courseno = $_GET['coursechoice'];
    $rec = mysqli_query($connections, "SELECT * FROM courses WHERE courseno = $courseno");
    $record = mysqli_fetch_array($rec);
    $courseno = $record['courseno'];
    $courseoffer = $record['courseoffer'];
    $coursetype = $record['coursetype'];
    $price = $record['price'];
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gear-1 Driving School - ENROLMENT FORM</title>
    <link href="favicon.ico" rel="icon" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="resource1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="resource1/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="resource1/css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #212529" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">Gear - 1 Driving School</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#portfolio">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#services">Branches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#contact">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary" style="margin: 8px;" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section>
      <div class="container">
        <form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
          <h2 class="section-heading text-uppercase text-center">ENROLLMENT FORM</h2>
          <div class="col-md-12">
            <h4 class="subheading">Personal Information</h4><hr>
            <div class="row mt-3">
              <div class="col-md-6">
                <label><b>First Name:</b></label>
                <input type="text" placeholder="First Name" name="firstname" value="<?php echo $firstname; ?>" class="form-control" autofocus="" required>
              </div>
              <div class="col-md-6">
                <label><b>Last Name:</b></label>
              <input type="text" placeholder="Last Name" name="lastname" value="<?php echo $lastname; ?>" class="form-control" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <label><b>Birthdate:</b></label>
                <input type="date" placeholder="Birthdate" name="bdate" class="form-control" value="<?php echo $bdate; ?>" required>
              </div>
              <div class="col-md-4">
                <label><b>Email Address:</b></label>
                <input type="email" placeholder="Email" name="email" value="<?php echo $email;?>" class="form-control" required>
              </div>
              <div class="col-md-4">
                <label><b>Mobile Number:</b></label>
                <input type="text" placeholder="Contact No." name="contno" value="<?php echo $contno;?>" class="form-control" maxlength="11" required>
              </div>
              <div class="col-md-12 text-danger">
                <span><?php echo $bdateErr; ?></span>
                <span><?php echo $contnoErr; ?></span>
              </div>
              
            </div>
            <div class="row mt-3">
              <div class="col-md-12">
                <label><b>Address:</b></label>
              <input type="text" placeholder="Address" name="address" value="<?php echo $address;?>" class="form-control" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-12">
                <label><b>Work or School:</b></label>
                <input type="text" placeholder="Work or School" name="workorschool" value="<?php echo $workorschool; ?>" class="form-control" required>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <h4 class="subheading mt-3">Course Information</h4><hr>
            <div class="row">
              <div class="col-md-4">
                <label><b>Course Type:</b></label>
                <!-- <input type="text" name="courseno1" class="form-control" value="<?php echo $courseno; ?>" disabled> -->
                <input type="text" name="coursetype1" class="form-control" value="<?php echo $coursetype; ?>" readonly>
              </div>
              <div class="col-md-4">
                <label><b>Course Offer:</b></label>
                <input type="text" name="courseoffer1" class="form-control" value="<?php echo $courseoffer; ?>" readonly>
              </div>
              <div class="col-md-4">
                <label><b>Course Price:</b></label>
                <input type="text" name="price1" class="form-control" value="<?php echo $price; ?>" readonly>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <h4 class="subheading mt-3">Appointment Schedule</h4><hr>
            <div class="col-md-12 text-danger"><span><?php echo $appointschedErr; ?></span></div>
            <h5 class="subheading mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Payment Schedule</h5><hr>
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
           
            <h5 class="subheading mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Driving Schedule</h5><hr>
            <p class="text-muted"><i>This schedule is not yet final and might be changed due to possible adjustments.</i></p>

              <?php include("drivingschedule.php"); ?>

          </div>
          <input type="submit" class="btn btn-primary mt-5" name="done" value="DONE">
        </form>         
      </div>    
    </section>


    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Gear-1 Driving School 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- JAVASCRIPTS -->
    <DIV>
      <!-- Bootstrap core JavaScript -->
      <script src="resource1/vendor/jquery/jquery.min.js"></script>
      <script src="resource1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Plugin JavaScript -->
      <script src="resource1/vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Contact form JavaScript -->
      <script src="resource1/js/jqBootstrapValidation.js"></script>
      <script src="resource1/js/contact_me.js"></script>
      <!-- Custom scripts for this template -->
      <script src="resource1/js/agency.min.js"></script>
      <!-- Javascript on disabling past dates       -->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script type="text/javascript">
          $( function() {
              $( ".shootdate" ).datepicker({
                  minDate: 0
              });
          });
      </script>      
    </DIV>

  </body>

</html>
