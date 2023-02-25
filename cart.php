<!DOCTYPE html>

<html>


<head>
 <!-- Box icons -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />


  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />

  <title>Cart Page</title>

</head>



<?php

require ('top.php');
$gtotal = 0;

 if(isset($_SESSION['USER_LOGIN']))
{
	$u_id = $_SESSION['USER_ID'];
	
	if(isset($_GET['type']) && $_GET['type']!='')
	{
	    $type = $_GET['type'];
	    if($type == 'delete')
	    {
		
		$id = $_GET['id'];
		$delete = "delete from cart_details where id='$id'";
		mysqli_query($con,$delete);
	    }	
	}

	$sql = "select *from cart_details where u_id = $u_id";
	$res = mysqli_query($con,$sql);
	
		
?>




<body>

  <!-- Cart Items -->

  <div class="container-md cart">

    <table>

      <tr>

        <th>Product</th>

        <th>Quantity</th>

        <th>Subtotal</th>

      </tr>

<?php 
	$i = 1;
	while($row=mysqli_fetch_assoc($res))  
	{  ?>  


      <tr>

        <td>

          <div class="cart-info">

            <img src="admin/media/products/<?php echo $row['image'] ?>">
            <div>

              <p><?php echo $row['name'] ?></p>

              <span>Price: $<?php echo $row['mrp'] ?></span>

              <br />

              <a href="#"><?php echo "<a href='?type=delete&id=".$row['id']."'>Remove</a>&nbsp"; ?></a>

            </div>

          </div>

        </td>

        <td><form action="manage_qty.php" style="float:left">
			   <input type="hidden" name="qty" value="<?php echo $row['qty'] ?>">
			   <input type="hidden" name="mrp" value="<?php echo $row['mrp'] ?>">
			   <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
			   <input type="submit" name="minus" value="-"  style="background-color:#243a6f ; color:white; height:30px; width:25px; text-align:center; font-size:16px; font-weight:700; border:none; padding:6px;">
			   </form>
			   &nbsp<?php echo $row['qty'] ?>
		 	   <form action="manage_qty.php" style="float:right; ">
			   <input type="hidden" name="qty" value="<?php echo $row['qty'] ?>">
			   <input type="hidden" name="mrp" value="<?php echo $row['mrp'] ?>">
			   <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
			   <input type="submit" name="plus" value="+" style="background-color:#243a6f ; color:white; height:30px; width:25px; text-align:center; font-size:16px; font-weight:700; border:none; padding:6px;">
			   </form> &nbsp</td>

        <td><?php echo $row['total'] ?></td>

      </tr>


 <?php 
	$pro = $row['mrp'] * $row['qty'];
	$gtotal = $gtotal + $pro; ?>         
		      
<?php  }  ?>


	 </table>


    <div class="total-price">
      <table>
        <tr>
          <td>Total</td>
          <td><?php echo $gtotal; ?></td>
        </tr>
      </table>
	
<br>
<form action="index.php">
<input type="submit" name="continue" value="Continue Shopping" style="background-color:#243a6f ; color:white; height:30px; width:200px; text-align:center; font-size:16px; font-weight:700; border:none; padding:6px;">
</form>
<br>
<form action="checkout.php" class="checkout btn">
<input type="submit" name="checkout" value="Proceed To Checkout" style="background-color:#243a6f ; color:white; height:30px; width:200px; text-align:center; font-size:16px; font-weight:700; border:none; padding:6px;">
</form>
    </div>


  </div>


<?php
	
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
  <p align="center"><strong>Opps !!</strong> To view cart you have to login first...</p>


<br>
<br>
<br>
	
<a href="login.php?page=cart.php"><button type="button" class="b1">LOGIN</button></a><br><br>

     <a href="index.php"><button type="button" class="b1">BACK</button></a></div>
 
<br>
<br>
<br>

<?php
}

?>


</div>


  
</body>


</html>

<?php

require ('footer.php');
?>