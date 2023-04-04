<!doctype html>

<html>
  
<head>
  
   <title>doctor's Profile</title>
     
  
</head>


<?php
require('top.php');

if(isset($_SESSION['DOC_LOGIN']))
{
	$id =  $_SESSION['DOC_ID'];

//$sql = "select *from doctor where id = $id";
//$sql = "select doctor.*, doc_cate.categories from doctor, doc_cate where id = $id";
$sql = "select doctor.*, doc_cate.categories from doctor, doc_cate where doctor.doc_cate_id=doc_cate.doc_cate_id AND id = $id";
$res = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);

?>



   
<body>
 
		      <div style="background-color:pink; margin-top:50px; height:700px; width:800px; margin-left:300px; margin-bottom:50px;">
			<br>
			<br>
                       <span align="left">   
		      <p align="center"> <img src="../admin/media/doctors/<?php echo $row['image'] ?>"  width="150" height="170"> </td>   
		      <h1 align="center"> <?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?> </h1>                                                              
		      <h4 align="center">ID : <?php echo $row['id'] ?> </h4><br>
		      <h4 align="center">Email : <?php echo $row['email'] ?> </h4><br>
		      <h4 align="center">Contact No : <?php echo $row['mobile'] ?> </h4><br>
		      <h4 align="center">Gender : <?php echo $row['gender'] ?> </h4><br>
		      
		      <h4 align="center">Country : <?php echo $row['country'] ?> </h4><br>
		      <h4 align="center">State : <?php echo $row['state'] ?> </h4><br>
		      <h4 align="center">City : <?php echo $row['city'] ?> </h4><br>
		      <h4 align="center">Qualification : <?php echo $row['qualification'] ?> </h4><br>
		      <h4 align="center">Experience : <?php echo $row['experience'] ?> </h4><br>
		      <h4 align="center">Speciality : <?php echo $row['categories'] ?> </h4><br>
		      <h4 align="center">Fees : <?php echo $row['fees'] ?> </h4><br>
		      <h4 align="center">Date of Joining : <?php echo $row['added_on'] ?> </h4><br>
			</span>
			</div>

<!--*********************************************************************************************************************************************-->
<style>
.open-button {
  background-color: #243a6f;
  height: 40px;
  width: 150px;
  margin-left: 600px;
  border: none;
  cursor: pointer;
  color:white;
} 

.form-popup {
  display: none;
  background-color:lightblue;
  height:250px;
  width:500px;
 margin-left:420px;
}



.form-container {
  height:300px;
  width:500px;
  padding: 10px;
}

/* Add some hover effects to buttons */
.form-container .btn:hover {
  opacity: 1;
  color:rgba(0,0,180,0.7);
  background-color:rgba(255,255,255,0.8);
} 

</style>
<body bgcolor="blue">
<button class="open-button" onclick="openForm()">Change password</button><br><br>
 <div class="form-popup" id="myForm">
<div style="height:350px; width:500px;"> 
  <form action="" class="form-container" method="post" onsubmit="return validation()" align="center"><br>
<p id="pass_error" style="color:red"> </p>
<p id="cPass_error" style="color:red"> </p>
<br>
  	<input type="password" name="pass" id="pass" placeholder="New Password*" style="height:30px; width:200px; border:none;">
	<br><br>
	<input type="password" name="cPass" id="cPass" placeholder="Confirm Password*" style="height:30px; width:200px; border:none;">
	<br><br>
	<input type="submit" name="change" value="Change" style="background-color:#243a6f; color:white; height:30px; width:70px; border:none;"><br><br>
  	<button type="button" class="btn cancel" onclick="closeForm()" style="background-color:#243a6f; height:30px; width:70px; border:none; color:white;">Close</button><br><br>
	</form>
</div><br><br>
</div>

<script type="text/javascript">
		

		function validation(){

			var pass = document.getElementById('pass').value;
			var cPass = document.getElementById('cPass').value;

			if(pass == ""){
				document.getElementById('pass_error').innerHTML =" ** Password field should not be blank !!";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('pass_error').innerHTML =" ** Passwords lenght must be more than 5";
				return false;
			}
		
			if(pass!=cPass){
				document.getElementById('cPass_error').innerHTML =" ** Password does not match the confirm password";
				document.getElementById('pass_error').innerHTML ="";
				return false;
			}
		}
			

	</script>
	
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
} 
</script>
<?php

if(isset($_POST['change']))
{
  $pass = $_POST['pass'];
  $name = $_SESSION['DOC_NAME'];
  $id = $_SESSION['DOC_ID'];
  $res = mysqli_query($con,"update doctor set password='$pass' where firstname='$name' AND id=$id");
}

		                     		
 }
else
{
	echo "<br>Login First...";
} ?>            

</body>

</html>
<?php
require('footer.php');
?>