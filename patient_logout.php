<?php
require ('top.php');

unset($_SESSION['PATIENT_LOGIN']);
unset($_SESSION['PATIENT_ID']);
unset($_SESSION['PATIENT_NAME']);
header('location:index.php');
die();	
?>

<?php
require('footer.php');
?>

