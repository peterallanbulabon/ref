<?php
    $myage = $_SESSION['myage'];
    $coursetype1 = $_SESSION['coursetype1'];
    $courseoffer1 = $_SESSION['courseoffer1'];
    $price1 = $_SESSION['price1']; 

    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $email = $_SESSION['email'] ;
    $age = $_SESSION['age'];
    $bdate = $_SESSION['bdate'];
    $address = $_SESSION['address'];
    $contno = $_SESSION['contno'];
    $workorschool = $_SESSION['workorschool'];
    $appointmentdate = $_SESSION['appointmentdate'];
    $appointmenttime = $_SESSION['appointmenttime'];

    echo "
        <input type='hidden' value='$myage' name='age'>
        <input type='hidden' value='$courseoffer1' name='courseoffer1'>
        <input type='hidden' value='$coursetype1' name='coursetype1'>
        <input type='hidden' value='$price1' name='price1'>
        <input type='hidden' value='$firstname' name='firstname'>
        <input type='hidden' value='$lastname' name='lastname'>
        <input type='hidden' value='$email' name='email'>
        <input type='hidden' value='$bdate' name='bdate'>
        <input type='hidden' value='$address' name='address'>
        <input type='hidden' value='$contno' name='contno'>
        <input type='hidden' value='$workorschool' name='workorschool'>
        <br><br> <input type='hidden' value='PAYMENT APPOINTMENT'> <br><br>
        <input type='hidden' value='$appointmentdate' name='appointmentdate'>
        <input type='hidden' value='$appointmenttime' name='appointmenttime'>
        ";
        if (strpos($courseoffer1, '5 Hours') !== false) {
            $appd1 = $_SESSION['appd1'];
            $appt1 = $_SESSION['appt1'];
            $appd2 = $_SESSION['appd2'];
            $appt2 = $_SESSION['appt2'];
            ?>
                <input type="hidden" value="<?php echo $appd1; ?>" name="appd1">
                <input type="hidden" value="<?php echo $appt1; ?>" name="appt1">
                <input type="hidden" value="<?php echo $appd2; ?>" name="appd2">
                <input type="hidden" value="<?php echo $appt2; ?>" name="appt2">
            <?php
        }
        if (strpos($courseoffer1, '7 Hours') !== false) { 
            $appd1 = $_SESSION['appd1'];
            $appt1 = $_SESSION['appt1'];
            $appd2 = $_SESSION['appd2'];
            $appt2 = $_SESSION['appt2'];
            $appd3 = $_SESSION['appd3'];
            $appt3 = $_SESSION['appt3'];
            ?>
                <input type="hidden" value="<?php echo $appd1; ?>" name="appd1">
                <input type="hidden" value="<?php echo $appt1; ?>" name="appt1">
                <input type="hidden" value="<?php echo $appd2; ?>" name="appd2">
                <input type="hidden" value="<?php echo $appt2; ?>" name="appt2">
                <input type="hidden" value="<?php echo $appd3; ?>" name="appd3">
                <input type="hidden" value="<?php echo $appt3; ?>" name="appt3">
            <?php

        }
        if (strpos($courseoffer1, '10 Hours') !== false) { 
            $appd1 = $_SESSION['appd1'];
            $appt1 = $_SESSION['appt1'];
            $appd2 = $_SESSION['appd2'];
            $appt2 = $_SESSION['appt2'];
            $appd3 = $_SESSION['appd3'];
            $appt3 = $_SESSION['appt3'];
            $appd4 = $_SESSION['appd4'];
            $appt4 = $_SESSION['appt4'];
            ?>
                <input type="hidden" value="<?php echo $appd1; ?>" name="appd1">
                <input type="hidden" value="<?php echo $appt1; ?>" name="appt1">
                <input type="hidden" value="<?php echo $appd2; ?>" name="appd2">
                <input type="hidden" value="<?php echo $appt2; ?>" name="appt2">
                <input type="hidden" value="<?php echo $appd3; ?>" name="appd3">
                <input type="hidden" value="<?php echo $appt3; ?>" name="appt3">
                <input type="hidden" value="<?php echo $appd4; ?>" name="appd4">
                <input type="hidden" value="<?php echo $appt4; ?>" name="appt4">
            <?php

        }
        if (strpos($courseoffer1, '15 Hours') !== false) { 
            $appd3 = $_SESSION['appd3'];
            $appt3 = $_SESSION['appt3'];
            $appd4 = $_SESSION['appd4'];
            $appt4 = $_SESSION['appt4'];
            $appd5 = $_SESSION['appd5'];
            $appt5 = $_SESSION['appt5'];
            ?>
                <input type="hidden" value="<?php echo $appd3; ?>" name="appd3">
                <input type="hidden" value="<?php echo $appt3; ?>" name="appt3">
                <input type="hidden" value="<?php echo $appd4; ?>" name="appd4">
                <input type="hidden" value="<?php echo $appt4; ?>" name="appt4">
                <input type="hidden" value="<?php echo $appd5; ?>" name="appd5">
                <input type="hidden" value="<?php echo $appt5; ?>" name="appt5">
            <?php

        }
        if (strpos($courseoffer1, '20 Hours') !== false) { 
            $appd1 = $_SESSION['appd1'];
            $appt1 = $_SESSION['appt1'];
            $appd2 = $_SESSION['appd2'];
            $appt2 = $_SESSION['appt2'];
            $appd3 = $_SESSION['appd3'];
            $appt3 = $_SESSION['appt3'];
            $appd4 = $_SESSION['appd4'];
            $appt4 = $_SESSION['appt4'];
            $appd5 = $_SESSION['appd5'];
            $appt5 = $_SESSION['appt5'];
            $appd6 = $_SESSION['appd6'];
            $appt6 = $_SESSION['appt6'];
            ?>
                <input type="hidden" value="<?php echo $appd1; ?>" name="appd1">
                <input type="hidden" value="<?php echo $appt1; ?>" name="appt1">
                <input type="hidden" value="<?php echo $appd2; ?>" name="appd2">
                <input type="hidden" value="<?php echo $appt2; ?>" name="appt2">
                <input type="hidden" value="<?php echo $appd3; ?>" name="appd3">
                <input type="hidden" value="<?php echo $appt3; ?>" name="appt3">
                <input type="hidden" value="<?php echo $appd4; ?>" name="appd4">
                <input type="hidden" value="<?php echo $appt4; ?>" name="appt4">
                <input type="hidden" value="<?php echo $appd5; ?>" name="appd5">
                <input type="hidden" value="<?php echo $appt5; ?>" name="appt5">
                <input type="hidden" value="<?php echo $appd6; ?>" name="appd6">
                <input type="hidden" value="<?php echo $appt6; ?>" name="appt6">
            <?php

        }
        if (strpos($courseoffer1, '8 Hours') !== false) { 
            $appd1 = $_SESSION['appd1'];
            $appt1 = $_SESSION['appt1'];
            $appd2 = $_SESSION['appd2'];
            $appt2 = $_SESSION['appt2'];
            $appd3 = $_SESSION['appd3'];
            $appt3 = $_SESSION['appt3'];
            ?>
                <input type="hidden" value="<?php echo $appd1; ?>" name="appd1">
                <input type="hidden" value="<?php echo $appt1; ?>" name="appt1">
                <input type="hidden" value="<?php echo $appd2; ?>" name="appd2">
                <input type="hidden" value="<?php echo $appt2; ?>" name="appt2">
                <input type="hidden" value="<?php echo $appd3; ?>" name="appd3">
                <input type="hidden" value="<?php echo $appt3; ?>" name="appt3">
            <?php

        }




?>