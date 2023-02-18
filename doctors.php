<!doctype html>
<html>
<head> 
   <title>Doctor's Info Page</title>  
</head>

<?php
require ('top.php');

?>




<?php
$doc_id=$_GET['d_id'];
$page=$_GET['page'];

if($doc_id>0)
{
}
else
{
    echo "<script> window.location.href='doc_cate.php'; </script>";
}


$sql = "select doctor.*, doc_cate.categories from doctor, doc_cate where doctor.id=$doc_id AND doctor.doc_cate_id=doc_cate.doc_cate_id ";
$res = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
?>

<div style="background-color:pink; height:50px; width:1349px;">
<br>
<a href="index.php">Home  >  </a>
<a href="doctors.php">Our Specialists > </a>
<a href="doc_cate.php?id=<?php echo $row['doc_cate_id']?>&page=<?php echo $page; ?>"><?php echo $row['categories']?>  >  </a>
<span><?php echo $row['firstname']; $row['firstname']; ?></span>
</div>

<section class="section featured">

      <div class="title">

        <h1><?php echo $row['firstname']; $row['firstname']; ?></h1>

      </div>


      <div class="product-center container">




<section class="section product-detail">

    <div class="details container-md">
 
     <div class="left">

        <div class="main">

<img src="admin/media/doctors/<?php echo $row['image']?>" alt="full_image" >
</div>
    
</div>           
      <div class="right" style="background-color:pink;">

<ul style="margin:20px;">
<p>Email_Id : <?php echo $row['email']; ?></p><br>
<p>Contact No : <?php echo $row['mobile']; ?></p><br>
<p>Hospital/Clinic Name<?php echo $row['h_name']; ?></p><br>
<p>Address : <?php echo $row['h_address']; ?></p><br>
<p>Gender : <?php echo $row['gender']; ?></p><br>
<p>Country : <?php echo $row['country']; ?></p><br>
<p>State : <?php echo $row['state']; ?></p><br>
<p>City : <?php echo $row['city']; ?></p><br>
<p>Speciality : <?php echo $row['categories']; ?></p><br>
<p>Qualification : <?php echo $row['qualification']; ?></p><br>
<p>Experience : <?php echo $row['experience']; ?> years</p><br>
<p>Fees for consultaion : <?php echo $row['fees']; ?></p><br>

<?php 
$ctime = date("H:i"); 
$cdate = date('Y-m-d');
?>

<form action="set_time.php">
Select Date :
<select  name="date">
<?php if($ctime < date('19:30')) { ?> <option><?php echo date('Y-m-d'); ?></option><?php }?>
<option><?php echo date('Y-m-d', strtotime(' +1 day')); ?></option>
<option><?php echo date('Y-m-d', strtotime(' +2 day')); ?></option>
</select><br><br>


<input type="hidden" name="d_id" value="<?php echo $row['id'] ?>"><br><br>
<input type="hidden" name="firstname" value="<?php echo $row['firstname'] ?>"><br><br>
<input type="submit" name="appointment" value="Book Appointment" style="background-color:#243a6f ; color:white; height:30px; width:200px; margin-top:3px; text-align:center; font-size:16px; font-weight:700; border:none; padding:6px;">
</form>

</ul>

</div>

    </div>


</div>

</section>

<?php
require('footer.php');
?>