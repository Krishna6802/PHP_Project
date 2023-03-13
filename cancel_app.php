<?php require('top.php'); 

$a_id = $_GET['a_id'];
mysqli_query($con,"update appointment set status='Cancel' where a_id=$a_id");
header('location:myapp.php');
?>

<?php require('footer.php'); ?>