<?php
require ('top.php');

$page=$_GET['page'];

$msg = '';
$total = 0;
?>

<?php

if(isset($_SESSION['USER_LOGIN']))
{
	$u_id = $_SESSION['USER_ID'];


  if(isset($_GET['cart']) || $_GET['operation']='cart')
  {
    
    $image =$_GET['image'];
    $name =$_GET['name'];
    $mrp =$_GET['mrp'];
    $qty =$_GET['qty'];

    /*	echo $p_id."<br>";
	echo $image."<br>";
	echo $name."<br>";
	echo $code."<br>";
	echo $mrp."<br>";
	echo $qty."<br>";   */


	$res = mysqli_query($con,"select *from cart_details where name='$name' AND u_id = $u_id");
	$check = mysqli_num_rows($res);
	if( $check > 0 )
	{
	    echo "<div style='background-color:red; margin-top:50px; height:60px; width:1000px; margin-left:170px; margin-bottom:50px;'><h3 style='color:white; font-weight:700; padding:20px;' align='center'>Product already added To cart!!</h3></div>";
	?><form action="index.php" align="center">
	    <input type="submit" name="continue" value="Continue Shopping" style="background-color:#243a6f ; color:white; height:35px; width:200px; text-align:center; font-size:16px; font-weight:700; border:none; padding:6px;">
	</form>
	<br>
	<form action="cart.php" class="checkout btn" align="center">
	<input type="submit" name="view" value="View Cart" style="background-color:#243a6f ; color:white; height:30px; width:200px; text-align:center; font-size:16px; font-weight:700; border:none; padding:6px;">
	</form><br><br>
<?php
	}
	
	else
	{
		$total = $qty * $mrp;
		 mysqli_query($con,"insert into cart_details(u_id,image,name,mrp,qty,total) values ('$u_id','$image','$name','$mrp','$qty','$total')");
		 header('location:cart.php');
   
	}
	
	
  }

}
else
{

?>

<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  height:300px;
  width:800px;
  opacity:0.9;
  margin-left:250px;
  margin-top:50px;
}

.alert:hover
{
   opacity:1;
}

.b1
{
   width: 200px;
   border-radius:25px;
   background-color: white ;
   border: white;
   color: #f44336;
   padding: 10px 0px;
   text-align: center;
   text-decoration: none;
   font-size: 15px;
   font-weight:700;
   margin: 0px 295px;
   margin-top: 20px;
   cursor: pointer;
}

</style>

  <div class="alert">
  <p align="center"><strong>Opps !!</strong> To add item in cart you have to login first...</p>


<br>
<br>
<br>

<?php
	
if($page=="product.php")
{ 
$p_id=$_GET['p_id'];
 ?>
     <a href="login.php?page=<?php echo $page; ?>&p_id=<?php echo $p_id; ?>"><button type="button" class="b1">LOGIN</button></a><br><br>
<?php
}
else if($page=="categories.php")
{ 
$cat_id=$_GET['cat_id'];
echo $cat_id;
 ?>
     <a href="login.php?page=<?php echo $page; ?>&cat_id=<?php echo $cat_id; ?>"><button type="button" class="b1">LOGIN</button></a><br><br>
<?php
}
else
{  ?>
     <a href="login.php?page=<?php echo $page; ?>"><button type="button" class="b1">LOGIN</button></a><br><br>
<?php } ?>
    

<?php
if($page=="cart.php")
{  ?>
	<a href="cart.php?page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a>
<?php 
}
else if($page=="index_pro")
{ ?>
	<a href="index.php#pro?page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a>
<?php 
}
else if($page=="dis_products.php")
{ ?>
	<a href="dis_products.php?page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a>
<?php 
}
else if($page=="product.php")
{
$p_id=$_GET['p_id'];
 ?>
	<a href="product.php?p_id=<?php echo $p_id; ?>&page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a>
<?php 
}
else if($page=="categories.php")
{ ?>
	<a href="categories.php?cat_id=<?php echo $cat_id; ?>&page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a>
<?php 
}
else
{ ?>
	<a href="index.php?page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a>

<?php } ?> 
</div>
<br>
<br>
<br>

<?php	
}
?>

<?php
require ('footer.php');
?>

