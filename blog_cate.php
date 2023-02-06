<!doctype html>
<html>
<head> 
   <title>Blog categories Page</title>  
</head>

<?php
require ('top.php');
?>

<?php
$cat_id=$_GET['id'];
if($cat_id>0)
{
    $get_blog = get_blog($con,'',$cat_id,'');
}
else
{
    echo "<script> window.location.href='blog_display.php'; </script>";
}

$cat = mysqli_query($con,"select *from blog_cate where blog_cate_id=$cat_id");
$row1=mysqli_fetch_assoc($cat);

?>

<?php if(count($get_blog)>0)
{    ?>


<div style="background-color:pink; height:50px; width:1349px;">
<br>
<a href="index.php">Home  >  </a>
<span><?php echo $row1['categories']?> </span>

</div>


<section class="section featured">

      <div class="title">

        <h1><?php echo $row1['categories']?></h1>

      </div>


      <div class="product-center container">


<?php
foreach($get_blog as $list)
{  ?>

        <div class="product">

          <div class="product-header">
            <a href="blog.php?b_id=<?php echo $list['id'] ?>"><img src="admin/media/blogs/<?php echo $list['image']; ?>" alt="Blog image" height="200px" width="300px"></a>
	    
          </div>


          <div class="product-footer">

            <a href="blog.php?b_id=<?php echo $list['id']; ?>">
<h3><?php echo $list['title']?></h3></a>

	</div>
           </div>


<?php } ?>
</div>

	       </div>

<?php } 
      else 
      {
	   echo "Data not found";
      } ?>

<br>

</section>

<?php
require('footer.php');
?>