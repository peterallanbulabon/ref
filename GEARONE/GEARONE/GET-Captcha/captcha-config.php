<?php 
	if(isset($_POST['submit'])){
	    $firstname1 = $_POST['firstname'];
	    $lastname1 = $_POST['lastname'];
	    $email1 = $_POST['email'] ;
	    $age1 = $_POST['age'];
	    $bdate1 = $_POST['bdate'];
	    $address1 = $_POST['address'];
	    $contno1 = $_POST['contno'];
	    $workorschool1 = $_POST['workorschool'];
	    $appointmentdate1 = $_POST['appointmentdate'];
	    $appointmenttime1 = $_POST['appointmenttime'];

		if(strcmp($_SESSION['code'], $_POST['code']) != 0)
		{
		?>
		<div class="alert alert-danger">The captcha code does not match!</div>
		
	<?php
	}else{ 
    $query = mysqli_query($connections, "INSERT INTO enrolrequests (firstname, lastname, email, age, bdate, address, contno, workorschool, courseoffer, coursetype, courseprice, expectedappoint, reqstatus) VALUES('$firstname1', '$lastname1', '$email1', '$age1', '$bdate1', '$address1', '$contno1', '$workorschool1', '$courseoffer1', '$coursetype1', '$price1', '$appointmentdate1', 'PENDING')");
    $query = mysqli_query($connections, "INSERT INTO appointmentrequest1 (firstname, lastname, appointmentdate, appointmenttime, appointmentsubj, appointstatus) VALUES('$firstname1', '$lastname1', '$appointmentdate1', '$appointmenttime1', 'Payment' ,'PENDING')");


        if (strpos($courseoffer1, '5 Hours') !== false) {
            $appd1 = $_POST['appd1'];   $appt1 = $_POST['appt1'];
            $appd2 = $_POST['appd2'];   $appt2 = $_POST['appt2'];
            $appquery = mysqli_query($connections, "INSERT INTO appointmentrequest1 (firstname, lastname, appointmentdate, appointmenttime, appointmentsubj, appointstatus) 
                VALUES('$firstname1', '$lastname1', '$appd1', '$appt1', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd2', '$appt2', 'Driving Schedule', 'PENDING')
                "); 
        }
        if (strpos($courseoffer1, '7 Hours') !== false) { 
            $appd1 = $_POST['appd1'];   $appt1 = $_POST['appt1'];
            $appd2 = $_POST['appd2'];   $appt2 = $_POST['appt2'];
            $appd3 = $_POST['appd3'];   $appt3 = $_POST['appt3'];
            $appquery = mysqli_query($connections, "INSERT INTO appointmentrequest1 (firstname, lastname, appointmentdate, appointmenttime, appointmentsubj, appointstatus) 
                VALUES('$firstname1', '$lastname1', '$appd1', '$appt1', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd2', '$appt2', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd3', '$appt3', 'Driving Schedule', 'PENDING')
                "); 

        }
        if (strpos($courseoffer1, '10 Hours') !== false) { 
            $appd1 = $_POST['appd1'];   $appt1 = $_POST['appt1'];
            $appd2 = $_POST['appd2'];   $appt2 = $_POST['appt2'];
            $appd3 = $_POST['appd3'];   $appt3 = $_POST['appt3'];
            $appd4 = $_POST['appd4'];   $appt4 = $_POST['appt4'];
            $appquery = mysqli_query($connections, "INSERT INTO appointmentrequest1 (firstname, lastname, appointmentdate, appointmenttime, appointmentsubj, appointstatus) 
                VALUES('$firstname1', '$lastname1', '$appd1', '$appt1', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd2', '$appt2', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd3', '$appt3', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd4', '$appt4', 'Driving Schedule', 'PENDING')
                "); 
        }
        if (strpos($courseoffer1, '15 Hours') !== false) { 
            $appd1 = $_POST['appd1'];   $appt1 = $_POST['appt1'];
            $appd2 = $_POST['appd2'];   $appt2 = $_POST['appt2'];
            $appd3 = $_POST['appd3'];   $appt3 = $_POST['appt3'];
            $appd4 = $_POST['appd4'];   $appt4 = $_POST['appt4'];
            $appd5 = $_POST['appd5'];   $appt5 = $_POST['appt5'];
            $appquery = mysqli_query($connections, "INSERT INTO appointmentrequest1 (firstname, lastname, appointmentdate, appointmenttime, appointmentsubj, appointstatus) 
                VALUES('$firstname1', '$lastname1', '$appd3', '$appt3', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd4', '$appt4', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd5', '$appt5', 'Driving Schedule', 'PENDING')
                "); 
        }
        if (strpos($courseoffer1, '20 Hours') !== false) { 
            $appd1 = $_POST['appd1'];   $appt1 = $_POST['appt1'];
            $appd2 = $_POST['appd2'];   $appt2 = $_POST['appt2'];
            $appd3 = $_POST['appd3'];   $appt3 = $_POST['appt3'];
            $appd4 = $_POST['appd4'];   $appt4 = $_POST['appt4'];
            $appd5 = $_POST['appd5'];   $appt5 = $_POST['appt5'];
            $appd6 = $_POST['appd6'];   $appt6 = $_POST['appt6'];
            $appquery = mysqli_query($connections, "INSERT INTO appointmentrequest1 (firstname, lastname, appointmentdate, appointmenttime, appointmentsubj, appointstatus) 
                VALUES('$firstname1', '$lastname1', '$appd1', '$appt1', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd2', '$appt2', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd3', '$appt3', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd4', '$appt4', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd5', '$appt5', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd6', '$appt6', 'Driving Schedule', 'PENDING')
                "); 
        }
        if (strpos($courseoffer1, '8 Hours') !== false) { 
            $appd1 = $_POST['appd1'];   $appt1 = $_POST['appt1'];
            $appd2 = $_POST['appd2'];   $appt2 = $_POST['appt2'];
            $appd3 = $_POST['appd3'];   $appt3 = $_POST['appt3'];
            $appquery = mysqli_query($connections, "INSERT INTO appointmentrequest1 (firstname, lastname, appointmentdate, appointmenttime, appointmentsubj, appointstatus) 
                VALUES('$firstname1', '$lastname1', '$appd1', '$appt1', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd2', '$appt2', 'Driving Schedule', 'PENDING'),
                    ('$firstname1', '$lastname1', '$appd3', '$appt3', 'Driving Schedule', 'PENDING')
                "); 
        }
        echo "<script language='javascript'>alert('Your enrolment request has been sent! Thank you for availing our service.'); window.location.href='../index.php'; </script>";
	}
}
?>
