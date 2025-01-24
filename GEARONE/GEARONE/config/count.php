<?php 
    // enrolrequests
    $result = mysqli_query($connections, "SELECT count(*) as total from enrolrequests WHERE reqstatus = 'PENDING'");
    $data = mysqli_fetch_assoc($result);
    // appointments
    $result1 = mysqli_query($connections, "SELECT count(*) as total from appointmentrequest1");
    $data1 = mysqli_fetch_assoc($result1);
    // students
    $result2 = mysqli_query($connections, "SELECT count(*) as total from enrolrequests WHERE reqstatus = 'APPROVED'");
    $data2 = mysqli_fetch_assoc($result2);

?>
