<!doctype html>
<html>
<head> 
   <title>Doctor Categories Page</title>  
</head>

<?php
require ('top.php');

$page=$_GET['page'];
$cat_id=$_GET['id'];
$r = mysqli_fetch_assoc(mysqli_query($con,"select *from doc_cate where doc_cate_id=$cat_id"));

?>

<div style="background-color:pink; height:50px; width:1349px;">
<br>
<a href="index.php">Home  >  </a>
<span><?php echo $r['categories']?> </span>
</div>

<section class="section featured">

      <div class="title">

        <h1><?php echo $r['categories']?></h1>

      </div>


      <div class="product-center container">




<?php
$cat_id=$_GET['id'];
if($cat_id>0)
{
    $get_doc = get_doc($con,'',$cat_id,'');
}
else
{
    echo "<script> window.location.href='doc_display.php'; </script>";
}
?>

<?php if(count($get_doc)>0)
{    ?>

<?php
foreach($get_doc as $list)
{  ?>
  <div class="product">

          <div class="product-header">
            <a href="doc_cate.php?id=<?php echo $list['doc_cate_id']; ?>"><img src="admin/media/doctors/<?php echo $list['image']; ?>" alt="Doc_cate image" height="300px" width="300px">
   
          </div>


	<div class="product-footer">


 
   <a href="doctors.php?d_id=<?php echo $list['id']; ?>&page=doc_cate.php"><h4><?php echo $list['firstname']; echo $list['lastname'];?></h4></a>

<li style="font-weight:700;"><?php echo $list['categories']; ?></li>
<li><?php echo $list['qualification']; ?></li>
</div>
</div>

  
<?php } ?>

 </div>

<?php } 
      else 
      {
	   echo "Data not found";
      } ?>

</section>

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

<?php
if($page=="doc_cate_display.php")
{  ?>
	<a href="display_cate.php"><button type="button" class="b1">BACK</button></a></div>
<?php 
}
else
{ ?>
	<a href="index.php#book_appointment"><button type="button" class="b1">BACK</button></a></div>

<?php
}
require('footer.php');
?>