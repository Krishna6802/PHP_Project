<!doctype html>
<html>
<head> 
   <title>Admin Login</title>  
</head>

<?php
require('top.php');

$msg = '';
if(isset($_POST['submit']))
{
	echo $username=$_POST['username'];
	echo $password=$_POST['password'];

	$sql = "select * from tbl_admin where username = '$username' and password = '$password'";
	$res = mysqli_query($con,$sql);
	$count = mysqli_num_rows($res);

	if ( $count > 0)
	{
		$_SESSION['ADMIN_LOGIN'] = 'yes';
		$_SESSION['ADMIN_USERNAME'] = $username;
		header('location:admin/categories.php');
		die();	
	}
	else
	{
		$msg = "Please Enter Correct Login details";
	}
}
?>

<!doctype html>

<html>
  
<head>
  
   <title>Login Page</title>
     
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

   
<body>
 
<div style="background-color:#243a6f ; height:80px; width:1349px;">
<br>
<h1 align="center" style="font-weight: 700; color:white; font-size:24px;">Admin Login</h1>
</div>

<div style="width:1349px; height:500px;">

<div style="width:600px; height:400px; float:left; margin-left:75px; margin-top:50px; margin-bottom:50px; box-shadow:10px 10px 10px #6495ED;">
<img src="login2.jpg" style="width:600px; height:400px;"> 
</div>

<div style="float:right; background-color:#243a6f ; color:white; height:400px; width:600px; margin-top:50px; margin-bottom:50px; margin-right:74px; box-shadow:10px 10px 10px 00px #6495ED;">               
<form method="post"  align="center">
   
<br>
<br> <br><br>                                        
<label>Username</label>                        
<input type="text" autocomplete="off" name="username" placeholder="Username*" required style="height:30px; width:200px; border:none; background-color:white; color:#243a6f;">
 <br> <br>                                         
<label>Password</label>                     
<input type="password" name="password" placeholder="Password*" required style="height:30px; width:200px; border:none; background-color:white; color:#243a6f;">
     
<br><br><br>                                 
<button type="submit" name="submit" style="background-color:white; color:#243a6f; height:30px; width:70px; border:none;">Sign in</button>
	

<div><?php echo $msg ?></div>				
</form>
</div>               

</div>

</body>

</html>

<?php require('footer.php'); ?>