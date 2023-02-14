<!doctype html>
<html>
<head> 
   <title>Categories Page</title>  
</head>

<?php
require ('top.php');

$page=$_GET['page'];
$cat_id=$_GET['id'];

if($cat_id>0)
{
    $get_product = get_product($con,'',$cat_id,'');
}
else
{
    echo "<script> window.location.href='index.php'; </script>";
}

$cat = mysqli_query($con,"select *from categories where pro_cate_id=$cat_id");
$row1=mysqli_fetch_assoc($cat);

?>

<div style="background-color:pink; height:50px; width:1349px;">
<br>
<a href="index.php">Home  >  </a>
<span><?php echo $row1['categories']?> </span>
</div>

<?php if(count($get_product)>0)
{    ?>

<section class="section featured">

      <div class="title">

        <h1> <?php echo $row1['categories']?> </h1>

      </div>


      <div class="product-center container">



<?php
foreach($get_product as $list)
{  ?>

 <div class="product">

          <div class="product-header">
  <a href="product.php?p_id=<?php echo $list['id'] ?>"><img src="admin/media/products/<?php echo $list['image']; ?>" alt="product image" height="300px" width="300px"></a>
 	<ul class="icon1">
	       <a href="insert_cart.php?image=<?php echo $list['image']?>&name=<?php echo $list['name']?>&mrp=<?php echo $list['mrp']?>&qty=1&operation='cart'&page=categories.php&cat_id=<?php echo $cat_id; ?>"><span><i></i></span></a>            
            </ul>

            <ul class="icon2">
	        <a href="buy.php?p_id=<?php echo $list['id']; ?>&operation='checkout'&qty=1"><span><i></i></span></a>            
            </ul>

	    <ul class="icon4">
	       <a href="product.php?p_id=<?php echo $list['id']; ?>&page=categories.php&cat_id=<?php echo $cat_id; ?>"><span><i></i></span></a>            
            </ul>
	</div>


          <div class="product-footer">

 
  <a href="product.php?p_id=<?php echo $list['id'] ?>&page=categories.php&cat_id=<?php echo $cat_id; ?>"><h4><?php echo $list['name']; ?></h4></a>
  <ul>
  <li>Rs.<?php echo $list['mrp']; ?></li>
  </ul>

<form action="insert_cart.php" method="get">
<input type="hidden" name="p_id" value="<?php echo $list['id'] ?>">
<input type="hidden" name="image" value="<?php echo $list['image']?>">
<input type="hidden" name="name" value="<?php echo $list['name']?>">
<input type="hidden" name="code" value="<?php echo $list['code']?>">
<input type="hidden" name="mrp" value="<?php echo $list['mrp']?>">

<input type="hidden" name="page" value="categories.php">
<input type="hidden" name="cat_id" value="<?php echo $cat_id;?>">


<p>Qty
<input type="number" name="qty" value="1" min="1" max="100"> 

<input type="submit" name="cart" value="Add to cart" style="background-color:#243a6f ; color:white; height:30px; width:200px; margin-top:3px; text-align:center; font-size:16px; font-weight:700; border:none; padding:6px;">
</form>

</div>

   </div>





<?php } ?>
</div>
</section>
<?php } 
      else 
      {
	   echo "Data not found";
      } ?>

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
if($page=="display_cate.php")
{  ?>
	<a href="display_cate.php"><button type="button" class="b1">BACK</button></a></div>
<?php 
}
else
{ ?>
	<a href="index.php#pro_categories"><button type="button" class="b1">BACK</button></a></div>
<?php 
} 
require('footer.php');
?>