

<?php
require ('top.php');
	if(isset($_GET['plus']))
	{
		$qty=$_GET['qty'];
		$mrp=$_GET['mrp'];
		$name=$_GET['name'];
		$qty= $qty + 1;
                $total = $qty * $mrp;
	        mysqli_query($con,"update cart_details set qty = '$qty', total = '$total' where name='$name'");
		header('location:cart.php');
                die();
	}

	if(isset($_GET['minus']))
	{
		$qty=$_GET['qty'];
		$mrp=$_GET['mrp'];
		$name=$_GET['name'];
		$qty= $qty - 1;
                $total = $qty * $mrp;
	        mysqli_query($con,"update cart_details set qty = '$qty', total = '$total' where name='$name'");
		header('location:cart.php');
                die();
	}

?>
