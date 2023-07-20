<!doctype html>

<html>
  
<head>
  
   <title>Manage Order Page</title>
     
   <link rel="stylesheet" type="text/css" href="style.css">
</head>


<?php
require('top.php');

$cdate = date('y-m-d h:i:s');

if(isset($_GET['type']) && $_GET['type']!='')
{
	$type = $_GET['type'];
	
	if($type == 'payment_status')
	{
		$operation = $_GET['operation'];
		$order_id = $_GET['order_id'];
		if($operation == 'complete')
		{
			$status = 'Complete';
		}
		else if($operation == 'pending')
		{
			$status = 'Pending';
		}
		$update = "update tbl_order set payment_status = '$status' where id=$order_id";
		mysqli_query($con,$update);
	}	

	if($type == 'status')
	{
		$operation = $_GET['operation'];
		$order_id = $_GET['order_id'];
		if($operation == 'delivered')
		{
			$status = 'Delivered';
		}
		else if($operation == 'pending')
		{
			$status = 'Pending';
		}
		$update = "update tbl_order set order_status = '$status' where id=$order_id";
		mysqli_query($con,$update);
	}
}
?>

<table>
<thead>
</tr>
<th>Order Id</th>
<th>Order Date</th>
<th>Address</th>
<th>Payment Type</th>
<th>Payment Status</th>
<th>Order Status</th>
</tr>
</thead>
<tbody>

<?php
	$res = mysqli_query($con,"select *from tbl_order");
	while($row=mysqli_fetch_assoc($res))
	{ ?>
		<tr>
		<td><form action="order_detail.php" method="POST"><input type="submit" name="order" value="<?php echo $row['id']; ?>" style="height:20px; width:30px; background-color:blue; color:white;"></form></td>
		<td><?php $added_on=$row['added_on'];  echo $row['added_on']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['payment_type']; ?></td>
		<td><?php
				 
				 if(abs(strtotime($cdate) - strtotime(date('y-m-d h:i:s', strtotime($row['added_on'] . ' +1 day')))) > 30)
				 {
					 $id=$row['id'];
					 $update = "update tbl_order set payment_status = 'Complete' where id=$id";
					 mysqli_query($con,$update); 
					 echo $row['payment_status']; 
			 	 }
				 else if($row['payment_status']=="Pending")
				 {
					 echo "<a href='?type=payment_status&operation=complete&order_id=".$row['id']."'>Pending</a>&nbsp"; 			
				 }
				 else if($row['payment_status']=="Complete")
				 {
				     if(abs(strtotime($cdate) - strtotime(date('y-m-d h:i:s', strtotime($row['added_on'] . ' +1 day')))) > 30)
			            {
					echo $row['payment_status'];
				    }
				    else
				    {
					 echo "<a href='?type=payment_status&operation=pending&order_id=".$row['id']."'>Complete</a>&nbsp";  
				    }
				 }
				 else
				 {
					echo $row['payment_status']; 
				 }
		?></td>

		<td><?php
				
				 if(abs(strtotime($cdate) - strtotime(date('y-m-d h:i:s', strtotime($row['added_on'] . ' +1 day')))) > 30)
				 {
					 $id=$row['id'];
					 $update = "update tbl_order set order_status = 'Delivered' where id=$id";
					 mysqli_query($con,$update); 
					 echo $row['order_status']; 
			 	 }
				 else if($row['order_status']=="Pending")
				 {
					 echo "<a href='?type=status&operation=delivered&order_id=".$row['id']."'>Pending</a>&nbsp"; 			
				 }
				 else if($row['order_status']=="Delivered")
				 {
				     if(abs(strtotime($cdate) - strtotime(date('y-m-d h:i:s', strtotime($row['added_on'] . ' +1 day')))) > 30)
			            {
					echo $row['order_status'];
				    }
				    else
				    {
					 echo "<a href='?type=status&operation=pending&order_id=".$row['id']."'>Delivered</a>&nbsp"; 
				    } 
				 }
				 else
				 {
					echo $row['order_status']; 
				 }
		?></td>
     		</tr> 
<?php	}  
?>

</tbody>
</table>
</body>
</html>
