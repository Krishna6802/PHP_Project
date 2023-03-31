<?php
require 'top.php';
?>


   
      <div style="height:400px; width:600px;  margin-top:80px; margin-left:400px; margin-bottom:80px; background-color:pink">
<?php 
$ctime = date("H:i"); 
$cdate = date('Y-m-d');
$n1day = date('Y-m-d', strtotime(' +1 day'));
$n2day = date('Y-m-d', strtotime(' +2 day'));

if(isset($_GET['appointment']))
	{	  
	   $date = $_GET['date'];
	   $d_id = $_GET['d_id'];
	   $firstname = $_GET['firstname'];


?>
<form action="appointment.php">
<h4 style="color:#243a6f; font-weight:600; padding-top:140px; padding-bottom:20px; font-size:26px;" align="center">Select Time : </h4>
<?php if($date == date('Y-m-d')) { ?>
<select name="time" style="margin-left:180px; height:30px; width:200px; border:solid 2px #243a6f;">

<?php if($ctime < date('10:00') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '10:00' AND firstname='$firstname'")) == 0 ){ echo "<option value='10:00'>10:00 AM to 10:30 AM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if($ctime < date('10:30') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '10:30' AND firstname='$firstname'")) == 0) { echo "<option value='10:30'>10:30 AM to 11:00 AM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if($ctime < date('11:00') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '11:00' AND firstname='$firstname'")) == 0) { echo "<option value='11:00'>11:00 AM to 11:30 AM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if($ctime < date('11:30') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '11:30' AND firstname='$firstname'")) == 0) { echo "<option value='11:30'>11:30 AM to 12:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if($ctime < date('12:00') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '12:00' AND firstname='$firstname'")) == 0) { echo "<option value='12:00'>12:00 PM to 12:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if($ctime < date('12:30') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '12:30' AND firstname='$firstname'")) == 0) { echo "<option value='12:30'>12:30 PM to 13:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if($ctime < date('17:00') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '17:00' AND firstname='$firstname'")) == 0) { echo "<option value='17:00'>17:00 PM to 17:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if($ctime < date('17:30') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '17:30' AND firstname='$firstname'")) == 0) { echo "<option value='17:30'>17:30 PM to 18:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if($ctime < date('18:00') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '18:00' AND firstname='$firstname'")) == 0) { echo "<option value='18:00'>18:00 PM to 18:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if($ctime < date('18:30') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '18:30' AND firstname='$firstname'")) == 0) { echo "<option value='18:30'>18:30 PM to 19:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if($ctime < date('19:00') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '19:00' AND firstname='$firstname'")) == 0) { echo "<option value='19:00'>19:00 PM to 19:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if($ctime < date('19:30') && mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$cdate' AND a_time = '19:30' AND firstname='$firstname'")) == 0) { echo "<option value='19:30'>19:30 PM to 20:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
</select>

<?php }
else if($date == $n1day)
{ ?>
<select name="time" style="margin-left:180px; height:30px; width:200px; border:solid 2px #243a6f;">
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '10:00' AND firstname='$firstname'")) == 0 ){ echo "<option value='10:00'>10:00 AM to 10:30 AM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '10:30' AND firstname='$firstname'")) == 0) { echo "<option value='10:30'>10:30 AM to 11:00 AM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '11:00' AND firstname='$firstname'")) == 0) { echo "<option value='11:00'>11:00 AM to 11:30 AM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '11:30' AND firstname='$firstname'")) == 0) { echo "<option value='11:30'>11:30 AM to 12:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '12:00' AND firstname='$firstname'")) == 0) { echo "<option value='12:00'>12:00 PM to 12:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '12:30' AND firstname='$firstname'")) == 0) { echo "<option value='12:30'>12:30 PM to 13:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '17:00' AND firstname='$firstname'")) == 0) { echo "<option value='17:00'>17:00 PM to 17:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '17:30' AND firstname='$firstname'")) == 0) { echo "<option value='17:30'>17:30 PM to 18:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '18:00' AND firstname='$firstname'")) == 0) { echo "<option value='18:00'>18:00 PM to 18:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '18:30' AND firstname='$firstname'")) == 0) { echo "<option value='18:30'>18:30 PM to 19:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '19:00' AND firstname='$firstname'")) == 0) { echo "<option value='19:00'>19:00 PM to 19:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n1day' AND a_time = '19:30' AND firstname='$firstname'")) == 0) { echo "<option value='19:30'>19:30 PM to 20:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
</select>

<?php }
else if($date == $n2day)
{ ?>
<select name="time" style="margin-left:180px; height:30px; width:200px; border:solid 2px #243a6f;">
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '10:00' AND firstname='$firstname'")) == 0 ){ echo "<option value='10:00'>10:00 AM to 10:30 AM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '10:30' AND firstname='$firstname'")) == 0) { echo "<option value='10:30'>10:30 AM to 11:00 AM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '11:00' AND firstname='$firstname'")) == 0) { echo "<option value='11:00'>11:00 AM to 11:30 AM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '11:30' AND firstname='$firstname'")) == 0) { echo "<option value='11:30'>11:30 AM to 12:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '12:00' AND firstname='$firstname'")) == 0) { echo "<option value='12:00'>12:00 PM to 12:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '12:30' AND firstname='$firstname'")) == 0) { echo "<option value='12:30'>12:30 PM to 13:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '17:00' AND firstname='$firstname'")) == 0) { echo "<option value='17:00'>17:00 PM to 17:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '17:30' AND firstname='$firstname'")) == 0) { echo "<option value='17:30'>17:30 PM to 18:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '18:00' AND firstname='$firstname'")) == 0) { echo "<option value='18:00'>18:00 PM to 18:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '18:30' AND firstname='$firstname'")) == 0) { echo "<option value='18:30'>18:30 PM to 19:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '19:00' AND firstname='$firstname'")) == 0) { echo "<option value='19:00'>19:00 PM to 19:30 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
<?php if(mysqli_num_rows(mysqli_query($con,"select * from appointment where a_date='$n2day' AND a_time = '19:30' AND firstname='$firstname'")) == 0) { echo "<option value='19:30'>19:30 PM to 20:00 PM</option>"; } else{echo "<option disabled>N/A</option>";}?>
</select>
<?php } ?>

<input type="hidden" name="d_id" value="<?php echo $d_id; ?>">
<input type="hidden" name="a_date" value="<?php echo $date; ?>">
<input type="submit" name="setTime" value="Set" style="background-color:#243a6f; color:white; height:30px; width:100px; border:none; font-size:18px;">
</form>

</div>

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

<a href="doctors.php?d_id=<?php echo $d_id; ?>"><button type="button" class="b1">BACK</button></a>

<?php } ?>
<?php
require 'footer.php';
?>