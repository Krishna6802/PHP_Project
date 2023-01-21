<!doctype html>

<html>
  
<head>
  
   <title>User Display Page</title>
     
   <link rel="stylesheet" type="text/css" href="style.css">
</head>


<?php
require('top.php');

if(isset($_GET['type']) && $_GET['type']!='')
{
	$type = $_GET['type'];
	

	if($type == 'delete')
	{
		
		$id = $_GET['id'];
		$delete = "delete from users where id='$id'";
		mysqli_query($con,$delete);
	}
	
}

$sql = "select *from users order by id desc";
$res = mysqli_query($con,$sql);
?>



   
<body>
 

<h4 class="box-title">Users </h4>


        <table class="table ">
  
            <thead>
       
		<tr>
                                       
		   <th>#</th>
                                                                  
		   <th>ID</th>
                                       
		   <th>Name</th>
                                                                            
		   <th>Email</th>

		   <th>Mobile</th>
     	
		   <th>Date</th>
		   <th></th>

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
		      <td> <?php echo $row['name'] ?> </td>
		      <td> <?php echo $row['email'] ?> </td>
		      <td> <?php echo $row['mobile'] ?> </td>
		      <td> <?php echo $row['added_on'] ?> </td>
		      <td> <?php echo "<a href='?type=delete&id=".$row['id']."'>Delete</a>&nbsp"; ?> </td>                                              
		   </tr>
  
<?php   $i++;}  ?>   
		
		 </tbody>
                              
		</table>
                           		
 
                
</body>

</html>