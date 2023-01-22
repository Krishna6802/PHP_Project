<!doctype html>

<html>
  
<head>
  
   <title>Product Categories Page</title>
     
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
		$pro_cate_id = $_GET['pro_cate_id'];
		if($operation == 'active')
		{
			$status = '1';
		}
		else
		{
			$status = '0';
		}
		$update = "update categories set status = '$status' where pro_cate_id='$pro_cate_id'";
		mysqli_query($con,$update);
	}

	if($type == 'delete')
	{
		
		$pro_cate_id = $_GET['pro_cate_id'];
		$delete = "delete from categories where pro_cate_id='$pro_cate_id'";
		mysqli_query($con,$delete);
	}
	
}

$sql = "select *from categories order by categories";
$res = mysqli_query($con,$sql);
?>



   
<body>
 

<h4 class="box-title">Categories </h4>

<h4 class="box-title"><a href="manage_categories.php">Add Categories</a> </h4>

        <table class="table ">
  
            <thead>
       
		<tr>
                                       
		   <th>#</th>
                                                                  
		   <th>ID</th>
                                       
		   <th>Categories</th>

		   <th>Image</th>
                                                                            
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
                                                                            
		      <td> <?php echo $row['pro_cate_id'] ?> </td>
		      <td> <?php echo $row['categories'] ?> </td>
		      <td> <img src="media/categories/<?php echo $row['image'] ?>"  width="50" height="60"> </td>
		      <td> <?php if($row['status']==1)
				 {
					 echo "<a href='?type=status&operation=deactive&pro_cate_id=".$row['pro_cate_id']."'>Active</a>&nbsp"; 			
				 }
				 else
				 {
					 echo "<a href='?type=status&operation=active&pro_cate_id=".$row['pro_cate_id']."'>Deactive</a>&nbsp";  
				 }
				 
			        
				echo "<a href='manage_categories.php?pro_cate_id=".$row['pro_cate_id']."'>Edit</a>&nbsp";
			         echo "<a href='?type=delete&pro_cate_id=".$row['pro_cate_id']."'>Delete</a>&nbsp";  
				   ?>
		      </td>                                             
		   </tr>
  
<?php   $i++;}  ?>   
		
		 </tbody>
                              
		</table>
                           		
 
                
</body>

</html>