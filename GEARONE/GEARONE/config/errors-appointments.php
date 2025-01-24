<?php
    $noticeErr = $appointErr = $appointyErr1 = $appointyErr2 = $appointyErr3 = $appointyErr4 = $appointyErr5 = $appointyErr6 = $appointyyErr1 = $appointyyErr = $appointyyErr2 = $appointyyErr3 = $appointyyErr4 = $appointyyErr5 = $appointyyErr6 = "";
    $appointmentdate = $appointmenttime = $appointmentsubj = "";
    $appd1 = $appd2 = $appd3 = $appd4 = $appd5 = $appd6 = "";
    $apptdropdown = $apptdropdown1 = $apptdropdown2 = $apptdropdown3 = $apptdropdown4 = $apptdropdown5 = $apptdropdown6 = "";
    if(isset($_POST['done'])){
        $courseoffer1 = $_POST['courseoffer'];
        $name = $_POST['name'];
        $email_address = $_POST['email'];
        $appointmentdate = mysqli_real_escape_string($connections, $_POST['appointmentdate']);
        $appointmenttime = mysqli_real_escape_string($connections, $_POST['appointmenttime']);
        $apptdropdown = $_POST['appointmenttime'];
       
        $appquery = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appointmentdate' AND appointmenttime='$appointmenttime'");
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
            $apptdropdown1 = $_POST['appt1'];
            $apptdropdown2 = $_POST['appt2'];
            $apptdropdown3 = $_POST['appt3'];
            $apptdropdown4 = $_POST['appt4'];
            $apptdropdown5 = $_POST['appt5'];
            $apptdropdown6 = $_POST['appt6'];    
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
            $appquery1 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd1' AND appointmenttime='$appt1'");
            $appquery2 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd2' AND appointmenttime='$appt2'");
            $appquery3 = mysqli_query($connections, "SELECT * FROM appointmentrequest1 WHERE appointmentdate='$appd3' AND appointmenttime='$appt3'");
        }
        if ($appcheck <= $now) {
            $appointErr = "Your schedule must be atleast tomorrow.";
            echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
            $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";
        }
        elseif (strpos($courseoffer1, '5 Hours') !== false) {
            if ($appcheck1 <= $now) {
                $appointyErr1 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";
            }
            elseif ($appcheck2 <= $now) {
                $appointyErr2 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";
            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";
            }                           
            else{
                include('no-appointerrors.php');
            }          
        }
        elseif (strpos($courseoffer1, '7 Hours') !== false) {
            if ($appcheck1 <= $now) {
                $appointyErr1 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";
            }
            elseif ($appcheck2 <= $now) {
                $appointyErr2 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";
            }
            elseif ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";
            }
            elseif ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";
            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery3) == 3){
                $appointyyErr3 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            else{
                include('no-appointerrors.php');
            }          
        }
        elseif (strpos($courseoffer1, '10 Hours') !== false) { 
            if ($appcheck1 <= $now) {
                $appointyErr1 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
            elseif ($appcheck2 <= $now) {
                $appointyErr2 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
            elseif ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
           elseif ($appcheck4 <= $now) {
                   $appointyErr4 = "Your schedule must be atleast tomorrow.";            echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";

            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery3) == 3){
                $appointyyErr3 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery4) == 3){
                $appointyyErr4 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            else{
                include('no-appointerrors.php');
            }          
        }
        elseif (strpos($courseoffer1, '15 Hours') !== false) {       
            if ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
           elseif ($appcheck4 <= $now) {
                   $appointyErr4 = "Your schedule must be atleast tomorrow.";            echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";

            }
            elseif ($appcheck5 <= $now) {
                $appointyErr5 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery3) == 3){
                $appointyyErr3 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery4) == 3){
                $appointyyErr4 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }               
            elseif(mysqli_num_rows($appquery5) == 3){
                $appointyyErr5 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }               
            else{
                include('no-appointerrors.php');
            }          
        }
        elseif (strpos($courseoffer1, '20 Hours') !== false) {       
            if ($appcheck1 <= $now) {
                $appointyErr1 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
            elseif ($appcheck2 <= $now) {
                $appointyErr2 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
            elseif ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
           elseif ($appcheck4 <= $now) {
                   $appointyErr4 = "Your schedule must be atleast tomorrow.";            
                   echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";

            }
            elseif ($appcheck5 <= $now) {
                $appointyErr5 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
            elseif ($appcheck6 <= $now) {
                $appointyErr6 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery3) == 3){
                $appointyyErr3 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery4) == 3){
                $appointyyErr4 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }               
            elseif(mysqli_num_rows($appquery5) == 3){
                $appointyyErr5 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }               
            elseif(mysqli_num_rows($appquery6) == 3){
                $appointyyErr6 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }               
            else{
                include('no-appointerrors.php');
            }          
        }
        elseif (strpos($courseoffer1, '8 Hours') !== false) { 
            if ($appcheck1 <= $now) {
                $appointyErr1 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
            elseif ($appcheck2 <= $now) {
                $appointyErr2 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
            elseif ($appcheck3 <= $now) {
                $appointyErr3 = "Your schedule must be atleast tomorrow.";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }
            elseif(mysqli_num_rows($appquery1) == 3){
                $appointyyErr1 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery2) == 3){
                $appointyyErr2 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            elseif(mysqli_num_rows($appquery3) == 3){
                $appointyyErr3 = "The date and time that you had entered has already been occupied...";
                echo "<script language='javascript'>alert('There is something wrong on what you had entered. Please check again.'); </script>";    
                $noticeErr = "*There is something wrong on what you had entered. Click the Update Appointment to check.";                
            }   
            else{
                include('no-appointerrors.php');
            }          

        }
        else{
            include('no-appointerrors.php');
        }          
    }


?>