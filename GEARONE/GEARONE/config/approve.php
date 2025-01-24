<?php
//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode){
$url = 'https://www.itexmo.com/php_api/api.php';
$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
$param = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($itexmo),
    ),
);
$context  = stream_context_create($param);
return file_get_contents($url, false, $context);}
//##########################################################################

if (isset($_GET['approve'])){
	$reqid = $_GET['approve'];
    $rec1 = mysqli_query($connections, "SELECT * FROM enrolrequests WHERE reqid = $reqid");
    $record1 = mysqli_fetch_array($rec1);
    $reqid = $record1['reqid'];
    $firstname = $record1['firstname'];
    $lastname = $record1['lastname'];
    $email = $record1['email'];

    $username = $lastname."".$reqid;
    $number = $record1['contno'];
    $fullmsg = "Your request on Gear-1 Driving School has been approved. Your account is:\nU: ".$username."\nP: gear123"; 

    $api = "TR-ELLAM192002_GWW2M";

  $name = strip_tags(htmlspecialchars($firstname." ".$lastname));
  $email_address = strip_tags(htmlspecialchars($_POST['email']));
  $to = $email_address; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
  $email_subject = "Your Enrolment Request has been approved!";
  $headers = "From: g1.drivings@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
  $headers = "Reply-To: g1.drivings@gmail.com";

  mail($to,$email_subject,$email_body,$headers);


  mysqli_query($connections, "UPDATE enrolrequests SET reqstatus = 'APPROVED' WHERE reqid=$reqid");
	mysqli_query($connections, "UPDATE appointmentrequest1 SET appointstatus = 'APPROVED', studid = '$reqid' WHERE firstname = '$firstname' AND lastname = '$lastname'");

	$newstudent = "INSERT INTO accounts (studno, firstname, lastname, email, username, password) VALUES('$reqid', '$firstname', '$lastname', '$email', '$username', 'gear123')";
	mysqli_query($connections, $newstudent);

    $result = itexmo($number, $fullmsg, $api);
    if ($result == ""){
      echo "iTexMo: No response from server!!!
      Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.  
      Please CONTACT US for help. ";  
    }else if ($result == 0){
    echo "<script language='javascript'>alert('Request Successfully Updated! The Confirmation Email & SMS has sent to the New Student.'); window.location.href='requests.php'; </script>";    
    }
    else{ 
      echo "Error Num ". $result . " was encountered!";
    }
  }

?>

