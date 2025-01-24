<?php

$connections = mysqli_connect("localhost", "root", "", "gearone");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_errno();
	}else{
		// echo "<input type='hidden' value='Connected'>";
	}

?>