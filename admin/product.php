<!doctype html>
<html>
<head> 
   <title>Products Page</title>  
</head>

<!doctype html>

<html>
  
<head>
  
   <title>Product Page</title>
     
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
		$update = "update product set status = '$status' where id='$id'";
		mysqli_query($con,$update);
	}

	if($type == 'delete')
	{
		
		$id = $_GET['id'];
		$delete = "delete from product where id='$id'";
		mysqli_query($con,$delete);
	}
	
}

$sql = "select product.*, categories.categories from product, categories where product.pro_cate_id=categories.pro_cate_id order by product.id desc";
// here in product.* product is table name and * specifies columns.

$res = mysqli_query($con,$sql);
?>



   
<body>
 

<h4 class="box-title">Products </h4>

<h4 class="box-title"><a href="manage_product.php">Add Product</a> </h4>

        <table class="table ">
  
            <thead>
       
		<tr>
                                       
		   <th>#</th>
                                                                  
		   <th>ID</th>
                                       
		   <th>Category</th>
                                                                            
		   <th>Name</th>

		   <th>Code</th>

		   <th>MRP</th>

		   <th>Image</th>
		   <th>Price</th>

		   <th>Qty</th>

		   <th>Action</th>
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
		      <td> <?php echo $row['categories'] ?> </td>
		      <td> <?php echo $row['name'] ?> </td>
		      <td> <?php echo $row['code'] ?> </td>
		      <td> <?php echo $row['mrp'] ?> </td>
		      <td> <img src="media/products/<?php echo $row['image'] ?>"  width="50" height="60"> </td>
		      <td> <?php echo $row['price'] ?> </td>
		      <td> <?php echo $row['qty'] ?> </td>
		      <td> <?php if($row['status']==1)
				 {
					 echo "<a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a>&nbsp"; 			
				 }
				 else
				 {
					 echo "<a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a>&nbsp";  
				 }
				 
			        
				echo "<a href='manage_product.php?id=".$row['id']."'>Edit</a>&nbsp";
			         echo "<a href='?type=delete&id=".$row['id']."'>Delete</a>&nbsp";  
				   ?>
		      </td>                                             
		   </tr>
  
<?php   $i++;}  ?>   
		
		 </tbody>
                              
		</table>
                           		
 
                
</body>

</html>