<!doctype html>

<html>
  
<head>
  
   <title>Contact Details Page</title>
     
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
		$delete = "delete from contact_us where id='$id'";
		mysqli_query($con,$delete);
	}
	
}

$sql = "select *from contact_us order by id desc";
$res = mysqli_query($con,$sql);
?>



   
<body>
 

<h4 class="box-title">Contact_us </h4>


        <table class="table ">
  
            <thead>
       
		<tr>
                                       
		   <th>#</th>
                                                                  
		   <th>ID</th>
                                       
		   <th>Name</th>
                                                                            
		   <th>Email</th>

		   <th>Mobile</th>
     	
		   <th>Query</th>

		   <th>Date</th>
		   <th>Action</th>

		</tr>
                     
            </thead>
                                 
	    <tbody>
<?php 
		$i = 1;
		while($row=mysqli_fetch_row($res))  
		{  ?>                                	
		   <tr>
                                      
		      <td> <?php echo $i ?></td>
                                                                            
		      <td> <?php echo $row[0] ?> </td>
		      <td> <?php echo $row[1] ?> </td>
		      <td> <?php echo $row[2] ?> </td>
		      <td> <?php echo $row[3] ?> </td>
		      <td> <?php echo $row[4] ?> </td>
		      <td> <?php echo $row[5] ?> </td>
		      <td> <?php echo "<a href='?type=delete&id=".$row[0]."'>Delete</a>&nbsp"; ?> </td>                                              
		   </tr>
  
<?php   $i++;}  ?>   
		
		 </tbody>
                              
		</table>
                           		
 
                
</body>

</html>