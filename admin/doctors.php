<!doctype html>

<html>
  
<head>
  
   <title>Doctors Page</title>
     
   <link rel="stylesheet" type="text/css" href="style.css">
</head>


<?php
require('top.php');

if(isset($_GET['type']) && $_GET['type']!='')
{
	$type = $_GET['type'];
	
	if($type == 'status')
	{
		$operation = $_GET['operation'];
		$id = $_GET['id'];
		if($operation == 'active')
		{
			$status = '1';
		}
		else
		{
			$status = '0';
		}
		$update = "update doctor set status = '$status' where id='$id'";
		mysqli_query($con,$update);
	}

	if($type == 'delete')
	{
		
		$id = $_GET['id'];
		$delete = "delete from doctor where id='$id'";
		mysqli_query($con,$delete);
	}
	
}
$sql = "select doctor.*, doc_cate.categories from doctor, doc_cate where doctor.doc_cate_id=doc_cate.doc_cate_id order by doctor.id desc";
// here in product.* product is table name and * specifies columns.

$res = mysqli_query($con,$sql);
?>



   
<body>
 

<h4 class="box-title">Doctors </h4>


        <table class="table ">
  
            <thead>
       
		<tr>
                                       
		   <th>#</th>
                                                                  
		   <th>ID</th>
                                       
		   <th>First Name</th>
                                                                            
		   <th>Last Name</th>

		   <th>Email</th>
     	
		   <th>Contact No</th>
		   <th>Gender</th>
		   <th>Profile-Pic</th>
		   <th>Country</th>
		   <th>State</th>
		   <th>City</th>
		   <th>Qualification</th>
		   <th>Experience</th>
		   <th>Speciality</th>
		   <th>Fees</th>
		   <th>Date of Registration</th>
		   <th>Status</th>
		</tr>
                     
            </thead>
                                 
	    <tbody>
<?php 
		$i = 1;
		while($row=mysqli_fetch_assoc($res))  
		{  ?>                                	
		   <tr>
                                      
		      <td> <?php echo $i ?></td>
                                                                            
		      <td> <?php echo $row['id'] ?> </td>
		      <td> <?php echo $row['firstname'] ?> </td>
		      <td> <?php echo $row['lastname'] ?> </td>
		      <td> <?php echo $row['email'] ?> </td>
		      <td> <?php echo $row['mobile'] ?> </td>
		      <td> <?php echo $row['gender'] ?> </td>
		      <td> <img src="media/doctors/<?php echo $row['image'] ?>"  width="50" height="60"> </td>
		      <td> <?php echo $row['country'] ?> </td>
		      <td> <?php echo $row['state'] ?> </td>
		      <td> <?php echo $row['city'] ?> </td>
		      <td> <?php echo $row['qualification'] ?> </td>
		      <td> <?php echo $row['experience'] ?> </td>
		      <td> <?php echo $row['categories'] ?> </td>
		      <td> <?php echo $row['fees'] ?> </td>
		      <td> <?php echo $row['added_on'] ?> </td>
		      <td> <?php if($row['status']==1)
				 {
					 echo "<a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a>&nbsp"; 			
				 }
				 else
				 {
					 echo "<a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a>&nbsp";  
				 }
				 
			        
				
			         echo "<a href='?type=delete&id=".$row['id']."'>Delete</a>&nbsp";  
				   ?>                                            
		   </tr>
  
<?php   $i++;}  ?>   
		
		 </tbody>
                              
		</table>
                           		
 
                
</body>

</html>