<!doctype html>

<html>
  
<head>
  
   <title>Blog Page</title>
     
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
		$update = "update blog set status = '$status' where id='$id'";
		mysqli_query($con,$update);
	}

	if($type == 'delete')
	{
		
		$id = $_GET['id'];
		$delete = "delete from blog where id='$id'";
		mysqli_query($con,$delete);
	}
	
}

$sql = "select blog.*, blog_cate.categories from blog, blog_cate where blog.blog_cate_id=blog_cate.blog_cate_id order by blog.id desc";
// here in blog.* blog is table name and * specifies columns.

$res = mysqli_query($con,$sql);
?>



   
<body>
 

<h4 class="box-title">blogs </h4>

<h4 class="box-title"><a href="manage_blog.php">Add blog</a> </h4>

        <table class="table ">
  
            <thead>
       
		<tr>
                                       
		   <th>#</th>
                                                                  
		   <th>ID</th>
                                       
		   <th>Blog_Category</th>
                                                                            
		   <th>title</th>

		   <th>Image</th>

		   <th>Discription</th>
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
		      <td> <?php echo $row['categories'] ?> </td>
		      <td> <?php echo $row['title'] ?> </td>
		      <td> <img src="media/blogs/<?php echo $row['image'] ?>"  width="50" height="60"> </td>
		      <td> <?php
$str = $row['description'];
if( strlen( $row['description']) > 50) {
    $str = explode( "\n", wordwrap( $row['description'], 50));
    $str = $str[0] . '...';
}

echo $str;
?> </td>
		      <td> <?php if($row['status']==1)
				 {
					 echo "<a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a>&nbsp"; 			
				 }
				 else
				 {
					 echo "<a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a>&nbsp";  
				 }
				 
			        
				echo "<a href='manage_blog.php?id=".$row['id']."'>Edit</a>&nbsp";
			         echo "<a href='?type=delete&id=".$row['id']."'>Delete</a>&nbsp";  
			         echo "<a href='view_blog.php?id=".$row['id']."'>View</a>&nbsp";  
				   ?>
		      </td>                                             
		   </tr>
  
<?php  $i++; }  ?>   
		
		 </tbody>
                              
		</table>
                           		
 
                
</body>

</html>