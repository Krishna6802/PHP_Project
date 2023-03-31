<!doctype html>
<html>
<head> 
   <title>Registration Page</title>  
</head>

<?php 
require ('top.php');
$page = $_GET['page'];

if(isset($_POST['register']))
{
  $name=trim($_POST['name']);
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $res = mysqli_query($con,"SELECT MAX(id) FROM users");
  $row = mysqli_fetch_row($res);
  $maxid = $row[0];

 
  $check_user=mysqli_num_rows(mysqli_query($con,"select *from users where email='$email'"));
  if($check_user > 0)
  {
	echo "Email already exist";
  }
  else
  {
	$added_on=date('y-m-d H:i:s');

   mysqli_query($con,"insert into users(id,name,email,mobile,password,added_on) values($maxid + 1,'$name','$email','$mobile','$password','$added_on')");
  // check the date!!
	header('location:login.php?page=<?php echo $page; ?>');

  }
}
?>

<?php

 

	

?>

<div style="background-color:#243a6f ; height:80px; width:1349px;">
<br>
<h1 align="center" style="font-weight: 700; color:white;">User Registration</h1>
</div>

<div style="background-color:pink; margin-top:50px; height:600px; width:800px; margin-left:300px; margin-bottom:50px;">
<br>
<br>
<h1 align="center"><a href="login.php?page=<?php echo $page; ?>">LOGIN</a> | REGISTER</h1>
<br>

<h2 align="center">JOIN US</h2>
<br>
<h3 align="center">Are you a doctor?<a href="doc_reg.php" style="background-color:hotpink; padding:10px;">Register here</a></h3><br>

<br><br>
<form action="" method="post" onsubmit="return validation()" align="center">
<p id="name_error" style="color:red"> </p>
<p id="email_error" style="color:red"> </p>
<p id="mobile_error" style="color:red"> </p>
<p id="password_error" style="color:red"> </p>
<p id="conpass_error" style="color:red"> </p>

<input type="text" name="name" id="name" placeholder="Your Name*" style="height:30px; width:200px; border:none;">
<br><br>

<input type="email" name="email" id="email" placeholder="Email*" autocomplete="off" style="height:30px; width:200px; border:none;">
<br><br>

<input type="text" name="mobile" id="mobile" placeholder="Contact No*" style="height:30px; width:200px; border:none;">
<br><br>

<input type="password" name="password" id="password" placeholder="Password*" style="height:30px; width:200px; border:none;">
<br><br>

<input type="password" name="conpass" id="conpass" placeholder="Confirm Password*" autocomplete="off" style="height:30px; width:200px; border:none;">
<br><br>

<input type="submit" value="REGISTER" name="register" style="background-color:lightblue; height:30px; width:70px; border:none;">

</form>
</div>

<?php
require('footer.php');
?>

<script type="text/javascript">
		

		function validation(){

			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var mobile = document.getElementById('mobile').value;
			var password = document.getElementById('password').value;
			var conpass = document.getElementById('conpass').value;
			




			if(name == ""){
				document.getElementById('name_error').innerHTML =" ** Please Enter Your Name";
				return false;
			}
			if(!isNaN(name)){
				document.getElementById('name_error').innerHTML =" ** only characters are allowed";
				return false;
			}



			if(email == ""){
				document.getElementById('email_error').innerHTML =" ** Please Enter Your Email-ID";
				document.getElementById('name_error').innerHTML ="";
				
				return false;
			}
			if(email.indexOf('@') <= 0 ){
				document.getElementById('email_error').innerHTML =" ** Invalid Email-ID";
				document.getElementById('name_error').innerHTML ="";
				
				return false;
			}

			if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
				document.getElementById('email_error').innerHTML =" ** Ivalid Email-ID";
				document.getElementById('name_error').innerHTML ="";
				
				return false;
			}

			
			if(mobile == ""){
				document.getElementById('mobile_error').innerHTML =" ** Please Enter Your Contact No";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				return false;
			}
			if(isNaN(mobile)){
				document.getElementById('mobile_error').innerHTML =" ** Only Digits allowd";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				return false;
			}
			if(mobile.length!=10){
				document.getElementById('mobile_error').innerHTML =" ** Contact Number must be of 10 digits only";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				return false;
			}

			
			if(password == ""){
				document.getElementById('password_error').innerHTML =" ** Please Enter Password";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				return false;
			}
			if((password.length <= 5) || (password.length > 20)) {
				document.getElementById('password_error').innerHTML =" ** Passwords lenght must be more than 6";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				return false;	
			}   


			if(password!=conpass){
				document.getElementById('conpass_error').innerHTML =" ** Password does not match the confirm password";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				return false;
			}



			if(conpass == ""){
				document.getElementById('conpass_error').innerHTML =" ** Please fill the confirmpassword field";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				return false;
			}


		}

			


			

	</script>