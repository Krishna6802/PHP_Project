<!doctype html>
<html>
<head> 
   <title>Products Page</title>  
</head>

<?php
require ('top.php');

$page = $_GET['page'];
$product_id=$_GET['p_id'];

if($product_id>0)
{
}
else
{
    echo "<script> window.location.href='index.php'; </script>";
}

//$sql = "select * from product where status = 1 ";
//$sql .= "and id=$product_id ";

$sql = "select product.*, categories.categories from product, categories where product.id=$product_id AND product.pro_cate_id=categories.pro_cate_id ";
$res = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
       
?>


<div style="background-color:pink; height:50px; width:1349px;">
<br>
<a href="index.php">Home  >  </a>
<a href="categories.php?id=<?php echo $row['pro_cate_id']?>&page=product.php"><?php echo $row['categories']?>  >  </a>
<span><?php echo $row['name']?></span>
</div>

<section class="section featured">

      <div class="title">

        <h1><?php echo $row['name']?></h1>

      </div>


      <div class="product-center container">



<section class="section product-detail">

    <div class="details container-md">
 
     <div class="left">

        <div class="main">

<img src="admin/media/products/<?php echo $row['image']?>" alt="full_image" height="300px" width="300px">

<ul class="icon1">
	       <a href="insert_cart.php?image=<?php echo $row['image']?>&name=<?php echo $row['name']?>&mrp=<?php echo $row['mrp']?>&qty=1&operation='cart'"><span><i></i></span></a>            
            </ul>

            <ul class="icon2">
	        <a href="buy.php?p_id=<?php echo $row['id']; ?>&operation='checkout'&qty=1"><span><i></i></span></a>            
            </ul>
	    <ul class="icon3">
	       <a href="insert_cart.php"><span><i></i></span></a>           
            </ul>

	    <ul class="icon4">
	       <a href="product.php?p_id=<?php echo $row['id']; ?>"><span><i></i></span></a>            
            </ul>
		</div>



 </div>

                    
      <div class="right">

            <a href="product.php?p_id=<?php echo $row['id']; ?>">
<h1><?php echo $row['name']; ?></h1></a>

<ul>
<li style="font-weight:700;">Name : <?php echo $row['name']?></li>
<li style="font-weight:700;">MRP : Rs.<?php echo $row['mrp']?></li>

</ul>
<p>Availability : In Stock</p>


<form action="insert_cart.php" method="get">
<input type="hidden" name="p_id" value="<?php echo $row['id'] ?>">
<input type="hidden" name="image" value="<?php echo $row['image']?>">
<input type="hidden" name="name" value="<?php echo $row['name']?>">
<input type="hidden" name="code" value="<?php echo $row['code']?>">
<input type="hidden" name="mrp" value="<?php echo $row['mrp']?>">

<input type="hidden" name="page" value="product.php">

<p style="font-weight:700;">Qty
<input type="number" name="qty" value="1" min="1" max="100"> 

<p><?php echo $row['description']?></p><br>
<p style="font-weight:700;">Categories : <?php echo $row['categories']?></p>
<br>
<h4 style="font-weight:700;">Description</h4>
<?php echo $row['description'] ?>
<br><br>

<input type="submit" name="cart" value="Add to cart" style="background-color:#243a6f ; color:white; height:30px; width:200px; text-align:center; font-size:16px; font-weight:700; border:none; padding:6px;">
</form>

</div>

    </div>


</div>

</br>
</br>

<style>
.b1
{
   width: 200px;
   border-radius:25px;
   background-color: #FCF5E5 ;
   border: white;
   color: #f44336;
   padding: 10px 0px;
   text-align: center;
   text-decoration: none;
   font-size: 15px;
   font-weight:700;
   margin: 0px 550px;
   margin-top: 70px;
   margin-bottom: 50px;
   cursor: pointer;
}

.b1:hover
{
   background-color:  #f44336;
   border: #f44336;
   color: #FCF5E5;
}

</style>

<?php
if($page=="categories.php")
{  
  $cat_id = $_GET['cat_id'];	
?>
	<a href="categories.php?id=<?php echo $cat_id; ?>&page=display_cate.php"><button type="button" class="b1">BACK</button></a></div>
<?php 
}
else if($page=="dis_products.php")
{  ?>
	<a href="dis_products.php"><button type="button" class="b1">BACK</button></a></div>
<?php
}
else
{ ?>
	<a href="index.php#pro"><button type="button" class="b1">BACK</button></a></div>
<?php 
} 

require('footer.php');
?>