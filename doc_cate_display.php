<!doctype html>
<html>
<head> 
   <link rel="stylesheet" href="css/styles.css" />
  
   <link rel="stylesheet" href="css/core.css">
   <title>specialities</title>  
</head>

<?php
date_default_timezone_set('UTC'); 
require ('top.php');
?>

<div style="background-color:pink; height:50px; width:1349px;">
<br>
<a href="index.php">Home  >  </a>
<span> All Specialities </span>
</div>

<section class="section featured">

      <div class="title">

        <h1>Book Appointment</h1>

      </div>


      <div class="product-center container">


<?php

$cat_res = mysqli_query($con,"select *from doc_cate where status=1 order by categories");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res))
{
	$cat_arr[] = $row;
}
 foreach($cat_arr as $list)
 { ?>

        <div class="product">

          <div class="product-header">
            <a href="doc_cate.php?p_id=<?php echo $list['doc_cate_id']; ?>"><img src="admin/media/doctors/<?php echo $list['image']; ?>" alt="doc_cate image" height="300px" width="300px"></a>
           
	    
          </div>


          <div class="product-footer">

            <a href="doc_cate.php?id=<?php echo $list['doc_cate_id']; ?>&page=doc_cate_display">
<h3><?php echo $list['categories']; ?></h3></a>
	</div>

   </div>




<?php  } ?>

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

<a href="index.php#book_appointment"><button type="button" class="b1">BACK</button></a></div>


</section>

<?php
require('footer.php');
?>

