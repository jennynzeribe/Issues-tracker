<?php
include "dbconnection.php";

$location = "Offshore";
$siteName = "Joe";
$officerInCharge = "Manager";
$status = "active";
$date = date("d-m-Y H:i:s");


$insertIssues = "INSERT into issues(location, siteName, officerInCharge, status, dateTime)
              VALUES('$location','$siteName','$officerInCharge', '$status', '$date')" ;
        

$exeinsertIssues = mysqli_query($conn, $insertIssues) or die(mysqli_error());

if($exeinsertIssues){
    echo "<br>1 issues successfully registered!";
}


?>