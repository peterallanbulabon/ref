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

if (isset($_POST['send'])) {
  
  if(!empty($_POST['number'])){
  // Loop to store and display values of individual checked checkbox.
  $msg = $_POST['msg'];
  $api = "TR-ELLAM192002_GWW2M ";
    foreach($_POST['number'] as $selected){
      $result = itexmo($selected, $msg, $api);
      if ($result == ""){
        echo "iTexMo: No response from server!!!
        Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.  
        Please CONTACT US for help. ";  
      }elseif ($result == 0){
        echo "<script language='javascript'>alert('Message Sent!'); window.location.href='sms.php'; </script>";
      }
      else{ 
        echo "Error Num ". $result . " was encountered!";
      }
    }
  }
  // $number = $_POST['number'];
  // $msg = $_POST['msg'];
  // $api = "TR-ELLAM192002_GWW2M ";
  // $result = itexmo($number, $msg, $api);

  
}
  

?>