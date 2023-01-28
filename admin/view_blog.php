<?php require('top.php'); 

$id=$_GET['id'];

$sql = "select blog.*, blog_cate.categories from blog, blog_cate where blog.blog_cate_id=blog_cate.blog_cate_id AND blog.id=$id";
$res = mysqli_query($con,$sql);
$row= mysqli_fetch_assoc($res);
?>

<div style="height:300px; width:900px;">
<img src="media/blogs/<?php echo $row['image']?>" alt="blog image" height="100%" width="100%">
  </div>
<br><br>
<h3 align="center">Title : <?php echo $row['title']?></h3><br>
<h4 align="center">Category : <?php echo $row['categories']?></h4>


<textarea disabled align="center" rows="30" cols="102" style="resize:none; border:none; background-color:#F0F0F0; color:black; font-family:KarlaJohnson8 HeavyCursiveSH; word-spacing: 10px; font-weight:0; font-size:17px; text-align: justify; padding:25px;"><?php echo $row['description']?></textarea>

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
   margin: 0px 350px;
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

<a href="blog.php"><button type="button" class="b1">BACK</button></a>

</div>
?>