<!doctype html>
<html>
<head> 
   <title>Order Detail</title>  
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
require ('top.php');

if(isset($_POST['order']))
{
	$order_id = $_POST['order'];

?>

<table>
<thead>
</tr>
<th>Order Id</th>
<th>Product Name</th>
<th>Quantity</th>
<th>MRP</th>
<th>Order_date</th>
</tr>
</thead>
<tbody>

<?php
	$res = mysqli_query($con,"select *from order_detail where order_id = $order_id");
	while($row=mysqli_fetch_assoc($res))
	{  ?>
		<tr>
		<td><?php echo $order_id; ?></td>
		<td><?php echo $row['p_name']; ?></td>
		<td><?php echo $row['qty']; ?></td>
		<td><?php echo $row['mrp']; ?></td>
		<td><?php echo $row['added_on']; ?></td>
		</tr>
<?php  }	}  ?>

