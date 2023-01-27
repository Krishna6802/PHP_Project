<!doctype html>
<html>
<head> 
   <title>Manage_blog Page</title>  
</head>

<?php
require('top.php');
$blog_cate_id = '';
$title = '';
$image = '';
$description = '';


$msg = '';
$image_required = 'required';
if(isset($_GET['id']) && $_GET['id']!='')
{
	$image_required ='';

	$id = $_GET['id'];
	$res = mysqli_query($con,"select *from blog where id='$id'");
	$check = mysqli_num_rows($res);

	if( $check > 0 )
	{
		$row = mysqli_fetch_assoc($res);

		
		$blog_cate_id = $row['blog_cate_id'];
		$title = $row['title'];
		//$image = $row['image'];
		$description = $row['description'];
		
	}
	else
	{
		header('location:blog.php');
		die();
	}
	
	
}

if(isset($_POST['submit']))
{
	$blog_cate_id = trim($_POST['blog_cate_id']);
	$title = trim($_POST['title']);
	$description = $_POST['description'];
	 
	

	$res = mysqli_query($con,"select *from blog where title='$title'");
	$check = mysqli_num_rows($res);
	if( $check > 0 )
	{
	    if(isset($_GET['id']) && $_GET['id']!='')   
	    {
		$getdata = mysqli_fetch_assoc($res);
		if($id==$getdata['id'])
		{ }
		else
		{
		    $msg = "Title already exist";
		}
	    }
	    else
	    {
		$msg = "Title already exist";
	    }
	
	}

	if($_FILES['image']['type'] != '' && ($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'))
	{
		$msg = "Please select only png,jpg and jpeg image format";
	}
	if($msg=='')
	{
	    if(isset($_GET['id']) && $_GET['id']!='')
	    {
		if($_FILES['image']['name'] != '')
		{
		    $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
		    move_uploaded_file($_FILES['image']['tmp_name'],'media/blogs/'.$image);
		    $update = "update blog set blog_cate_id = '$blog_cate_id', title='$title',  image='$image',  description='$description' where id='$id'";
		    mysqli_query($con,$update);
		    header('location:blog.php');
		    die();
		}
		else
		{
		    $update = "update blog set blog_cate_id = '$blog_cate_id', title='$title',   description='$description' where id='$id'";
		    mysqli_query($con,$update);
		    header('location:blog.php');
		    die();
		}      
		
		
	    }
	    else
	    {
		$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],'media/blogs/'.$image);
		
		mysqli_query($con,"INSERT INTO `blog` (`blog_cate_id`,`title`, `image`, `description`, `status`) 
		VALUES ('$blog_cate_id','$title', '$image', '$description', '1')");
		header('location:blog.php');
		die();  
	    }
	}
}
?>
<br><br>
<strong>Blog</strong><small> Form</small>
<form method="post" enctype="multipart/form-data">
<h3>Blog Category</h3> <select name="blog_cate_id">
			<option>Select Blog Category</option>
			<?php
			    $res=mysqli_query($con,"select blog_cate_id, categories from blog_cate order by categories");
			    while($row=mysqli_fetch_assoc($res))
			    {
				if($row['blog_cate_id']==$blog_cate_id)
				{
					echo "<option selected value=".$row['blog_cate_id'].">".$row['categories']."</option>";
				}
				else
				{
					echo "<option value=".$row['blog_cate_id'].">".$row['categories']."</option>";
				}
			    }
			?>
		    </select>
<h3>Blog Title</h3><input type="text" name="title" placeholder="Enter Blog Title" required value="<?php echo $title ?>">
 
  
<h3>Image</h3><input type="file" name="image" <?php echo $image_required ?>>
  


<h3>Description</h3><textarea name="description" placeholder="Enter Blog Description" required rows="12" cols="150"><?php echo $description ?></textarea>   
                       
<button name="submit" type="submit">
Submit </button>
 
                
</form>
	
	    <?php echo $msg?>


