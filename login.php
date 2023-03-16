<!doctype html>
<html>
<head> 
   <title>Login Page</title>  
</head>

<?php
require ('top.php');

$error='';
$page = $_GET['page'];

if(isset($_POST['login']))
{
  $login = $_POST['login_info'];
  $password = $_POST['password'];

  $res1 = mysqli_query($con,"select *from users where email='$login' and password='$password'");
  $check_email = mysqli_num_rows($res1);
  $res2 = mysqli_query($con,"select *from users where mobile='$login' and password='$password'");
  $check_mobile = mysqli_num_rows($res2);

  if($check_email == 1 )
  {
	unset($_SESSION['PATIENT_LOGIN']);
	unset($_SESSION['PATIENT_ID']);
	unset($_SESSION['PATIENT_NAME']);	

	$row=mysqli_fetch_assoc($res1);
	$_SESSION['USER_LOGIN'] = 'yes';
	$_SESSION['USER_ID'] = $row['id'];
	$_SESSION['USER_NAME'] = $row['name'];
	if($page=="cart.php")
	{
		header('location:cart.php');
	}
	else if($page=="index_pro")
	{
		header('location:index.php#pro');
	}
	else if($page=="dis_products.php")
	{
		header('location:dis_products.php?page=');
	}
	else if($page=="products.php")
	{
		$p_id=$_GET['p_id'];
		header('location:product.php?p_id='.$p_id.'&page='.$page);
	}
	else if($page=="categories.php")
	{
		$cat_id=$_GET['cat_id'];
		header('location:categories.php?id='.$cat_id.'&page='.$page);
	}
	else
	{
		header('location:index.php');
	}
	die();
  }
  
  else if($check_mobile == 1)
  {
	unset($_SESSION['PATIENT_LOGIN']);
	unset($_SESSION['PATIENT_ID']);
	unset($_SESSION['PATIENT_NAME']);	

	$row=mysqli_fetch_assoc($res2);
	$_SESSION['USER_LOGIN'] = 'yes';
	$_SESSION['USER_ID'] = $row['id'];
	$_SESSION['USER_NAME'] = $row['name'];
	if($page=="cart.php")
	{
		header('location:cart.php');
	}
	else if($page=="index_pro")
	{
		header('location:index.php#pro');
	}
	else if($page=="dis_products.php")
	{
		header('location:dis_products.php');
	}
	else if($page=="products.php")
	{
		$p_id=$_GET['p_id'];
		header('location:product.php?p_id='.$p_id);
	}
	else
	{
		header('location:index.php');
	}
	die();
  } 
  else
  {
	$error = "<p style='color:red'>Incorrect login information !! Try again...</p><br>";
  }
}
?>

<div style="background-color:#243a6f ; height:80px; width:1349px;">
<br>
<h1 align="center" style="font-weight: 700; color:white;">User Login</h1>
</div>

<div style="background-color:pink; margin-top:50px; height:350px; width:800px; margin-left:300px; margin-bottom:50px;">
<br>
<br>
<h1 align="center">LOGIN | <a href="register.php?page=<?php echo $page; ?>">REGISTER</a></h1>
<br>
<br>

<form action="" method="post" onsubmit="return validation()" align="center">
<p id="login_error" style="color:red"> </p>
<p id="password_error" style="color:red"> </p>


<input type="text" name="login_info" id="login_info" placeholder="Email-Id or Contact No*" style="height:30px; width:200px; border:none;">
<br><br>

<input type="password" name="password" id="password" placeholder="Password*" style="height:30px; width:200px; border:none;">
<br><br>

<input type="submit" value="LOGIN" name="login" style="background-color:lightblue; height:30px; width:70px; border:none;">
<br>
<br>
<?php if(isset($error)) echo $error; ?><h4> Don't have account?? <a href="register.php?page=<?php echo $page; ?>">SignUp/Register</a></h4>

</form>
</div>
<script type="text/javascript">
		

		function validation(){

			var login_info = document.getElementById('login_info').value;
			var password = document.getElementById('password').value;

			if(login_info == ""){
				document.getElementById('login_error').innerHTML =" ** Please Enter email-id or mobile number";
				return false;
			}
	
			
			if(password == ""){
				document.getElementById('password_error').innerHTML =" ** Please fill the password field";
				document.getElementById('login_error').innerHTML ="";
				return false;
			}
	
		}
			

	</script>

</html>


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
if($page=="cart.php")
{  ?>
	<a href="insert_cart.php?page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a></div>
<?php 
}
else if($page=="index_pro")
{ ?>
	<a href="insert_cart.php?page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a></div>
<?php 
}
else if($page=="dis_products.php")
{ ?>
	<a href="insert_cart.php?page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a></div>
<?php 
}
else if($page=="product.php")
{
$p_id=$_GET['p_id'];	
 ?>
	<a href="insert_cart.php?p_id=<?php echo $p_id; ?>&page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a></div>
<?php 
}
else if($page=="categories.php")
{ 
$cat_id=$_GET['cat_id'];
?>
	<a href="categories.php?id=<?php echo $cat_id; ?>&page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a></div>
<?php 
}
else
{ ?>
	<a href="index.php?page=<?php echo $page; ?>"><button type="button" class="b1">BACK</button></a></div>
<?php 
}
require('footer.php');
?>

  