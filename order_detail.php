<!doctype html>
<html>
<head> 
   <title>Order Detail</title>  
</head>

<?php
require ('top.php');

	$order_id = $_GET['o_id'];

?>
<div style="height:800px;">
<table>
<thead>
</tr>
<th>Order Id</th>
<th>Product Name</th>
<th>Quantity</th>
<th>MRP</th>
<th>Subtotal</th>
<th>Order_date</th>
</tr>
</thead>
<tbody>

<?php
	$u_id = $_SESSION['USER_ID'];
	$res = mysqli_query($con,"select *from order_detail where order_id = $order_id");
	
	while($row=mysqli_fetch_assoc($res))
	{  ?>
		<tr>
		<td><?php echo $order_id; ?></td>
		<td><?php echo $row['p_name']; ?></td>
		<td><?php echo $row['qty']; ?></td>
		<td><?php echo $row['mrp']; ?></td>
		<td><?php echo $row['qty'] * $row['mrp'];  ?></td>
		<td><?php echo $row['added_on']; ?></td>
		</tr>
<?php  }	  ?>
</tbody>
</table>

 <div class="total-price">
      <table>
        <tr>
          <td>Total</td>
          <td><?php 
		$res = mysqli_query($con,"select *from tbl_order where id = $order_id");
		$row=mysqli_fetch_assoc($res);
	        echo $row['total_price']; ?></td>
        </tr>
      </table>
</div>
</div>

<?php require ('footer.php'); ?>