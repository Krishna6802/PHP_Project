

<!DOCTYPE html>



<head>
    
	<!-- Custom StyleSheet -->
  <link rel="stylesheet" href="css/styles.css" />
  
	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="style.css">
 
	<title>All Products Page</title>

</head>


<?php
require ('top.php');

?>

<div style="background-color:pink; height:50px; width:1349px;">
<br>
<a href="index.php">Home  >  </a>
<span> All Products </span>
</div>

 <!-- ****************************************************************************** -->

 <!-- Featured Products-->



    <section class="section featured">

      <div class="title">

        <h1>Featured Products</h1>

      </div>


      <div class="product-center container">


<?php
$get_product = get_product($con,'','','');
foreach($get_product as $list)
{  ?>

        <div class="product">

          <div class="product-header">
            <a href="product.php?p_id=<?php echo $list['id']; ?>"><img src="admin/media/products/<?php echo $list['image']; ?>" alt="product image" height="300px" width="300px"></a>
            <ul class="icon1">
	       <a href="insert_cart.php?image=<?php echo $list['image']?>&name=<?php echo $list['name']?>&mrp=<?php echo $list['mrp']?>&qty=1&operation='cart'&page=dis_products.php"><span><i></i></span></a>            
            </ul>

            <ul class="icon2">
	        <a href="buy.php?p_id=<?php echo $list['id']; ?>&operation='checkout'&qty=1"><span><i></i></span></a>            
            </ul>

	    <ul class="icon4">
	       <a href="product.php?p_id=<?php echo $list['id']; ?>&page=dis_products.php"><span><i></i></span></a>            
            </ul>
	    
          </div>


          <div class="product-footer">

            <a href="product.php?p_id=<?php echo $list['id']; ?>&page=dis_products.php"><h4><?php
$str = $list['name'];
if( strlen( $list['name']) > 58) {
    $str = explode( "\n", wordwrap( $list['name'], 58));
    $str = $str[0] . '...';
}

echo $str;
?></h4></a>

            
<h4 class="price">Rs.<?php echo $list['mrp']; ?></h4>


<form action="insert_cart.php" method="get">
<input type="hidden" name="p_id" value="<?php echo $list['id'] ?>">
<input type="hidden" name="image" value="<?php echo $list['image']?>">
<input type="hidden" name="name" value="<?php echo $list['name']?>">
<input type="hidden" name="mrp" value="<?php echo $list['mrp']?>">

<input type="hidden" name="page" value="dis_products.php">


<p>Qty
<input type="number" name="qty" id="quantity" value="1" min="1" max="100"> 

<input type="submit" name="cart" value="Add to cart" style="background-color:#243a6f ; color:white; height:30px; width:200px; margin-top:3px; text-align:center; font-size:16px; font-weight:700; border:none; padding:6px;">
</form>

	</div>


           </div>



<?php } ?>

   </div>


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
   cursor: pointer;
}

.b1:hover
{
   background-color:  #f44336;
   border: #f44336;
   color: #FCF5E5;
}

</style>

<a href="index.php#pro"><button type="button" class="b1">BACK</button></a></div>

 </section> 
<?php
require('footer.php');
?>
