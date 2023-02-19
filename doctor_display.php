<!doctype html>
<html>
<head> 
   <link rel="stylesheet" href="css/styles.css" />
  
	<link rel="stylesheet" href="css/core.css">
   <title>Doctors Page</title>  
</head>

<?php
require ('top.php');
?>

<div style="background-color:pink; height:50px; width:1349px;">
<br>
<a href="index.php">Home  >  </a>
<span> All Specialists </span>
</div>

 <section class="section featured">

      <div class="title">

        <h1>Our Specialists</h1>

      </div>


      <div class="product-center container">



<?php
$get_doc = get_doc($con,4,'','');

foreach($get_doc as $list)
{  ?>
<div class="product">

          <div class="product-header">
<a href="doctors.php?d_id=<?php echo $list['id'] ?>"><img src="admin/media/doctors/<?php echo $list['image']; ?>" alt="Doctor image" height="200px" width="300px"></a>
</div>
<div class="product-footer">


<a href="doctors.php?d_id=<?php echo $list['id'] ?>&page=doctor.display"><h4><?php echo $list['firstname']; ?></h4></a>
<li><?php echo $list['lastname']; ?></li>
<ul>
<li><?php echo $list['doc_cate_id']; ?></li>
<li><?php echo $list['qualification']; ?></li>
</ul>
</div>
 </div>


<?php } ?>
</div>

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
   cursor: pointer;
}

.b1:hover
{
   background-color:  #f44336;
   border: #f44336;
   color: #FCF5E5;
}

</style>

<a href="index.php#specialists"><button type="button" class="b1">BACK</button></a></div>


</section>

<?php
require('footer.php');
?>