<?php
if(isset($_POST['sendemail'])){
	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email_address']));
	$phone = strip_tags(htmlspecialchars($_POST['phone']));
	$message = strip_tags(htmlspecialchars($_POST['message']));


	// Create the email and send the message
	$to = 'g1.drivings@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Website Contact Form:".$name;
	$email_body = "You have received a new message from your website contact form."."\n\n"."Here are the details:"."\n\n"."Name:".$name." \n\n"."Email: ".$email_address."\n\nPhone: ".$phone."\n\n"."Message:"."\n".$message;
	$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$headers = "Reply-To: ". $email_address;

	mail($to,$email_subject,$email_body,$headers);
	echo "<script language='javascript'>alert('Your mail has been sent Thank you for sending us your concerns. Please wait for our reply thru email.'); window.location.href='index.php'; </script>";    

}

     
?>