<?php
    session_start();

    $bdate = "";
    $contnoErr = $bdateErr = $appointschedErr = $appointErr = $appointyErr1 = $appointyErr2 = $appointyErr3 = $appointyErr4 = $appointyErr5 = $appointyErr6 = $appointyyErr1 = $appointyyErr = $appointyyErr2 = $appointyyErr3 = $appointyyErr4 = $appointyyErr5 = $appointyyErr6 = "";
    $courseno1 = $coursetype1 = $courseoffer1 = $price1 = "";
    $firstname = $lastname = $email = $age = $bdate = $address = $contno = $workorschool = "";
    $appointmentdate = $appointmenttime = $appointmentsubj = "";
    $appd1 = $appd2 = $appd3 = $appd4 = $appd5 = $appd6 = "";
    $apptdropdown = $apptdropdown1 = $apptdropdown2 = $apptdropdown3 = $apptdropdown4 = $apptdropdown5 = $apptdropdown6 = "";
    $appointsched = $appointsched1 = $appointsched2 = $appointsched3 = $appointsched4 = $appointsched5 = $appointsched6 = "";
    if(isset($_POST['done'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $bdate = $_POST['bdate'];
        $address = $_POST['address'];
        $contno = $_POST['contno'];
        $workorschool = $_POST['workorschool'];
        $coursetype1 = $_POST['coursetype1'];
        $courseoffer1 = $_POST['courseoffer1'];
        $price1 = $_POST['price1'];      
        $appointmentdate = mysqli_real_escape_string($connections, $_POST['appointmentdate']);
        $appointmenttime = mysqli_real_escape_string($connections, $_POST['appointmenttime']);
        $apptdropdown = $_POST['appointmenttime'];
        $appointsched = $appointmentdate."".$appointmenttime; 
        $appquery = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appointmentdate' AND appointmenttime='$appointmenttime'");
        // AGE VALIDATION
        $date2=date("d-m-Y");//today's date
        $date1=new DateTime($_POST['bdate']);
        $date2=new DateTime($date2);
        $interval = $date1->diff($date2);
        $myage= $interval->y; 
        // SCHEDULE VALIDATION
        $appcheck=new DateTime($_POST['appointmentdate']);
        $now = new DateTime();   
        if(mysqli_num_rows($appquery) == 3){
            $appointyyErr = "The date and time that you had entered has already been occupied...";
        }   
        if (strpos($courseoffer1, '5 Hours') !== false) {
            $appd1 = mysqli_real_escape_string($connections, $_POST['appd1']);
            $appt1 = mysqli_real_escape_string($connections, $_POST['appt1']);
            $appcheck1=new DateTime($_POST['appd1']);
            $appd2 = mysqli_real_escape_string($connections, $_POST['appd2']);
            $appt2 = mysqli_real_escape_string($connections, $_POST['appt2']);
            $appcheck2=new DateTime($_POST['appd2']);
            $apptdropdown1 = $_POST['appt1'];
            $apptdropdown2 = $_POST['appt2'];
            $appointsched1 = $appd1."".$appt1;
            $appointsched2 = $appd2."".$appt2;
            $appquery1 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd1' AND appointmenttime='$appt1'");
            $appquery2 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd2' AND appointmenttime='$appt2'");
        }
        if (strpos($courseoffer1, '7 Hours') !== false) { 
            $appd1 = mysqli_real_escape_string($connections, $_POST['appd1']);
            $appt1 = mysqli_real_escape_string($connections, $_POST['appt1']);
            $appcheck1=new DateTime($_POST['appd1']);
            $appd2 = mysqli_real_escape_string($connections, $_POST['appd2']);
            $appt2 = mysqli_real_escape_string($connections, $_POST['appt2']);
            $appcheck2=new DateTime($_POST['appd2']);
            $appd3 = mysqli_real_escape_string($connections, $_POST['appd3']);
            $appt3 = mysqli_real_escape_string($connections, $_POST['appt3']);
            $appcheck3=new DateTime($_POST['appd3']);
            $apptdropdown1 = $_POST['appt1'];
            $apptdropdown2 = $_POST['appt2'];
            $apptdropdown3 = $_POST['appt3'];
            $appointsched1 = $appd1."".$appt1;
            $appointsched2 = $appd2."".$appt2;
            $appointsched3 = $appd3."".$appt3;            
            $appquery1 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd1' AND appointmenttime='$appt1'");
            $appquery2 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd2' AND appointmenttime='$appt2'");
            $appquery3 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd3' AND appointmenttime='$appt3'");
        }
        if (strpos($courseoffer1, '10 Hours') !== false) { 
            $appd1 = mysqli_real_escape_string($connections, $_POST['appd1']);
            $appt1 = mysqli_real_escape_string($connections, $_POST['appt1']);
            $appcheck1=new DateTime($_POST['appd1']);
            $appd2 = mysqli_real_escape_string($connections, $_POST['appd2']);
            $appt2 = mysqli_real_escape_string($connections, $_POST['appt2']);
            $appcheck2=new DateTime($_POST['appd2']);
            $appd3 = mysqli_real_escape_string($connections, $_POST['appd3']);
            $appt3 = mysqli_real_escape_string($connections, $_POST['appt3']);
            $appcheck3=new DateTime($_POST['appd3']);
            $appd4 = mysqli_real_escape_string($connections, $_POST['appd4']);
            $appt4 = mysqli_real_escape_string($connections, $_POST['appt4']);
            $appcheck4=new DateTime($_POST['appd4']);
            $apptdropdown1 = $_POST['appt1'];
            $apptdropdown2 = $_POST['appt2'];
            $apptdropdown3 = $_POST['appt3'];            
            $apptdropdown4 = $_POST['appt4'];            
            $appointsched1 = $appd1."".$appt1;
            $appointsched2 = $appd2."".$appt2;
            $appointsched3 = $appd3."".$appt3;
            $appointsched4 = $appd4."".$appt4;
            $appquery1 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd1' AND appointmenttime='$appt1'");
            $appquery2 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd2' AND appointmenttime='$appt2'");
            $appquery3 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd3' AND appointmenttime='$appt3'");
            $appquery4 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd4' AND appointmenttime='$appt4'");
        }
        if (strpos($courseoffer1, '15 Hours') !== false) { 
            $appd3 = mysqli_real_escape_string($connections, $_POST['appd3']);
            $appt3 = mysqli_real_escape_string($connections, $_POST['appt3']);
            $appcheck3=new DateTime($_POST['appd3']);
            $appd4 = mysqli_real_escape_string($connections, $_POST['appd4']);
            $appt4 = mysqli_real_escape_string($connections, $_POST['appt4']);
            $appcheck4=new DateTime($_POST['appd4']);
            $appd5 = mysqli_real_escape_string($connections, $_POST['appd5']);
            $appt5 = mysqli_real_escape_string($connections, $_POST['appt5']);
            $appcheck5=new DateTime($_POST['appd5']);
            $apptdropdown3 = $_POST['appt3'];
            $apptdropdown4 = $_POST['appt4'];
            $apptdropdown5 = $_POST['appt5'];
            $appointsched3 = $appd3."".$appt3;
            $appointsched4 = $appd4."".$appt4;
            $appointsched5 = $appd5."".$appt5;            
            $appquery3 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd3' AND appointmenttime='$appt3'");
            $appquery4 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd4' AND appointmenttime='$appt4'");
            $appquery5 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd5' AND appointmenttime='$appt5'");
        }
        if (strpos($courseoffer1, '20 Hours') !== false) { 
            $appd1 = mysqli_real_escape_string($connections, $_POST['appd1']);
            $appt1 = mysqli_real_escape_string($connections, $_POST['appt1']);
            $appcheck1=new DateTime($_POST['appd1']);
            $appd2 = mysqli_real_escape_string($connections, $_POST['appd2']);
            $appt2 = mysqli_real_escape_string($connections, $_POST['appt2']);
            $appcheck2=new DateTime($_POST['appd2']);
            $appd3 = mysqli_real_escape_string($connections, $_POST['appd3']);
            $appt3 = mysqli_real_escape_string($connections, $_POST['appt3']);
            $appcheck3=new DateTime($_POST['appd3']);
            $appd4 = mysqli_real_escape_string($connections, $_POST['appd4']);
            $appt4 = mysqli_real_escape_string($connections, $_POST['appt4']);
            $appcheck4=new DateTime($_POST['appd4']);
            $appd5 = mysqli_real_escape_string($connections, $_POST['appd5']);
            $appt5 = mysqli_real_escape_string($connections, $_POST['appt5']);
            $appcheck5=new DateTime($_POST['appd5']);
            $appd6 = mysqli_real_escape_string($connections, $_POST['appd6']);
            $appt6 = mysqli_real_escape_string($connections, $_POST['appt6']);
            $appcheck6=new DateTime($_POST['appd6']);
            $apptdropdown1 = $_POST['appt1'];  $apptdropdown2 = $_POST['appt2'];
            $apptdropdown3 = $_POST['appt3'];  $apptdropdown4 = $_POST['appt4'];
            $apptdropdown5 = $_POST['appt5'];  $apptdropdown6 = $_POST['appt6']; 
            $appointsched1 = $appd1."".$appt1;
            $appointsched2 = $appd2."".$appt2;
            $appointsched3 = $appd3."".$appt3;
            $appointsched4 = $appd4."".$appt4;
            $appointsched5 = $appd5."".$appt5;
            $appointsched6 = $appd6."".$appt6;               
            $appquery1 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd1' AND appointmenttime='$appt1'");
            $appquery2 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd2' AND appointmenttime='$appt2'");
            $appquery3 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd3' AND appointmenttime='$appt3'");
            $appquery4 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd4' AND appointmenttime='$appt4'");
            $appquery5 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd5' AND appointmenttime='$appt5'");
            $appquery6 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd6' AND appointmenttime='$appt6'");
        }
        if (strpos($courseoffer1, '8 Hours') !== false) { 
            $appd1 = mysqli_real_escape_string($connections, $_POST['appd1']);
            $appt1 = mysqli_real_escape_string($connections, $_POST['appt1']);
            $appcheck1=new DateTime($_POST['appd1']);
            $appd2 = mysqli_real_escape_string($connections, $_POST['appd2']);
            $appt2 = mysqli_real_escape_string($connections, $_POST['appt2']);
            $appcheck2=new DateTime($_POST['appd2']);
            $appd3 = mysqli_real_escape_string($connections, $_POST['appd3']);
            $appt3 = mysqli_real_escape_string($connections, $_POST['appt3']);
            $appcheck3=new DateTime($_POST['appd3']);
            $apptdropdown1 = $_POST['appt1'];
            $apptdropdown2 = $_POST['appt2'];
            $apptdropdown3 = $_POST['appt3'];
            $appointsched1 = $appd1."".$appt1;
            $appointsched2 = $appd2."".$appt2;
            $appointsched3 = $appd3."".$appt3;            
            $appquery1 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd1' AND appointmenttime='$appt1'");
            $appquery2 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd2' AND appointmenttime='$appt2'");
            $appquery3 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd3' AND appointmenttime='$appt3'");
        }
        if ($myage < 17) {
            $bdateErr = "It seems that you are ".$myage." years old based on your Birthdate. Your age is INVALID according to our Policy. You must be at least 17 years old to Enroll on Gear-1 Driving School.";
        }
        elseif ($myage >= 65) {
            $bdateErr = "It seems that you are ".$myage." years old based on your Birthdate. Your age is INVALID according to our Policy. You must be at least 17 years old to Enroll on Gear-1 Driving School.";
        }
        elseif(!preg_match('/^(09|\+639)\d{9}$/',$contno)){ 
        // if phone number is invalid
            $contnoErr = "Phone number invalid !";
        }    
        elseif ($appcheck <= $now) {
            $appointErr = "Your schedule must be atleast tomorrow.";
        }
        elseif (strpos($courseoffer1, '5 Hours') !== false) {
            if ($appcheck1 <= $now) {
                $appointyErr1 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck2 <= $now) {
                $appointyErr2 = "Your schedule must be atleast tomorrow.";
            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
            }                           
            elseif($appointsched == $appointsched1 || $appointsched == $appointsched2 || $appointsched1 == $appointsched2){
                $appointschedErr = "You already entered the same date and time. Please check again.";
            }                           
            else{
                include('no-errors.php');
            }          
        }
        elseif (strpos($courseoffer1, '7 Hours') !== false) {
            if ($appcheck1 <= $now) {
                $appointyErr1 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck2 <= $now) {
                $appointyErr2 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery3) == 3){
                $appointyyErr3 = "The date and time that you had entered has already been occupied...";
            }
            elseif($appointsched == $appointsched1 || $appointsched == $appointsched2 || $appointsched == $appointsched3 || $appointsched1 == $appointsched2 || $appointsched1 == $appointsched3 || $appointsched2 == $appointsched3){
                $appointschedErr = "You already entered the same date and time. Please check again.";
            }                                          
            else{
                include('no-errors.php');
            }          
        }
        elseif (strpos($courseoffer1, '10 Hours') !== false) { 
            if ($appcheck1 <= $now) {
                $appointyErr1 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck2 <= $now) {
                $appointyErr2 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
            }
           elseif ($appcheck4 <= $now) {
               $appointyErr4 = "Your schedule must be atleast tomorrow.";
            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery3) == 3){
                $appointyyErr3 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery4) == 3){
                $appointyyErr4 = "The date and time that you had entered has already been occupied...";
            }   
            elseif($appointsched == $appointsched1 || $appointsched == $appointsched2 || $appointsched == $appointsched3 || $appointsched == $appointsched4 || $appointsched1 == $appointsched2 || $appointsched1 == $appointsched3 || $appointsched1 == $appointsched4 || $appointsched2 == $appointsched3 || $appointsched2 == $appointsched4 || $appointsched3 == $appointsched4){
                $appointschedErr = "You already entered the same date and time. Please check again.";
            }                                          
            else{
                include('no-errors.php');
            }          
        }
        elseif (strpos($courseoffer1, '15 Hours') !== false) {       
            if ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
            }
           elseif ($appcheck4 <= $now) {
               $appointyErr4 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck5 <= $now) {
                $appointyErr5 = "Your schedule must be atleast tomorrow.";
            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery3) == 3){
                $appointyyErr3 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery4) == 3){
                $appointyyErr4 = "The date and time that you had entered has already been occupied...";
            }               
            elseif(mysqli_num_rows($appquery5) == 3){
                $appointyyErr5 = "The date and time that you had entered has already been occupied...";
            }
            elseif($appointsched == $appointsched3 || $appointsched == $appointsched4 || $appointsched == $appointsched5 || $appointsched1 == $appointsched3 || $appointsched1 == $appointsched4 || $appointsched1 == $appointsched5 || $appointsched2 == $appointsched3 || $appointsched2 == $appointsched4 || $appointsched2 == $appointsched5 || $appointsched3 == $appointsched4 || $appointsched3 == $appointsched5 || $appointsched4 == $appointsched5){
                $appointschedErr = "You already entered the same date and time. Please check again.";
            }                                          
            else{
                include('no-errors.php');
            }          
        }
        elseif (strpos($courseoffer1, '20 Hours') !== false) {       
            if ($appcheck1 <= $now) {
                $appointyErr1 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck2 <= $now) {
                $appointyErr2 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
            }
           elseif ($appcheck4 <= $now) {
               $appointyErr4 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck5 <= $now) {
                $appointyErr5 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck6 <= $now) {
                $appointyErr6 = "Your schedule must be atleast tomorrow.";
            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery3) == 3){
                $appointyyErr3 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery4) == 3){
                $appointyyErr4 = "The date and time that you had entered has already been occupied...";
            }               
            elseif(mysqli_num_rows($appquery5) == 3){
                $appointyyErr5 = "The date and time that you had entered has already been occupied...";
            }               
            elseif(mysqli_num_rows($appquery6) == 3){
                $appointyyErr6 = "The date and time that you had entered has already been occupied...";
            }               
            elseif($appointsched == $appointsched1 || $appointsched == $appointsched2 || $appointsched == $appointsched3 || $appointsched == $appointsched4 || $appointsched == $appointsched5 || $appointsched == $appointsched6 || $appointsched1 == $appointsched2 || $appointsched1 == $appointsched3 || $appointsched1 == $appointsched4 || $appointsched1 == $appointsched5 || $appointsched1 == $appointsched6 || $appointsched2 == $appointsched3 || $appointsched2 == $appointsched4 || $appointsched2 == $appointsched5 || $appointsched2 == $appointsched6 || $appointsched3 == $appointsched4 || $appointsched3 == $appointsched5 || $appointsched3 == $appointsched6 || $appointsched4 == $appointsched5 || $appointsched4 == $appointsched6 || $appointsched5 == $appointsched6){
                $appointschedErr = "You already entered the same date and time. Please check again.";
            }
            else{
                include('no-errors.php');
            }          
        }
        elseif (strpos($courseoffer1, '8 Hours') !== false) { 
            if ($appcheck1 <= $now) {
                $appointyErr1 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck2 <= $now) {
                $appointyErr2 = "Your schedule must be atleast tomorrow.";
            }
            elseif ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
            }   
            elseif(mysqli_num_rows($appquery3) == 3){
                $appointyyErr3 = "The date and time that you had entered has already been occupied...";
            }   
            elseif($appointsched == $appointsched1 || $appointsched == $appointsched2 || $appointsched == $appointsched3 || $appointsched1 == $appointsched2 || $appointsched1 == $appointsched3 || $appointsched2 == $appointsched3){
                $appointschedErr = "You already entered the same date and time. Please check again.";
            }                                          
            else{
                include('no-errors.php');
            }          

        }
        else{
            include('no-errors.php');
        }          
    }


?>