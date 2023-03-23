<!doctype html>
<html>
<head> 
   <title>Patient_login Page</title>  
</head>

<?php
date_default_timezone_set('UTC'); 
require ('top.php');

if(isset($_POST['login']))
{
  $login = $_POST['login_info'];
  $password = $_POST['password'];

  $res1 = mysqli_query($con,"select *from patients where p_email='$login' and p_password='$password'");
  $check_id = mysqli_num_rows($res1);
  $res2 = mysqli_query($con,"select *from patients where p_mobile='$login' and p_password='$password'");
  $check_mobile = mysqli_num_rows($res2);

  if($check_id == 1 )
  {
	unset($_SESSION['USER_LOGIN']);
        unset($_SESSION['USER_ID']);
	unset($_SESSION['USER_NAME']);

	$row=mysqli_fetch_assoc($res1);
	$_SESSION['PATIENT_LOGIN'] = 'yes';
	$_SESSION['PATIENT_ID'] = $row['p_id'];
	$_SESSION['PATIENT_NAME'] = $row['p_name'];
	header('location:index.php');
	die();
  }
  
  else if($check_mobile == 1)
  {
	unset($_SESSION['USER_LOGIN']);
        unset($_SESSION['USER_ID']);
	unset($_SESSION['USER_NAME']);

	$row=mysqli_fetch_assoc($res2);
	$_SESSION['PATIENT_LOGIN'] = 'yes';
	$_SESSION['PATIENT_ID'] = $row['p_id'];
	$_SESSION['PATIENT_NAME'] = $row['p_name'];
	header('location:index.php');
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
<h1 align="center" style="font-weight: 700; color:white;">Patient Login</h1>
</div>

<div style="background-color:pink; margin-top:50px; height:350px; width:800px; margin-left:300px; margin-bottom:50px;">
<br>
<br>
<h1 align="center">LOGIN<a href="patient_reg.php" align="center"> | REGISTER</a></h1>

<form action="" method="post" onsubmit="return validation()" align="center">
<br>
<p id="login_error" style="color:red"> </p>
<p id="password_error" style="color:red;"></p>
<br>
<input type="text" name="login_info" id="login_info" placeholder="Email-Id or Contact No*" align="center" style="height:30px; width:200px; border:none;">
<br><br>

<input type="password" name="password" id="password" placeholder="Password*" align="center" align="center" style="height:30px; width:200px; border:none;">
 <br><br>

<input type="submit" value="LOGIN" name="login" style="background-color:lightblue; height:30px; width:70px; border:none;">
<br><br>
<?php if(isset($error)) echo $error; ?><h4> Don't have account?? <a href="patient_reg.php">SignUp/Register</a></h4>

</form>
</div>

<script type="text/javascript">
		

		function validation(){

			var login_info = document.getElementById('login_info').value;
			var password = document.getElementById('password').value;

			if(login_info == ""){
				document.getElementById('login_error').innerHTML =" ** Please Enter email_id or mobile number";
				return false;
			}
	
			
			if(password == ""){
				document.getElementById('password_error').innerHTML =" ** Please fill the password field";
				document.getElementById('login_error').innerHTML ="";
				return false;
			}
	
		}
			

	</script>


<?php
require('footer.php');
?>

