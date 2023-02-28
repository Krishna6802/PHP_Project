
<!doctype html>

<html>
  

<head>
  
   <title>Checkout Page</title>
     
   
</head>

<?php
ob_start();

require ('top.php');
$gtotal = 0;

 if(isset($_SESSION['USER_LOGIN']))
{
	
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


	$u_id = $_SESSION['USER_ID'];	
	$sql = "select *from cart_details where u_id= $u_id";
	$res = mysqli_query($con,$sql);
	
		
?>


<body>

        <table class="table ">
  
            <thead>
       
		<tr>
                                                                           
		   <th>Image</th>
           
		   <th>Product_Name</th>                                                                 
		   <th>MRP</th>
	 	   <th>Qty</th>
		   <th>Total</th>   
		   <th>Remove</th>
		</tr>
                     
            </thead>
                                 
	    <tbody>
<?php 



		$i = 1;
		while($row=mysqli_fetch_assoc($res))  
		{  ?>                                	
		   <tr>
                                      
		      <td> <img src="admin/media/products/<?php echo $row['image'] ?>"  width="50" height="60"> </td>
		      <td> <?php echo $row['name'] ?> </td>
		      <td> <?php echo $row['mrp'] ?> </td>
		      <td> <?php echo $row['qty'] ?> </td>
		      <td> <?php echo $row['total'] ?> </td>
		     
		      <td> <?php echo "<a href='?type=delete&id=".$row['id']."'>Delete</a>"; ?> </td>
		      
			 <?php 
				$pro = $row['mrp'] * $row['qty'];
				$gtotal = $gtotal + $pro; ?>       
		    
		   
  
<?php  }  ?>

</tr>		
		 </tbody>
                              
		</table>
                           		


    <div class="total-price">
      <table>
        <tr>
          <td>Total</td>
          <td><?php echo $gtotal; ?></td>
        </tr>
      </table>
</div>
<br> 
  
<?php

if(isset($_POST['checkout']))
{
	$address = $_POST['address'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$added_on = date('y-m-d h:i:s');
	
	mysqli_query($con,"insert into tbl_order(u_id, address, city, pincode, payment_type, total_price, payment_status, order_status,added_on) 
	values('$u_id','$address','$city','$pincode','COD','$gtotal','Pending','Success','$added_on')");

	$res2 = mysqli_query($con,"select *from tbl_order order by id desc limit 1");
	$row2 = mysqli_fetch_assoc($res2);
	$order_id = $row2['id'];

	$sql3 = "select *from cart_details where u_id= $u_id";
	$res3 = mysqli_query($con,$sql);
	
	while($row3 = mysqli_fetch_assoc($res3))
	{
		$p_name = $row3['name']; 
		$qty = $row3['qty'];
		$mrp = $row3['mrp'];

	mysqli_query($con,"insert into order_detail(order_id, p_name, qty, mrp, added_on) 
	values('$order_id','$p_name','$qty','$mrp','$added_on')");
	}
	mysqli_query($con,"delete from cart_details where u_id = $u_id");
	header('location:thank_you.php?page=checkout.php');

}
	
	

?>
	
<div style="background-color:pink; margin-top:50px; height:300px; width:700px; margin-left:300px; margin-bottom:50px;">
<br>
<br>
<form action="" onsubmit="return validation()" method="POST" align="center">
<p><input type="text" name="address" id="address" placeholder="Address*" style="height:30px; width:200px; border:none;">
<span id="address_error" style="color:red"> </span><br><br>

<p><input type="text" name="city" id="city" placeholder="City*" style="height:30px; width:200px; border:none;">
<span id="city_error" style="color:red"> </span><br><br>

<p><input type="text" name="pincode" id="pincode" placeholder="Pincode*" style="height:30px; width:200px; border:none;">
<span id="pin_error" style="color:red"> </span><br><br>

<input type="submit" name="checkout" value="CHECKOUT" style="background-color:lightblue; height:30px; width:80px; border:none;">
</form>
   </div>     
<script type="text/javascript">
		

		function validation(){

	
		var address = document.getElementById('address').value;
		var city = document.getElementById('city').value;
		var pincode = document.getElementById('pincode').value;


			if(address == ""){
				document.getElementById('address_error').innerHTML =" ** Please Enter address";
				return false;
			}

			if(city == ""){
				document.getElementById('city_error').innerHTML =" ** Please Enter City";
				document.getElementById('address_error').innerHTML ="";
				return false;
			}
			
			if(pincode == ""){
				document.getElementById('pin_error').innerHTML =" ** Please Enter Pincode";
				document.getElementById('city_error').innerHTML ="";
				document.getElementById('address_error').innerHTML ="";

				return false;
			}


			
		}		

	</script>      

   

<?php
	
}
else
{
	echo "<br>Login First...";
}

?>

</body>

</html>

<?php require('footer.php'); ?>