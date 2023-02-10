<!doctype html>
<html>
<head> 
   <title>Blog Display page</title>  
</head>

<?php
require ('top.php');
?>

<div style="background-color:pink; height:50px; width:1349px;">
<br>
<a href="index.php">Home  >  </a>
<span> All Blogs </span>
</div>

<?php
$get_blog = get_blog($con,'','',''); ?>

<section class="section featured">

      <div class="title">

        <h1>Your Health Feed</h1>

      </div>


      <div class="product-center container">



<?php
foreach($get_blog as $list)
{  ?>

<div class="product">

  <div class="product-header">
<img src="admin/media/blogs/<?php echo $list['image']; ?>" alt="Blog image" height="400px" width="1000px"></a>

 </div>
   <div class="product-footer">
<h1><a href="blog.php?b_id=<?php echo $list['id'] ?>"><?php echo $list['title']; ?></a></h1>

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

<a href="index.php#blog"><button type="button" class="b1">BACK</button></a></div>


</section>

<?php
require('footer.php');
?>


</html>