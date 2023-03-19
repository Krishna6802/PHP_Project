<!doctype html>
<html>
<head> 
   <title>My Appointment</title>  
</head>

<!doctype html>

<html>
  
<head>
  
   <title>Patient Appointment Details</title>
     
</head>

<?php

require ('top.php');
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
<th>Cancel Appointment</th>

</tr>
</thead>
<tbody>

<?php
	$sql = "SELECT `a_id`, `p_name`, `p_mobile`, `p_address`, `firstname`, `lastname`, `a_date`, `a_time`, `reason`, `added_on`, `status` FROM `appointment`";
	//$sql = "select *from appointment where p_name = '$p_name'";
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
		<td><?php echo $row['status']; ?></td>
		<td><?php if($row['status'] == "Complete") { echo "-"; } else { ?><a href="cancel_app.php?a_id=<?php echo $row['a_id']; ?>">Cancel<?php } ?></td>

		</tr>




<?php }
?> 
</body>

</html>

