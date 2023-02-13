<!doctype html>
<html>
<head> 
   <title>Blog Page</title>  
</head>

<?php
require ('top.php');
?>




<?php
$blog_id=$_GET['b_id'];

if($blog_id>0)
{
}
else
{
    echo "<script> window.location.href='blog_display.php'; </script>";
}

//$sql = "select * from blog where status = 1 ";
//$sql .= "and id=$blog_id ";

$sql = "select blog.*, blog_cate.categories from blog, blog_cate where blog.id=$blog_id AND blog.blog_cate_id=blog_cate.blog_cate_id ";
$res = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
?>


<div style="background-color:pink; height:50px; width:1349px;">
<br>
<a href="index.php">Home  >  </a>
<a href="blog_display.php">Blogs > </a>
<a href="blog_cate.php?id=<?php echo $row['blog_cate_id']?>"><?php echo $row['categories']?>  >  </a>
<span><?php echo $row['title']?></span>
</div>

<br><br>

<section class="section featured">

      <div class="title">

        <h1><?php echo $row['title']?></h1>

      </div>


      <div class="blog-center container">




<div class="product">

  <div class="product-header">
<img src="admin/media/blogs/<?php echo $row['image']?>" alt="blog image" height="100%" width="100%">
  </div>
 
<div class="product-footer">
<h3>Title : <?php echo $row['title']?></h3><br>
<h4>Category : <?php echo $row['categories']?></h4>
</div>
</div>


<textarea disabled align="center" rows="30" cols="102" style="resize:none; border:none; background-color:#F0F0F0; color:black; font-family:KarlaJohnson8 HeavyCursiveSH; word-spacing: 10px; font-weight:0; font-size:17px; text-align: justify; padding:25px;"><?php echo $row['description']?></textarea>

</div>
</section>



<?php
require('footer.php');
?>