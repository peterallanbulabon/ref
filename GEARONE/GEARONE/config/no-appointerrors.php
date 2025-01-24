<?php
	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));
    $appointmentdate = $_POST['appointmentdate'];
    $appointmenttime = $_POST['appointmenttime'];

    if (strpos($courseoffer1, '5 Hours') !== false) {
        $appd1 = $_POST['appd1'];    $_SESSION['appd1'] = $appd1;
        $appt1 = $_POST['appt1'];    $_SESSION['appt1'] = $appt1;
        $appd2 = $_POST['appd2'];    $_SESSION['appd2'] = $appd2;
        $appt2 = $_POST['appt2'];    $_SESSION['appt2'] = $appt2;
		// Create the email and send the message
		$to = 'g1.drivings@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "Update Appointment Schedule From: ".$name;

		$email_body = "You have received a new message from your website contact form.\n\nHere are the details:\n\n
		This is ".$name.", I would like to have some changes on my appointment. Here are my requested new appointment schedule: \n
		######################################\n	
		Payment Schedule \n
		Appointment Date: ".$appointmentdate."\n
		Appointment Time: ".$appointmenttime."\n\n
		######################################\n			
		Driving Schedule \n
		Appointment Date: ".$appd1."\n
		Appointment Time: ".$appt1."\n
		----------------------------------\n
		Appointment Date: ".$appd2."\n
		Appointment Time: ".$appt2."\n
		######################################\n	

		";

		$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
		$headers = "Reply-To: ". $email_address;

		mail($to,$email_subject,$email_body,$headers);
		echo "<script language='javascript'>alert('Your mail has been sent Thank you for sending us your concerns. Please wait for our reply thru email.'); </script>"; 
    }
    if (strpos($courseoffer1, '7 Hours') !== false) { 
        $appd1 = $_POST['appd1'];    $_SESSION['appd1'] = $appd1;
        $appt1 = $_POST['appt1'];    $_SESSION['appt1'] = $appt1;
        $appd2 = $_POST['appd2'];    $_SESSION['appd2'] = $appd2;
        $appt2 = $_POST['appt2'];    $_SESSION['appt2'] = $appt2;
        $appd3 = $_POST['appd3'];    $_SESSION['appd3'] = $appd3;
        $appt3 = $_POST['appt3'];    $_SESSION['appt3'] = $appt3;
		// Create the email and send the message
		$to = 'g1.drivings@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "Update Appointment Schedule From:".$name;

		$email_body = "You have received a new message from your website contact form.\n\nHere are the details:\n\n
		This is".$name." I would like to have some changes on my appointment. Here are my requested new appointment schedule: \n\n	
		######################################\n	
		Payment Schedule \n
		Appointment Date: ".$appointmentdate."\n
		Appointment Time: ".$appointmenttime."\n\n
		######################################\n			
		Driving Schedule \n
		Appointment Date: ".$appd1."\n
		Appointment Time: ".$appt1."\n
		----------------------------------\n
		Appointment Date: ".$appd2."\n
		Appointment Time: ".$appt2."\n
		----------------------------------\n
		Appointment Date: ".$appd3."\n
		Appointment Time: ".$appt3."\n
		######################################\n	
		";

		$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
		$headers = "Reply-To: ". $email_address;

		mail($to,$email_subject,$email_body,$headers);
		echo "<script language='javascript'>alert('Your mail has been sent Thank you for sending us your concerns. Please wait for our reply thru email.'); </script>"; 

    }
    if (strpos($courseoffer1, '10 Hours') !== false) { 
        $appd1 = $_POST['appd1'];    $_SESSION['appd1'] = $appd1;
        $appt1 = $_POST['appt1'];    $_SESSION['appt1'] = $appt1;
        $appd2 = $_POST['appd2'];    $_SESSION['appd2'] = $appd2;
        $appt2 = $_POST['appt2'];    $_SESSION['appt2'] = $appt2;
        $appd3 = $_POST['appd3'];    $_SESSION['appd3'] = $appd3;
        $appt3 = $_POST['appt3'];    $_SESSION['appt3'] = $appt3;
        $appd4 = $_POST['appd4'];    $_SESSION['appd4'] = $appd4;
        $appt4 = $_POST['appt4'];    $_SESSION['appt4'] = $appt4;
		// Create the email and send the message
		$to = 'g1.drivings@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "Update Appointment Schedule From:".$name;

		$email_body = "You have received a new message from your website contact form.\n\nHere are the details:\n\n
		This is".$name." I would like to have some changes on my appointment. Here are my requested new appointment schedule: \n\n	
		######################################\n	
		Payment Schedule \n
		Appointment Date: ".$appointmentdate."\n
		Appointment Time: ".$appointmenttime."\n\n
		######################################\n			
		Driving Schedule \n
		Appointment Date: ".$appd1."\n
		Appointment Time: ".$appt1."\n
		----------------------------------\n
		Appointment Date: ".$appd2."\n
		Appointment Time: ".$appt2."\n
		----------------------------------\n
		Appointment Date: ".$appd3."\n
		Appointment Time: ".$appt3."\n
		----------------------------------\n
		Appointment Date: ".$appd4."\n
		Appointment Time: ".$appt4."\n
		######################################\n	
		";

		$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
		$headers = "Reply-To: ". $email_address;

		mail($to,$email_subject,$email_body,$headers);
		echo "<script language='javascript'>alert('Your mail has been sent Thank you for sending us your concerns. Please wait for our reply thru email.'); </script>"; 

    }
    if (strpos($courseoffer1, '15 Hours') !== false) { 
        $appd3 = $_POST['appd3'];    $_SESSION['appd3'] = $appd3;
        $appt3 = $_POST['appt3'];    $_SESSION['appt3'] = $appt3;
        $appd4 = $_POST['appd4'];    $_SESSION['appd4'] = $appd4;
        $appt4 = $_POST['appt4'];    $_SESSION['appt4'] = $appt4;
        $appd5 = $_POST['appd5'];    $_SESSION['appd5'] = $appd5;
        $appt5 = $_POST['appt5'];    $_SESSION['appt5'] = $appt5;
		// Create the email and send the message
		$to = 'g1.drivings@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "Update Appointment Schedule From:".$name;

		$email_body = "You have received a new message from your website contact form.\n\nHere are the details:\n\n
		This is".$name." I would like to have some changes on my appointment. Here are my requested new appointment schedule: \n\n	
		######################################\n	
		Payment Schedule \n
		Appointment Date: ".$appointmentdate."\n
		Appointment Time: ".$appointmenttime."\n\n
		######################################\n			
		Driving Schedule \n
		Appointment Date: ".$appd3."\n
		Appointment Time: ".$appt3."\n
		----------------------------------\n
		Appointment Date: ".$appd4."\n
		Appointment Time: ".$appt4."\n
		----------------------------------\n
		Appointment Date: ".$appd5."\n
		Appointment Time: ".$appt5."\n
		######################################\n	
		";

		$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
		$headers = "Reply-To: ". $email_address;

		mail($to,$email_subject,$email_body,$headers);
		echo "<script language='javascript'>alert('Your mail has been sent Thank you for sending us your concerns. Please wait for our reply thru email.'); </script>"; 

    }
    if (strpos($courseoffer1, '20 Hours') !== false) { 
        $appd1 = $_POST['appd1'];    $_SESSION['appd1'] = $appd1;
        $appt1 = $_POST['appt1'];    $_SESSION['appt1'] = $appt1;
        $appd2 = $_POST['appd2'];    $_SESSION['appd2'] = $appd2;
        $appt2 = $_POST['appt2'];    $_SESSION['appt2'] = $appt2;
        $appd3 = $_POST['appd3'];    $_SESSION['appd3'] = $appd3;
        $appt3 = $_POST['appt3'];    $_SESSION['appt3'] = $appt3;
        $appd4 = $_POST['appd4'];    $_SESSION['appd4'] = $appd4;
        $appt4 = $_POST['appt4'];    $_SESSION['appt4'] = $appt4;
        $appd5 = $_POST['appd5'];    $_SESSION['appd5'] = $appd5;
        $appt5 = $_POST['appt5'];    $_SESSION['appt5'] = $appt5;
        $appd6 = $_POST['appd6'];    $_SESSION['appd6'] = $appd6;
        $appt6 = $_POST['appt6'];    $_SESSION['appt6'] = $appt6;
		// Create the email and send the message
		$to = 'g1.drivings@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "Update Appointment Schedule From:".$name;

		$email_body = "You have received a new message from your website contact form.\n\nHere are the details:\n\n
		This is".$name." I would like to have some changes on my appointment. Here are my requested new appointment schedule: \n\n	
		######################################\n	
		Payment Schedule \n
		Appointment Date: ".$appointmentdate."\n
		Appointment Time: ".$appointmenttime."\n\n
		######################################\n			
		Driving Schedule \n
		Appointment Date: ".$appd1."\n
		Appointment Time: ".$appt1."\n
		----------------------------------\n
		Appointment Date: ".$appd2."\n
		Appointment Time: ".$appt2."\n
		----------------------------------\n
		Appointment Date: ".$appd3."\n
		Appointment Time: ".$appt3."\n
		----------------------------------\n
		Appointment Date: ".$appd4."\n
		Appointment Time: ".$appt4."\n
		----------------------------------\n
		Appointment Date: ".$appd5."\n
		Appointment Time: ".$appt5."\n
		----------------------------------\n
		Appointment Date: ".$appd6."\n
		Appointment Time: ".$appt6."\n
		######################################\n	
		";

		$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
		$headers = "Reply-To: ". $email_address;

		mail($to,$email_subject,$email_body,$headers);
		echo "<script language='javascript'>alert('Your mail has been sent Thank you for sending us your concerns. Please wait for our reply thru email.'); </script>"; 

    }
    if (strpos($courseoffer1, '8 Hours') !== false) { 
        $appd1 = $_POST['appd1'];    $_SESSION['appd1'] = $appd1;
        $appt1 = $_POST['appt1'];    $_SESSION['appt1'] = $appt1;
        $appd2 = $_POST['appd2'];    $_SESSION['appd2'] = $appd2;
        $appt2 = $_POST['appt2'];    $_SESSION['appt2'] = $appt2;
        $appd3 = $_POST['appd3'];    $_SESSION['appd3'] = $appd3;
        $appt3 = $_POST['appt3'];    $_SESSION['appt3'] = $appt3;
		// Create the email and send the message
		$to = 'g1.drivings@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "Update Appointment Schedule From:".$name;

		$email_body = "You have received a new message from your website contact form.\n\nHere are the details:\n\n
		This is".$name." I would like to have some changes on my appointment. Here are my requested new appointment schedule: \n\n	
		######################################\n	
		Payment Schedule \n
		Appointment Date: ".$appointmentdate."\n
		Appointment Time: ".$appointmenttime."\n\n
		######################################\n			
		Driving Schedule \n
		Appointment Date: ".$appd1."\n
		Appointment Time: ".$appt1."\n
		----------------------------------\n
		Appointment Date: ".$appd2."\n
		Appointment Time: ".$appt2."\n
		----------------------------------\n
		Appointment Date: ".$appd3."\n
		Appointment Time: ".$appt3."\n
		######################################\n	
		";

		$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
		$headers = "Reply-To: ". $email_address;

		mail($to,$email_subject,$email_body,$headers);
		echo "<script language='javascript'>alert('Your mail has been sent Thank you for sending us your concerns. Please wait for our reply thru email.'); </script>"; 

    }


   


     
?>