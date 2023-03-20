<!doctype html>
<html>
<head> 
   <title>My Order</title>  
</head>

<?php
require ('top.php');

 if(isset($_SESSION['USER_LOGIN']))
{

?>
<div style="height:800px;">
<table>
<thead>
</tr>
<th>Order Id</th>
<th>Order Date</th>
<th>Address</th>
<th>Payment Type</th>
<th>Payment Status</th>
<th>Order Status</th>
<th>Cancle Order</th>
</tr>
</thead>
<tbody>

<?php
	$u_id = $_SESSION['USER_ID'];
	$res = mysqli_query($con,"select *from tbl_order where u_id = $u_id");
	while($row=mysqli_fetch_assoc($res))
	{  ?>
		<tr>
		<td><form action="order_detail.php?o_id=<?php echo $row['id']; ?>" method="POST"><input type="submit" name="order" value="<?php echo $row['id']; ?>" style="height:20px; width:30px; background-color:blue; color:white;"></form></td>
		<td><?php echo $row['added_on']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['payment_type']; ?></td>
		<td><?php echo $row['payment_status']; ?></td>
		<td><?php echo $row['order_status']; ?></td>
		<td><?php if($row['order_status'] == "Delivered") { echo "-"; } else { ?><a href="cancel_order.php?id=<?php echo $row['id']; ?>">Cancel<?php } ?></a>
     		</tr>

<?php	}   ?>
</table>
</div>
<?php
}

require ('footer.php');
?>