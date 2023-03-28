<!doctype html>
<html>
<head> 
   <title>Patient Registration Page</title>  
</head>

<?php
require ('top.php');

if(isset($_POST['register']))
{
  $name=trim($_POST['p_name']);
  $email=$_POST['p_email'];
  $password=$_POST['p_password'];
  $mobile=$_POST['p_mobile'];
  $address=$_POST['p_address'];
  $gender=$_POST['p_gender'];
  $dob=$_POST['p_dob'];
   
  $check_user=mysqli_num_rows(mysqli_query($con,"select *from patients where p_email='$email'"));
  if($check_user > 0)
  {
	echo "Email already exist";
  }
  else
  {

	$added_on=date('y-m-d H:i:s');

   mysqli_query($con,"INSERT INTO `patients`( `p_name`, `p_email`, `p_password`, `p_mobile`, `p_address`, `p_gender`, `p_dob`, `added_on`) 
VALUES ('$name','$email','$password','$mobile','$address','$gender','$dob','$added_on')");
  // check the date!!
	header('location:patient_login.php');

  }
}
?>

<div style="background-color:#243a6f ; height:80px; width:1349px;">
<br>
<h1 align="center" style="font-weight: 700; color:white;">Patient Registration</h1>
</div>

<div style="background-color:pink; margin-top:50px; height:650px; width:800px; margin-left:300px; margin-bottom:50px;">
<br>
<br>

<h1 align="center"><a href="patient_login.php">LOGIN</a> | REGISTER</h1>
<br>
<br>

<br><br>
<form action="" method="post" onsubmit="return validation()" align="center">

<input type="text" name="p_name" id="name" placeholder="Your Name*" style="height:30px; width:200px; border:none;">
<span id="name_error" style="color:red"> </span><br><br>

<input type="email" name="p_email" id="email" placeholder="Email*" autocomplete="off" style="height:30px; width:200px; border:none;">
<span id="email_error" style="color:red"> </span><br><br>

<input type="password" name="p_password" id="password" placeholder="Password*" style="height:30px; width:200px; border:none;">
<span id="password_error" style="color:red"> </span><br><br>

<input type="password" name="p_conpass" id="conpass" placeholder="Confirm Password*" autocomplete="off" style="height:30px; width:200px; border:none;">
<span id="conpass_error" style="color:red"> </span><br><br>

<input type="text" name="p_mobile" id="mobile" placeholder="Contact No*" style="height:30px; width:200px; border:none;">
<span id="mobile_error" style="color:red"> </span><br><br>

<textarea name="p_address" id="address" placeholder="Address*" style="height:30px; width:200px; border:none;"></textarea>
<span id="paddress_error" style="color:red"> </span><br><br>

<select id="gender" name="p_gender" style="height:30px; width:200px; border:none;">
<option>Select Gender</option>
<option>Male</option>
<option>Female</option>
</select>
<span id="gender_error" style="color:red"> </span><br><br>

<p style="font-weight:700">** Date of Birth **</p>
<br>
<input type="date" name="p_dob" id="dob" placeholder="Date of Birth*" style="height:30px; width:200px; border:none;">
<span id="dob_error" style="color:red"> </span><br><br>

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
			var password = document.getElementById('password').value;
			var conpass = document.getElementById('conpass').value;
			var mobile = document.getElementById('mobile').value;
			var address = document.getElementById('address').value;
			var gender = document.getElementById('gender').value;
			var dob = document.getElementById('dob').value;
			var address = document.getElementById('address').value;
			var gender = document.getElementById('gender').value;
			var dob = document.getElementById('dob').value;	


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


			if(password == ""){
				document.getElementById('password_error').innerHTML =" ** Please Enter Password";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				return false;
			}
			if((password.length <= 5) || (password.length > 20)) {
				document.getElementById('password_error').innerHTML =" ** Passwords lenght must be more than 6";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				return false;	
			}   


			if(password!=conpass){
				document.getElementById('conpass_error').innerHTML =" ** Password does not match the confirm password";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				return false;
			}



			if(conpass == ""){
				document.getElementById('conpass_error').innerHTML =" ** Please fill the confirmpassword field";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				return false;
			}

			

			
			if(mobile == ""){
				document.getElementById('mobile_error').innerHTML =" ** Please Enter Your Contact No";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}
			if(isNaN(mobile)){
				document.getElementById('mobile_error').innerHTML =" ** Only Digits allowd";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}
			if(mobile.length!=10){
				document.getElementById('mobile_error').innerHTML =" ** Contact Number must be of 10 digits only";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}

			if(address == ""){
				document.getElementById('paddress_error').innerHTML =" ** Please Enter Patiet's address";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}



			if(gender == "Select Gender"){
				document.getElementById('gender_error').innerHTML =" ** Please Select Gender";
				document.getElementById('paddress_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}

			if(dob == ""){
				document.getElementById('dob_error').innerHTML =" ** Please Enter Your Date of Birth";
				document.getElementById('gender_error').innerHTML ="";
				document.getElementById('paddress_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('name_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";

				return false;
			}

			
			
		}

			


			

	</script>