<!doctype html>
<html>
<head> 
   <title>Manage Product Page</title>  
</head>

<?php
require('top.php');
$pro_cate_id = '';
$name = '';
$code='';
$mrp = '';
$price = '';
$qty = '';
$image = '';
$short_desc = '';
$description = '';
$meta_title = '';
$meta_desc = '';
$meta_keyword = '';

$msg = '';
$image_required = 'required';
if(isset($_GET['id']) && $_GET['id']!='')
{
	$image_required ='';

	$id = $_GET['id'];
	$res = mysqli_query($con,"select *from product where id='$id'");
	$check = mysqli_num_rows($res);

	if( $check > 0 )
	{
		$row = mysqli_fetch_assoc($res);

		
		$pro_cate_id = $row['pro_cate_id'];
		$name = $row['name'];
		$code = $row['code'];
		$mrp = $row['mrp'];
		$price = $row['price'];
		$qty = $row['qty'];
		//$image = $row['image'];
		$short_desc = $row['short_desc'];
		$description = $row['description'];
		$meta_title = $row['meta_title'];
		$meta_desc = $row['meta_desc'];
		$meta_keyword = $row['meta_keyword'];
		
	}
	else
	{
		header('location:product.php');
		die();
	}
	
	
}

if(isset($_POST['submit']))
{
	$pro_cate_id = trim($_POST['pro_cate_id']);
	$name = trim($_POST['name']);
	$code = $_POST['code'];
	$mrp = $_POST['mrp'];
	$price = $_POST['price'];
	$qty = $_POST['qty'];
	$short_desc = $_POST['short_desc'];
	$description = $_POST['description'];
	$meta_title = $_POST['meta_title'];
	$meta_desc = $_POST['meta_desc'];
	$meta_keyword = $_POST['meta_keyword'];
	 
	$res = mysqli_query($con,"SELECT MAX(id) FROM PRODUCT");
	$row = mysqli_fetch_row($res);
	$maxid = $row[0];

	$res = mysqli_query($con,"select *from product where name='$name'");
	$check = mysqli_num_rows($res);
	if( $check > 0 )
	{
	    if(isset($_GET['id']) && $_GET['id']!='')   
	    {
		$getdata = mysqli_fetch_row($res);
		if($id==$getdata[0])
		{ }
		else
		{
		    $msg = "Product already exist";
		}
	    }
	    else
	    {
		$msg = "Product already exist";
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
		    move_uploaded_file($_FILES['image']['tmp_name'],'media/products/'.$image);
		    $update = "update product set pro_cate_id='$pro_cate_id', name='$name', code='$code', mrp='$mrp', price='$price', qty='$qty', image='$image', short_desc='$short_desc', description='$description', meta_title='$meta_title', meta_desc='$meta_desc', meta_keyword='$meta_keyword' where id='$id'";
		    mysqli_query($con,$update);
		    header('location:product.php');
		    die();
		}
		else
		{
		    $update = "update product set pro_cate_id='$pro_cate_id', name='$name', code='$code', mrp='$mrp', price='$price', qty='$qty', short_desc='$short_desc', description='$description', meta_title='$meta_title', meta_desc='$meta_desc', meta_keyword='$meta_keyword' where id='$id'";
		    mysqli_query($con,$update);
		    header('location:product.php');
		    die();
		}      
		
		
	    }
	    else
	    {
		$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],'media/products/'.$image);
		
		mysqli_query($con,"INSERT INTO `product` (`id`,`pro_cate_id`,`name`,`code`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) 
		VALUES ($maxid + 1,'$pro_cate_id','$name','$code', '$mrp', '$price','$qty','$image','$short_desc', '$description', '$meta_title', '$meta_desc', '$meta_keyword', '1')");
		header('location:product.php');
		die();  
	    }
	}
}
?>
<br><br>
<strong>Product</strong><small> Form</small>
<form method="post" enctype="multipart/form-data">
<h3>Category</h3> <select name="pro_cate_id">
			<option>Select Category</option>
			<?php
			    $res=mysqli_query($con,"select pro_cate_id, categories from categories order by categories");
			    while($row=mysqli_fetch_assoc($res))
			    {
				if($row['pro_cate_id']==$pro_cate_id)
				{
					echo "<option selected value=".$row['pro_cate_id'].">".$row['categories']."</option>";
				}
				else
				{
					echo "<option value=".$row['pro_cate_id'].">".$row['categories']."</option>";
				}
			    }
			?>
		    </select>
<h3>Product Name</h3><input type="text" name="name" placeholder="Enter Product name" required value="<?php echo $name ?>">
 

<h3>Product Code</h3><input type="text" name="code" placeholder="Enter Product code" required value="<?php echo $code ?>">
 
  
<h3>MRP</h3><input type="text" name="mrp" placeholder="Enter Product MRP" required value="<?php echo $mrp ?>">
   

<h3>Price</h3><input type="text" name="price" placeholder="Enter Product Price" required value="<?php echo $price ?>">
 
  
<h3>Qty</h3><input type="text" name="qty" placeholder="Enter Product Qty" required value="<?php echo $qty ?>">
   

<h3>Image</h3><input type="file" name="image" <?php echo $image_required ?>>
  
 
<h3>Short Description</h3><input type="textarea" name="short_desc" placeholder="Enter Product Short description" required value="<?php echo $short_desc ?>">
   

<h3>Description</h3><input type="textarea" name="description" placeholder="Enter Product Description" required value="<?php echo $description ?>">

  
<h3>Meta Title</h3><input type="textarea" name="meta_title" placeholder="Enter Product Meta Title" value="<?php echo $meta_title ?>">
  

<h3>Meta Description</h3><input type="textarea" name="meta_desc" placeholder="Enter Product Meta Description" required value="<?php echo $meta_desc ?>">
 
 
<h3>Meta Keyword</h3><input type="textarea" name="meta_keyword" placeholder="Enter Product Meta keyword" value="<?php echo $meta_keyword ?>">
  
                       
<button name="submit" type="submit">
Submit </button>
 
                 
</form>
	
	    <?php echo $msg?>