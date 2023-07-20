<!doctype html>
<html>
<head> 
   <title>Manage Doctor Categories Page</title>  
</head>

<?php
require('top.php');

$categories = '';
$msg = '';
$image = '';


$image_required = 'required';
if(isset($_GET['doc_cate_id']) && $_GET['doc_cate_id']!='')
{
	$image_required = '';

	$id = $_GET['doc_cate_id'];
	$res = mysqli_query($con,"select *from doc_cate where doc_cate_id='$id'");
	$check = mysqli_num_rows($res);
	if( $check > 0 )
	{
		$row = mysqli_fetch_assoc($res);
		$categories = $row['categories'];
	}
	else
	{
		header('location:doc_cate.php');
		die();
	}
	
	
}

if(isset($_POST['submit']))
{
	$categories = $_POST['categories'];
	$categories = trim($categories);
	$res = mysqli_query($con,"SELECT MAX(doc_cate_id) FROM doc_cate");
	$row = mysqli_fetch_row($res);
	$maxid = $row[0];

	$res = mysqli_query($con,"select *from doc_cate where categories='$categories'");
	$check = mysqli_num_rows($res);
	if( $check > 0 )
	{
	    if(isset($_GET['doc_cate_id']) && $_GET['doc_cate_id']!='')   
	    {
		$getdata = mysqli_fetch_assoc($res);
		if($id==$getdata['doc_cate_id'])
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
	    if(isset($_GET['doc_cate_id']) && $_GET['doc_cate_id']!='')
	    {
		if($_FILES['image']['name'] != '')
		{
	       		$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
	       		move_uploaded_file($_FILES['image']['tmp_name'],'media/doctors/'.$image);
			
			mysqli_query($con,"update doc_cate set categories='$categories', image='$image' where doc_cate_id='$id'");
			header('location:doc_cate.php');
			die();
		}
		mysqli_query($con,"update doc_cate set categories='$categories' where doc_cate_id='$id'");
		header('location:doc_cate.php');
		die();
	    }
	    else
	    {
		$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],'media/doctors/'.$image);		

		mysqli_query($con,"insert into doc_cate(doc_cate_id, categories,image, status) values ($maxid +1 ,'$categories','$image','1')");
		header('location:doc_cate.php');
		die();
	    }
	}
}


?>
	    <form method="post" enctype="multipart/form-data">
 	    <h3>Doctors' Categories</h3><input type="text" name="categories" placeholder="Enter Categories name" required value="<?php echo $categories ?>">
	    <h3>Image</h3><input type="file" name="image" <?php echo $image_required ?>>	
                       
            <button name="submit" type="submit">
Submit </button>
                  
	    </form>
	
	    <?php echo $msg?>