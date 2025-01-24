<?php
            $firstname =  $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $bdate = $_POST['bdate'];
            $address = $_POST['address'];
            $contno = $_POST['contno'];
            $workorschool = $_POST['workorschool'];
            $coursetype1 = $_POST['coursetype1'];
            $courseoffer1 = $_POST['courseoffer1'];
            $price1 = $_POST['price1'];
            // $appointmentsubj = $_POST['appointmentsubj'];
            $appointmentdate = $_POST['appointmentdate'];
            $appointmenttime = $_POST['appointmenttime'];

            $_SESSION['myage'] = $myage;
            $_SESSION['courseno1'] = $courseno1;
            $_SESSION['coursetype1'] = $coursetype1;
            $_SESSION['courseoffer1'] = $courseoffer1;
            $_SESSION['price1'] = $price1;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            $_SESSION['age'] = $age;
            $_SESSION['bdate'] = $bdate;
            $_SESSION['address'] = $address;
            $_SESSION['contno'] = $contno;
            $_SESSION['workorschool'] = $workorschool;
            $_SESSION['appointmentdate'] = $appointmentdate;
            $_SESSION['appointmenttime'] = $appointmenttime;
            // $_SESSION['appointmentsubj'] = $appointmentsubj;

            if (strpos($courseoffer1, '5 Hours') !== false) {
                $appd1 = $_POST['appd1'];    $_SESSION['appd1'] = $appd1;
                $appt1 = $_POST['appt1'];    $_SESSION['appt1'] = $appt1;
                $appd2 = $_POST['appd2'];    $_SESSION['appd2'] = $appd2;
                $appt2 = $_POST['appt2'];    $_SESSION['appt2'] = $appt2;
            }
            if (strpos($courseoffer1, '7 Hours') !== false) { 
                $appd1 = $_POST['appd1'];    $_SESSION['appd1'] = $appd1;
                $appt1 = $_POST['appt1'];    $_SESSION['appt1'] = $appt1;
                $appd2 = $_POST['appd2'];    $_SESSION['appd2'] = $appd2;
                $appt2 = $_POST['appt2'];    $_SESSION['appt2'] = $appt2;
                $appd3 = $_POST['appd3'];    $_SESSION['appd3'] = $appd3;
                $appt3 = $_POST['appt3'];    $_SESSION['appt3'] = $appt3;
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
            }
            if (strpos($courseoffer1, '15 Hours') !== false) { 
                $appd3 = $_POST['appd3'];    $_SESSION['appd3'] = $appd3;
                $appt3 = $_POST['appt3'];    $_SESSION['appt3'] = $appt3;
                $appd4 = $_POST['appd4'];    $_SESSION['appd4'] = $appd4;
                $appt4 = $_POST['appt4'];    $_SESSION['appt4'] = $appt4;
                $appd5 = $_POST['appd5'];    $_SESSION['appd5'] = $appd5;
                $appt5 = $_POST['appt5'];    $_SESSION['appt5'] = $appt5;
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
            }
            if (strpos($courseoffer1, '8 Hours') !== false) { 
                $appd1 = $_POST['appd1'];    $_SESSION['appd1'] = $appd1;
                $appt1 = $_POST['appt1'];    $_SESSION['appt1'] = $appt1;
                $appd2 = $_POST['appd2'];    $_SESSION['appd2'] = $appd2;
                $appt2 = $_POST['appt2'];    $_SESSION['appt2'] = $appt2;
                $appd3 = $_POST['appd3'];    $_SESSION['appd3'] = $appd3;
                $appt3 = $_POST['appt3'];    $_SESSION['appt3'] = $appt3;
            }
            // header("location: ../GET-Captcha/captcha.php");
            header("location: GET-Captcha/captcha.php");


?>