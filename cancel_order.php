<?php require('top.php'); 

$id = $_GET['id'];
mysqli_query($con,"update tbl_order set order_status='Cancel' , payment_status='Cancel' where id=$id");
header('location:myorder.php');
?>

<?php require('footer.php'); ?>