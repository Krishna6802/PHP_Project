<?php
require ('top.php');

unset($_SESSION['DOC_LOGIN']);
unset($_SESSION['DOC_ID']);
unset($_SESSION['DOC_NAME']);
header('location:../index.php');
die();	
?>

<?php
require('footer.php');
?>

