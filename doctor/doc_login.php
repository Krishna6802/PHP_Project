<!DOCTYPE html>

<html>


<head>
  <title>Doctor Login Page</title>

</head>
<?php
date_default_timezone_set('UTC'); 
require ('top.php');


$page = $_GET['page'];
$error='';

if(isset($_POST['login']))
{
  $login = $_POST['login_info'];
  $password = $_POST['password'];

  $res1 = mysqli_query($con,"select *from doctor where email='$login' and password='$password'");
  $check_email = mysqli_num_rows($res1);
  $res2 = mysqli_query($con,"select *from doctor where mobile='$login' and password='$password'");
  $check_mobile = mysqli_num_rows($res2);

  if($check_email == 1 )
  {
	$row=mysqli_fetch_assoc($res1);
	$_SESSION['DOC_LOGIN'] = 'yes';
	$_SESSION['DOC_ID'] = $row['id'];
	$_SESSION['DOC_NAME'] = $row['firstname'];
	header('location:docProfile.php');
	die();
  }
  
  else if($check_mobile == 1)
  {
	$row=mysqli_fetch_assoc($res2);
	$_SESSION['DOC_LOGIN'] = 'yes';
	$_SESSION['DOC_ID'] = $row['id'];
	$_SESSION['DOC_NAME'] = $row['firstname'];
	header('location:docProfile.php');
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
<h1 align="center" style="font-weight: 700; color:white;">Doctor Login</h1>
</div>


<div style="background-color:pink; margin-top:50px; height:300px; width:800px; margin-left:300px; margin-bottom:50px;">
<br>
<br>
<h1 align="center">LOGIN<a href="doc_reg.php?page=<?php echo $page; ?>" align="center"> | REGISTER</a></h1>
<br><br>
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
<?php if(isset($error)) echo $error; ?><h4> Don't have account?? <a href="doc_reg.php">SignUp/Register</a></h4>

</form>
</div>

<script type="text/javascript">
		

		function validation(){

			var login_info = document.getElementById('login_info').value;
			var password = document.getElementById('password').value;

			if(login_info == ""){
				document.getElementById('login_error').innerHTML =" ** Please Enter Username or email-id or mobile number";
				return false;
			}
	
			
			if(password == ""){
				document.getElementById('password_error').innerHTML =" ** Please fill the password field";
				document.getElementById('login_error').innerHTML ="";
				return false;
			}
	
		}
			

	</script>

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


	<a href="index.php"><button type="button" class="b1">BACK</button></a></div>
<?php 
require('footer.php');
?>

