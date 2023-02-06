<!doctype html>
<html>
<head> 
   <title>Appointment Page</title>  
</head>

<?php
require ('top.php');


    if(isset($_SESSION['PATIENT_LOGIN']))
    {
	 
	$p_id = $_SESSION['PATIENT_ID'];
    	
	
	if(isset($_GET['setTime']))
	{	   
	   $time = $_GET['time'];
	   $date = $_GET['a_date'];
	   $d_id = $_GET['d_id'];

	   $res = mysqli_query($con,"select *from patients where p_id = $p_id");
	   $row = mysqli_fetch_assoc($res);

	 
	
	
	  $res2 = mysqli_query($con,"SELECT * FROM `doctor` WHERE id = $d_id");
	   $row2 = mysqli_fetch_assoc($res2); 

	  

	   $a_date = $date;
	   $a_time = $time;

	 if(isset($_POST['book']))
	{
		$p_name= $_POST['p_name'];
		$p_mobile = $_POST['p_mobile'];
		$p_address = $_POST['p_address'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$a_date = $_POST['a_date'];
		$a_time = $_POST['a_time'];
		$reason = $_POST['reason'];
		$added_on=date('y-m-d H:i:s');

	
		mysqli_query($con,"INSERT INTO `appointment`( `p_name`, `p_mobile`, `p_address`, `firstname`, `lastname`, `a_date`, `a_time`, `reason`, `added_on`, `status`) 
		VALUES ('$p_name','$p_mobile','$p_address','$firstname','$lastname','$a_date','$a_time','$reason','$added_on','Pending')");

		header('location:thank_you.php?page=appointment.php');
	}
	   
	

?>	
   <div style="height:700px; width:600px;  margin-top:80px; margin-left:400px; margin-bottom:80px; background-color:pink; font-family:verdana;">
   <form action="" align="center" method="POST">
	<br>
	<h1> Make Appointment</h1><br>
	<hr><br>
	<h2>** Patient Details **</h2><br>
	<hr>
	<h3>Patient Name : <?php echo $row['p_name']; ?></h3><br>
	<input type="hidden" name="p_name" value="<?php echo $row['p_name']; ?>">
	<h3>Patient Contact No : <?php echo $row['p_mobile']; ?></h3><br>
	<input type="hidden" name="p_mobile" value="<?php echo $row['p_mobile']; ?>">
	<h3>Patient Address : <?php echo $row['p_address']; ?></h3><br>
	<input type="hidden" name="p_address" value="<?php echo $row['p_address']; ?>">
	<hr><br>
	<h2>** Appointment Details **</h2><br>
	<hr><br>
	<h3>Doctor Name : <?php echo $row2['firstname']; echo $row2['lastname']; ?></h3><br>
	<input type="hidden" name="firstname" value="<?php echo $row2['firstname']; ?>">
	<input type="hidden" name="lastname" value="<?php echo $row2['lastname']; ?>">
	<h3>Appointment Date : <?php echo $a_date; ?></h3><br>
	<input type="hidden" name="a_date" value="<?php echo $a_date; ?>">
	<h3>Appointment Time : <?php echo $a_time; ?></h3><br>
	<input type="hidden" name="a_time" value="<?php echo $a_time; ?>">
	<hr><br>
        <textarea name="reason" placeholder="Enter reason for the appointment" style="height:80px; width:400px; font-size:17px; border:none;"></textarea><br><br>
	<input type="submit" name="book" value="Book" style="background-color:#243a6f; color:white; height:30px; width:100px; border:none; font-size:18px;">
   </form>
   </div>





<?php
       }
    }
    else
    {
	header('location:patient_login.php');
    }

?>

<?php 
require 'footer.php';
?>