<!doctype html>

<html>
  
<head>
  
   <title>Appointment List</title>
     
   
</head>


<?php
require('top.php');

$ctime = date("H:i"); 
$cdate = date('Y-m-d');

if(isset($_SESSION['DOC_LOGIN']))
{
	$id =  $_SESSION['DOC_ID'];
	$d_name =  $_SESSION['DOC_NAME'];

   if(isset($_GET['type']) && $_GET['type']!='')
   {
	$type = $_GET['type'];
	if($type == 'status')
	{
		$operation = $_GET['operation'];
		$a_id = $_GET['a_id'];
		if($operation == 'complete')
		{
			$status = 'Complete';
		}
		else if($operation == 'pending')
		{
			$status = 'Pending';
		}
		$update = "update appointment set status = '$status' where a_id=$a_id";
		mysqli_query($con,$update);
	}	
    }

?>


   
<table>
<thead>
</tr>
<th>Appointment id</th>
<th>Patient Name </th>
<th>Patient Contact No </th>
<th>Patient Address</th>
<th>Doctor Name</th>
<th>Appointment Date</th>
<th>Appointment Time</th>
<th>Reason</th>
<th>Status</th>

</tr>
</thead>
<tbody>

<?php
	$sql = "select *from appointment where firstname = '$d_name'";
	$res = mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res))
	{  ?>
		<tr>
		<td><?php echo $row['a_id']; ?></td>
		<td><?php echo $row['p_name']; ?></td>
		<td><?php echo $row['p_mobile']; ?></td>
		<td><?php echo $row['p_address']; ?></td>
		<td><?php echo $row['firstname']; ?><?php echo $row['lastname']; ?></td>
		<td><?php echo $row['a_date']; ?></td>
		<td><?php echo $row['a_time']; ?></td>
		<td><?php echo $row['reason']; ?></td>
		<td><?php        
				 
				 if($cdate > $row['a_date'])
				 {
					 $a_id=$row['a_id'];
					 $update = "update appointment set status = 'Complete' where a_id=$a_id";
					 mysqli_query($con,$update); 
					 echo $row['status']; 
			 	 }
				 else if($row['status']=="Pending")
				 {
					 echo "<a href='?type=status&operation=complete&a_id=".$row['a_id']."'>Pending</a>&nbsp"; 			
				 }
				 else if($row['status']=="Complete")
				 {
				    if($cdate > $row['a_date'])
			            {
					echo $row['status'];
				    }
				    else
				    {
					 echo "<a href='?type=status&operation=pending&a_id=".$row['a_id']."'>Complete</a>&nbsp";  
				    }
				 }
				 else
				 {
					echo $row['status']; 
				 }
		?></td>
		</tr>
<?php	}  ?>


<?php }
else
{
	echo "<br>Login First...";
} ?> 
</tbody>
</table>           
</body>

</html>

<footer>
<?php
require('footer.php');
?>
</footer>