
<!doctype html>

<html>
  
<head>
  
   <title>Buy Now Page</title>
       
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
		
		header('location:index.php');
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
		   <th>Grand_Total</th>		  

		</tr>
                     
            </thead>
                                 
	    <tbody>
<?php 

if(isset($_GET['operation']) && $_GET['operation']='checkout')
{

    $p_id = $_GET['p_id'];
    $qty = $_GET['qty'];

	$sql2 = "select *from product where id= $p_id";
	$res2 = mysqli_query($con,$sql2);

	while($row2=mysqli_fetch_assoc($res2))  
		{  ?>                                	
		   <tr>
                                      
		      <td> <img src="admin/media/products/<?php echo $row2['image'] ?>"  width="50" height="60"> </td>
		      <td> <?php echo $row2['name'] ?> </td>
		      <td> <?php echo $row2['mrp'] ?>  </td>
		      <td> <?php echo $qty ?>  </td>
		      <td> <?php $total = $row2['mrp'];
				 echo $total ?> </td>
	
		      <td> <?php echo "<a href='?type=delete&id=".$row2['id']."'>Delete</a>&nbsp"; ?> </td>
		      <td> <?php $gtotal = $row2['mrp'];
				 echo $gtotal ?> </td>
		<?php      	    
	  }  	
}
?>

</tr>		
		 </tbody>
                              
		</table>
   


<script type="text/javascript">

            function manage_total(){

		var qty = document.getElementById('quantity').value;
		var mrp = document.getElementById('mrp').value;

		document.getElementById("total").innerHTML = qty * mrp ;
		
		}		

	</script>                  		
  
<?php

if(isset($_POST['checkout']))
{
	$address = $_POST['address'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$added_on = date('y-m-d h:i:s');
	

	
	mysqli_query($con,"insert into tbl_order(u_id, address, city, pincode, payment_type, total_price, payment_status, order_status,added_on) 
	values('$u_id','$address','$city','$pincode','COD','$gtotal','Pending','Success','$added_on')");

	$res2 = mysqli_query($con,"select *from tbl_order");
	$row2 = mysqli_fetch_assoc($res2);
	$order_id = $row2['id'];


	$sql2 = "select *from product where id= $p_id";
	$res2 = mysqli_query($con,$sql2);

	while($row2=mysqli_fetch_assoc($res2))  
	{                             
		$p_name = $row2['name']; 
		$qty = $qty;
		$mrp = $row2['mrp'];
	

	mysqli_query($con,"insert into order_detail(order_id, p_name, qty, mrp, added_on) 
	values('$order_id','$p_name','$qty','$mrp','$added_on')");
	}
	mysqli_query($con,"delete from cart_details where u_id = $u_id");
	header('location:thank_you.php');

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
<?php	}
else
{
	echo "<br>Login First...";
}

ob_end_flush();
?>

</body>

</html>