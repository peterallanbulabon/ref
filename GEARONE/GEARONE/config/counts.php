<?php 
    // appointment of student
    $result3 = mysqli_query($connections, "SELECT count(*) as total from appointmentrequest1 WHERE studid = '".$_SESSION['studno']."'");
    $data3 = mysqli_fetch_assoc($result3);

    $result4 = mysqli_query($connections, "SELECT count(*) as total from appointmentrequest1 WHERE appointmentdate = date_format(curdate(), '%m/%d/%Y')AND studid = '".$_SESSION['studno']."'");
    $data4 = mysqli_fetch_assoc($result4);

    $result5 = mysqli_query($connections, "SELECT count(*) as total from appointmentrequest1 WHERE appointmentdate > date_format(CURRENT_DATE(), '%m/%d/%Y')AND studid = '".$_SESSION['studno']."'");
    $data5 = mysqli_fetch_assoc($result5);

    $result6 = mysqli_query($connections, "SELECT count(*) as total from appointmentrequest1 WHERE appointmentdate < date_format(CURRENT_DATE(), '%m/%d/%Y')AND studid = '".$_SESSION['studno']."'");
    $data6 = mysqli_fetch_assoc($result6);

?>