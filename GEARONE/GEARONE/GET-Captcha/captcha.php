<?php include('../config/connectDB.php'); ?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gear-1 Driving School - CAPTCHA</title>

    <!-- Bootstrap core CSS -->
    <link href="../resource1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../resource1/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../resource1/css/agency.min.css" rel="stylesheet">

    <script src="../resource1/js/bootstrap.js" type="text/javascript"></script>

  </head>

  <body>
   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #212529" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.php#page-top">Gear - 1 Driving School</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.php#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.php#portfolio">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.php#services">Branches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.php#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- CAPTCHA FORM -->
  	<section>
  		<div class="container col-md-4">
        <h4 class="section-heading text-uppercase">CAPTCHA</h4><hr>
  	    <form method="POST" action="captcha.php">
          <?php include('header.php'); ?>
          <?php include('captcha-config.php'); ?>
  		    <div class="form-group text-center">
  			    <label class="control-label" for="inputEmail"></label>
  			    <div class="controls">
    					<img  src="generatecaptcha.php?rand=<?php echo rand(); ?>" id='image_captcha' > 
    					<a href='javascript: refreshing_Captcha();'><i class="fa fa-refresh"></i></a> 
    					<script language='JavaScript' type='text/javascript'>
    						function refreshing_Captcha()
    						{
    							var img = document.images['image_captcha'];
    							img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
    						}
    					</script>
  			    </div>
  		    </div>
  		    <div class="form-group">
  		    	<label for="code"><b>Enter the Code Above:</b></label>
  		    	<div class="controls">
  		    		<input id="code" name="code" type="text" class="form-control" placeholder="Enter the Code Above" required autocomplete="off" autofocus="">
  		    	</div>
  		    </div>
  		    <div class="form-group">
  			    <div class="controls">
  			    	<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
  			    </div>
  		    </div>
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
      <script src="../resource1/vendor/jquery/jquery.min.js"></script>
      <script src="../resource1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Plugin JavaScript -->
      <script src="../resource1/vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Contact form JavaScript -->
      <script src="js/jqBootstrapValidation.js"></script>
      <script src="js/contact_me.js"></script>

      <!-- Custom scripts for this template -->
      <script src="js/agency.min.js"></script>
    </DIV>

</body>
</html>