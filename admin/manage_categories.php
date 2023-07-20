<!doctype html>
<html>
<head> 
   <title>Manage categories</title>  
</head>

<?php
require('top.php');

$categories = '';
$msg = '';
$image = '';


$image_required = 'required';
if(isset($_GET['pro_cate_id']) && $_GET['pro_cate_id']!='')
{
	$image_required = '';

	$pro_cate_id = $_GET['pro_cate_id'];
	$res = mysqli_query($con,"select *from categories where pro_cate_id='$pro_cate_id'");
	$check = mysqli_num_rows($res);
	if( $check > 0 )
	{
		$row = mysqli_fetch_assoc($res);
		$categories = $row['categories'];
	}
	else
	{
		header('location:categories.php');
		die();
	}
	
	
}

if(isset($_POST['submit']))
{
	$categories = $_POST['categories'];
	$categories = trim($categories);
	$res = mysqli_query($con,"SELECT MAX(pro_cate_id) FROM categories");
	$row = mysqli_fetch_row($res);
	$maxid = $row[0];

	$res = mysqli_query($con,"select *from categories where categories='$categories'");
	$check = mysqli_num_rows($res);
	if( $check > 0 )
	{
	    if(isset($_GET['pro_cate_id']) && $_GET['pro_cate_id']!='')   
	    {
		$getdata = mysqli_fetch_assoc($res);
		if($pro_cate_id==$getdata['pro_cate_id'])
		{ }
		else
		{
		    $msg = "category already exist";
		}
	    }
	    else
	    {
		$msg = "category already exist";
	    }
	
	}

	if($_FILES['image']['type'] != '' && ($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'))
	{
		$msg = "Please select only png,jpg and jpeg image format";
	}
	if($msg=='')
	{
	    if(isset($_GET['pro_cate_id']) && $_GET['pro_cate_id']!='')
	    {
		if($_FILES['image']['name'] != '')
		{
	       		$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
	       		move_uploaded_file($_FILES['image']['tmp_name'],'media/categories/'.$image);
			
			mysqli_query($con,"update categories set categories='$categories', image='$image' where pro_cate_id='$pro_cate_id'");
			header('location:categories.php');
			die();
		}
		mysqli_query($con,"update categories set categories='$categories' where pro_cate_id='$pro_cate_id'");
		header('location:categories.php');
		die();
	    }
	    else
	    {
		$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],'media/categories/'.$image);		

		mysqli_query($con,"insert into categories(pro_cate_id, categories,image, status) values ($maxid +1 ,'$categories','$image','1')");
		header('location:categories.php');
		die();
	    }
	}
}


?>
	    <form method="post" enctype="multipart/form-data">
 	    <h3>Categories</h3><input type="text" name="categories" placeholder="Enter Categories name" required value="<?php echo $categories ?>">
	    <h3>Image</h3><input type="file" name="image" <?php echo $image_required ?>>	
                       
            <button name="submit" type="submit">
Submit </button>
                  
	    </form>
	
	    <?php echo $msg?>