<!DOCTYPE html>

<html>


<head>
  <title>Doctor Registration Page</title>

</head>

<?php
date_default_timezone_set('UTC'); 
require ('top.php');

$page = $_GET['page'];

$image = '';
$image_required = 'required';

?>

<?php

 
if(isset($_POST['register']))
{
  $firstname=trim($_POST['firstname']);
  $lastname=trim($_POST['lastname']);
  $email=$_POST['email'];
  $password=$_POST['password'];
  $mobile=$_POST['mobile'];
  $h_name=$_POST['h_name'];
  $h_address=$_POST['h_address'];
  $gender=$_POST['gender'];
 // $image=$_POST['image'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $qualification=$_POST['qualification'];
  $experience=$_POST['experience'];
  $doc_cate_id=$_POST['speciality'];
  $fees=$_POST['fees'];


	
  $res = mysqli_query($con,"SELECT MAX(id) FROM doctor");
  $row = mysqli_fetch_row($res);
  $maxid = $row[0];

 
  $check_email=mysqli_num_rows(mysqli_query($con,"select *from doctor where email='$email'"));
  $check_no=mysqli_num_rows(mysqli_query($con,"select *from doctor where mobile='$mobile'"));
  if($check_email > 0)
  {
	echo "Email already exist";
  }
  else if($check_email > 0)
  {
	echo "Invalid Contact No. Please Check !!";
  }
  else
  {
	
	$added_on=date('y-m-d H:i:s');

     if($_FILES['image']['type'] != '' && ($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'))
	{
		$msg = "Please select only png,jpg and jpeg image format";
	}
	
	    $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
	    move_uploaded_file($_FILES['image']['tmp_name'],'../admin/media/doctors/'.$image);		

           mysqli_query($con,"insert into doctor(id,firstname,lastname,email,password,mobile,h_name,h_address,gender,image,country,state,city,qualification,experience,doc_cate_id,fees,added_on,status) values($maxid + 1,'$firstname','$lastname','$email','$password','$mobile','$h_name','$h_address','$gender','$image','$country','$state','$city','$qualification','$experience','$doc_cate_id','$fees','$added_on',1)");
 	    // check the date!!
	    header('location:login.php');

  }
}

	

?>

<div style="background-color:#243a6f ; height:80px; width:1349px;">
<br>
<h1 align="center" style="font-weight: 700; color:white;">Doctor Registration</h1>
</div>


<div style="background-color:pink; margin-top:50px; height:1100px; width:800px; margin-left:300px; margin-bottom:50px;">
<br>
<br>
<h1 align="center"><a href="doc_login.php?page=<?php echo $page; ?>">LOGIN</a> | REGISTER</h1>


<h2  align="center">JOIN US</h2>
<h3  align="center">Not a doctor?<a href="register.php">Register here</a></h3><br>

<br><br><br>
<form action="" method="post" onsubmit="return validation()" enctype="multipart/form-data" align="center">
<p id="fname_error" style="color:red"> </p>
<p id="lname_error" style="color:red"> </p>
<p id="email_error" style="color:red"> </p>
<p id="password_error" style="color:red"> </p>
<p id="conpass_error" style="color:red"> </p>
<p id="mobile_error" style="color:red"> </p>
<p id="hname_error" style="color:red"> </p>
<p id="haddress_error" style="color:red"> </p>
<p id="gender_error" style="color:red"> </p>
<p id="image_error" style="color:red"> </p>
<p id="country_error" style="color:red"> </p>
<p id="state_error" style="color:red"> </p>
<p id="city_error" style="color:red"> </p>
<p id="q_error" style="color:red"> </p>
<p id="e_error" style="color:red"> </p>
<p id="s_error" style="color:red"> </p>
<p id="fees_error" style="color:red"> </p>

<input type="text" name="firstname" id="fname" placeholder="First Name*" style="height:30px; width:200px; border:none;">
<br><br>
<input type="text" name="lastname" id="lname" placeholder="Last Name*" style="height:30px; width:200px; border:none;">
<br><br>

<input type="email" name="email" id="email" placeholder="Email*" autocomplete="off" style="height:30px; width:200px; border:none;">
 <br><br>

<input type="password" name="password" id="password" placeholder="Password*" style="height:30px; width:200px; border:none;">
<br><br>

<input type="password" name="conpass" id="conpass" placeholder="Confirm Password*" autocomplete="off" style="height:30px; width:200px; border:none;">
<br><br>

<input type="text" name="mobile" id="mobile" placeholder="Contact No*" style="height:30px; width:200px; border:none;">
<br><br>

<input type="text" name="h_name" id="h_name" placeholder="Hospital/Clinic Name*" style="height:30px; width:200px; border:none;">
<br><br>

<input type="text" name="h_address" id="h_address" placeholder="Hospital/Clinic Address*" style="height:30px; width:200px; border:none;">
<br><br>


<select id="gender" name="gender" style="height:30px; width:200px; border:none;">
<option>Select Gender</option>
<option>Male</option>
<option>Female</option>
</select>
<br><br>

<h3 style="float:left; margin-left:300px;">Image</h3><input type="file" name="image" id="image" style="float:left; margin-left:50px;">	
<br><br>

<select id="country" name="country" style="height:30px; width:200px; border:none;">
<option>Select Country</option>
<option>India</option>
<option>USA</option>
</select>
<br><br>

<select id="state" name="state" style="height:30px; width:200px; border:none;">
<option>Select State</option>
<option>GUJARAT</option>
<option>RAJASTHAN</option>
</select>
<br><br>

<select id="city" name="city" style="height:30px; width:200px; border:none;">
<option>Select City</option>
<option>Rajkot</option>
<option>Jamnagar</option>
</select>
<br><br>

<input type="text" name="qualification" id="qualification" placeholder="Qualification*" style="height:30px; width:200px; border:none;">
<br><br>

<input type="number" name="experience" id="experience" placeholder="Years Of Experience*" style="height:30px; width:200px; border:none;">
<br><br>

<select name="speciality" id="speciality" style="height:30px; width:200px; border:none;">
			<option>Select Speciality</option>
			<?php
			    $res=mysqli_query($con,"select doc_cate_id, categories from doc_cate order by categories");
			    while($row=mysqli_fetch_assoc($res))
			    {
				if($row['doc_cate_id']==$doc_cate_id)
				{
					echo "<option selected value=".$row['doc_cate_id'].">".$row['categories']."</option>";
				}
				else
				{
					echo "<option value=".$row['doc_cate_id'].">".$row['categories']."</option>";
				}
			    }
			?>
		    </select>
<br><br>

<input type="text" name="fees" id="fees" placeholder="Consultation Fees*" style="height:30px; width:200px; border:none;">
<br><br>

<input type="submit" value="REGISTER" name="register" style="background-color:lightblue; height:30px; width:70px; border:none;">

</form>
</div>

<script type="text/javascript">
		

		function validation(){

			var fname = document.getElementById('fname').value;
			var lname = document.getElementById('lname').value;
			var email = document.getElementById('email').value;
			var password = document.getElementById('password').value;
			var conpass = document.getElementById('conpass').value;
			var mobile = document.getElementById('mobile').value;
			var h_name = document.getElementById('h_name').value;
			var h_address = document.getElementById('h_address').value;
			var gender = document.getElementById('gender').value;	
			var image = document.getElementById('image').value;			
			var country = document.getElementById('country').value;			
			var state = document.getElementById('state').value;			
			var city = document.getElementById('city').value;
			var qualification = document.getElementById('qualification').value;
			var experience = document.getElementById('experience').value;
			var speciality = document.getElementById('speciality').value;
			var fees = document.getElementById('fees').value;			


			if(fname == ""){
				document.getElementById('fname_error').innerHTML =" ** Please Enter Your First Name";
				return false;
			}
			if(!isNaN(fname)){
				document.getElementById('fname_error').innerHTML =" ** only characters are allowed";
				return false;
			}
			if(lname == ""){
				document.getElementById('lname_error').innerHTML =" ** Please Enter Last Your Name";
				document.getElementById('fname_error').innerHTML ="";
				return false;
			}
			if(!isNaN(lname)){
				document.getElementById('lname_error').innerHTML =" ** only characters are allowed";
				document.getElementById('fname_error').innerHTML ="";
				return false;
			}
			



			if(email == ""){
				document.getElementById('email_error').innerHTML =" ** Please Enter Your Email-ID";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				return false;
			}
			if(email.indexOf('@') <= 0 ){
				document.getElementById('email_error').innerHTML =" ** Invalid Email-ID";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				return false;
			}

			if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
				document.getElementById('email_error').innerHTML =" ** Ivalid Email-ID";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				return false;
			}

			
			if(password == ""){
				document.getElementById('password_error').innerHTML =" ** Please Enter Password";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				return false;
			}
			if((password.length <= 5) || (password.length > 20)) {
				document.getElementById('password_error').innerHTML =" ** Passwords lenght must be more than 6";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				return false;	
			}   


			if(password!=conpass){
				document.getElementById('conpass_error').innerHTML =" ** Password does not match the confirm password";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				return false;
			}



			if(conpass == ""){
				document.getElementById('conpass_error').innerHTML =" ** Please fill the confirmpassword field";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				return false;
			}			


			if(mobile == ""){
				document.getElementById('mobile_error').innerHTML =" ** Please Enter Your Contact No";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}
			if(isNaN(mobile)){
				document.getElementById('mobile_error').innerHTML =" ** Only Digits allowd";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}
			if(mobile.length!=10){
				document.getElementById('mobile_error').innerHTML =" ** Contact Number must be of 10 digits only";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}


			if(h_name == ""){
				document.getElementById('hname_error').innerHTML =" ** Please Enter hospital or clinic name";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}
			

			if(h_address == ""){
				document.getElementById('haddress_error').innerHTML =" ** Please Enter hospital or clinic address";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}



			if(gender == "Select Gender"){
				document.getElementById('gender_error').innerHTML =" ** Please Select Gender";
				document.getElementById('haddress_error').innerHTML ="";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}

			if(image == ""){
				document.getElementById('image_error').innerHTML =" ** Please Choose image";
				document.getElementById('gender_error').innerHTML ="";
				document.getElementById('haddress_error').innerHTML ="";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}

			if(country == "Select Country"){
				document.getElementById('country_error').innerHTML =" ** Please Select Country";
				document.getElementById('image_error').innerHTML ="";
				document.getElementById('gender_error').innerHTML ="";
				document.getElementById('haddress_error').innerHTML ="";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}

			if(state == "Select State"){
				document.getElementById('state_error').innerHTML =" ** Please Select State";
				document.getElementById('country_error').innerHTML ="";
				document.getElementById('image_error').innerHTML ="";
				document.getElementById('gender_error').innerHTML ="";
				document.getElementById('haddress_error').innerHTML ="";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}

			if(city == "Select City"){
				document.getElementById('city_error').innerHTML =" ** Please Select city";
				document.getElementById('state_error').innerHTML ="";
				document.getElementById('country_error').innerHTML ="";
				document.getElementById('image_error').innerHTML ="";
				document.getElementById('gender_error').innerHTML ="";
				document.getElementById('haddress_error').innerHTML ="";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}

			
			if(qualification == ""){
				document.getElementById('q_error').innerHTML =" ** Please Enter Your qualification";
				document.getElementById('city_error').innerHTML ="";
				document.getElementById('state_error').innerHTML ="";
				document.getElementById('country_error').innerHTML ="";
				document.getElementById('image_error').innerHTML ="";
				document.getElementById('gender_error').innerHTML ="";
				document.getElementById('haddress_error').innerHTML ="";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;

			}

			if(experience == ""){
				document.getElementById('e_error').innerHTML =" ** Please Enter Your Years Of experience";
				document.getElementById('q_error').innerHTML ="";
				document.getElementById('city_error').innerHTML ="";
				document.getElementById('state_error').innerHTML ="";
				document.getElementById('country_error').innerHTML ="";
				document.getElementById('image_error').innerHTML ="";
				document.getElementById('gender_error').innerHTML ="";
				document.getElementById('haddress_error').innerHTML ="";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}
			if(isNaN(experience)){
				document.getElementById('e_error').innerHTML =" ** only Numbers are allowed";
				document.getElementById('q_error').innerHTML ="";
				document.getElementById('city_error').innerHTML ="";
				document.getElementById('state_error').innerHTML ="";
				document.getElementById('country_error').innerHTML ="";
				document.getElementById('image_error').innerHTML ="";
				document.getElementById('gender_error').innerHTML ="";
				document.getElementById('haddress_error').innerHTML ="";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}

			if(speciality == "Select Speciality"){
				document.getElementById('s_error').innerHTML =" ** Please Enter Your qualification";
				document.getElementById('e_error').innerHTML ="";
				document.getElementById('q_error').innerHTML ="";
				document.getElementById('city_error').innerHTML ="";
				document.getElementById('state_error').innerHTML ="";
				document.getElementById('country_error').innerHTML ="";
				document.getElementById('image_error').innerHTML ="";
				document.getElementById('gender_error').innerHTML ="";
				document.getElementById('haddress_error').innerHTML ="";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";
				return false;
			}


			if(fees == ""){
				document.getElementById('fees_error').innerHTML =" ** Please Enter Your consultation fees";
				document.getElementById('e_error').innerHTML ="";
				document.getElementById('q_error').innerHTML ="";
				document.getElementById('city_error').innerHTML ="";
				document.getElementById('state_error').innerHTML ="";
				document.getElementById('country_error').innerHTML ="";
				document.getElementById('image_error').innerHTML ="";
				document.getElementById('gender_error').innerHTML ="";
				document.getElementById('haddress_error').innerHTML ="";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";

				return false;
			}
			if(isNaN(fees)){
				document.getElementById('fees_error').innerHTML =" ** only numbers are allowed";
				document.getElementById('e_error').innerHTML ="";
				document.getElementById('q_error').innerHTML ="";
				document.getElementById('city_error').innerHTML ="";
				document.getElementById('state_error').innerHTML ="";
				document.getElementById('country_error').innerHTML ="";
				document.getElementById('image_error').innerHTML ="";
				document.getElementById('gender_error').innerHTML ="";
				document.getElementById('haddress_error').innerHTML ="";
				document.getElementById('hname_error').innerHTML ="";
				document.getElementById('mobile_error').innerHTML ="";
				document.getElementById('lname_error').innerHTML ="";
				document.getElementById('fname_error').innerHTML ="";
				document.getElementById('email_error').innerHTML ="";
				document.getElementById('password_error').innerHTML ="";
				document.getElementById('conpass_error').innerHTML ="";

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