<?php
session_start();
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"db_ecare");

date_default_timezone_set('Asia/Kolkata');
?>

