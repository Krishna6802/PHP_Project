

<!DOCTYPE html>



<head>
    
	<!-- Custom StyleSheet -->
  <link rel="stylesheet" href="css/styles.css" />
  
	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="style.css">
 
	<title>Home Page</title>

</head>


<?php
require ('top.php');

?>
<!--**********************************************************************-->
<!--Header-->
<body onload="slider()">
	    
        <div class="banner">
	     <div class="slider">
		<img src="h4.jpg" id="slideImg" class="mySlides">
		<img src="h5.jpg" id="slideImg" class="mySlides">
		<img src="h6.jpg" id="slideImg" class="mySlides">
	 
             </div> 
		
		<div class="overlay">
	  	 
       
	
	


	<div class="cntent">
	    <h1 class="t1">Be Happy , Be Healthy !</h1>
	    <h3>Let's talk about a healthier tomorrow !!</h3>
	</div>
		
	<div align="center">
		<a href="display_cate.php"><button type="button" class="btn2">SHOP NOW</button></a>
		<a href="#book_appointment"><button type="button" class="btn3">BOOK APPOINTMENT</button></a>
	</div>
    </div>
   </div>
	
	<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<!--**********************************************************************-->
<!-- Main -->
  
<!-- Medical Products -->

<main>
  

<section class="section featured">

      <div class="title">

        <a id="pro_categories"> <h1>Medical Products</h1> </a>
      </div>


      <div class="product-center container">


<?php

$cat_res = mysqli_query($con,"select *from categories where status=1 order by categories limit 3");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res))
{
	$cat_arr[] = $row;
}
 foreach($cat_arr as $list)
 { ?>

        <div class="product">

          <div class="product-header">
            <a href="categories.php?id=<?php echo $list['pro_cate_id']; ?>"><img src="admin/media/categories/<?php echo $list['image']; ?>" alt="product image" height="300px" width="300px"></a>
           
	    
          </div>


          <div class="product-footer">

            <a href="categories.php?id=<?php echo $list['pro_cate_id']; ?>&page=index.php">
<h3><?php echo $list['categories']; ?></h3></a>
	</div>

   </div>




<?php  } ?>
<div class="product">

                      <a href="display_cate.php?id=<?php echo $list['pro_cate_id']; ?>">
<h1 align="center" style="margin-top:50%; font-size:25px; font-weight:750;">See More</h1></a>
	</div>

   </div>
</div>
</section>

 <!-- ****************************************************************************** -->

 <!-- Featured Products-->



    <section class="section featured">

      <div class="title">

        <a id="pro"> <h1>Featured Products</h1> </a>
      </div>


      <div class="product-center container">

 
<?php
$get_product = get_product($con,'3','','');
foreach($get_product as $list)
{  ?>

        <div class="product" style="margin:10px;">

          <div class="product-header">
            <a href="product.php?p_id=<?php echo $list['id']; ?>"><img src="admin/media/products/<?php echo $list['image']; ?>" alt="product image" height="300px" width="300px" margin:10px;></a>
            <ul class="icon1">
	       <a href="insert_cart.php?image=<?php echo $list['image']?>&name=<?php echo $list['name']?>&mrp=<?php echo $list['mrp']?>&qty=1&operation='cart'&page=index.php"><span><i></i></span></a>            
            </ul>

            <ul class="icon2">
	        <a href="buy.php?p_id=<?php echo $list['id']; ?>&operation='checkout'&qty=1"><span><i></i></span></a>            
            </ul>
	    <ul class="icon4">
	       <a href="product.php?p_id=<?php echo $list['id']; ?>&page=index.php"><span><i></i></span></a>            
            </ul>
	    
          </div>


          <div class="product-footer">

            <a href="product.php?p_id=<?php echo $list['id']; ?>&page=index.php">
<h4><?php
$str = $list['name'];
if( strlen( $list['name']) > 58) {
    $str = explode( "\n", wordwrap( $list['name'], 58));
    $str = $str[0] . '...';
}

echo $str;
?></h4></a>

            
<h4 class="price">Rs.<?php echo $list['mrp']; ?></h4>


<form action="insert_cart.php" method="get">
<input type="hidden" name="p_id" value="<?php echo $list['id'] ?>">
<input type="hidden" name="image" value="<?php echo $list['image']?>">
<input type="hidden" name="name" value="<?php echo $list['name']?>">
<input type="hidden" name="mrp" value="<?php echo $list['mrp']?>">

<input type="hidden" name="page" value="index_pro">


<p>Qty
<input type="number" name="qty" id="quantity" value="1" min="1" max="100"> 

<input type="submit" name="cart" value="Add to cart" style="background-color:#243a6f ; color:white; height:30px; width:200px; text-align:center; font-size:16px; font-weight:700; border:none; margin-top:3px; padding:6px;">
</form>

	</div>
          </div>



<?php } ?>

<div class="product" style="margin:10px;">

                      <a href="dis_products.php">
<h1 align="center" style="margin-top:50%; font-size:25px; font-weight:750;">See More</h1></a>
	</div>

   </div>
</section>


<!-- ****************************************************************************** -->


<!--**********************************************************************-->

  <!-- Book Appointment -->
 
    <section class="advert section">

      <div class="advert-center container">

    </section>


    

<section class="section featured">

      <div class="title">

       <a id="book_appointment"> <h1>Book Appointment</h1> </a>
      </div>


      <div class="product-center container">


<?php

$cat_res = mysqli_query($con,"select *from doc_cate where status=1 order by categories limit 3");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res))
{
	$cat_arr[] = $row;
}
 foreach($cat_arr as $list)
 { ?>

        <div class="product">

          <div class="product-header">
            <a href="doc_cate.php?id=<?php echo $list['doc_cate_id']; ?>"><img src="admin/media/doctors/<?php echo $list['image']; ?>" alt="Doc_cate image" height="300px" width="300px"></a>
           
	    
          </div>


          <div class="product-footer">

            <a href="doc_cate.php?id=<?php echo $list['doc_cate_id']; ?>&page=index.php">
<h3><?php echo $list['categories']; ?></h3></a>
	</div>

   </div>




<?php  } ?>
<div class="product">

                      <a href="doc_cate_display.php?id=<?php echo $list['doc_cate_id']; ?>">
<h1 align="center" style="margin-top:50%; font-size:25px; font-weight:750;">See More</h1></a>
	</div>

   </div>


</div>
</section>



 <!-- ****************************************************************************** -->



    <!-- Our Specialists -->

    <section class="section featured">

      <div class="title">

        <a id="specialists"> <h1>Our Specialists</h1> </a>

      </div>


      <div class="product-center container">


<?php
$get_doc = get_doc($con,'3','','');
foreach($get_doc as $list)
{  ?>

        <div class="product">

          <div class="product-header">
            <a href="doc.php?p_id=<?php echo $list['id'] ?>"><img src="admin/media/doctors/<?php echo $list['image']; ?>" alt="Doctor image" height="200px" width="300px"></a>
	    
          </div>


          <div class="product-footer">

            <a href="doctors.php?d_id=<?php echo $list['id']; ?>">
<h3 style="font-weight:700;"><?php echo $list['firstname']; echo $list['lastname'];?></h3></a>

            
<h4 class="price"style="font-weight:700;"><?php echo $list['categories']; ?></h4>

            
<h4 class="price"><?php echo $list['qualification']; ?></h4>

	</div>
           </div>


<?php } ?>
<div class="product">

                      <a href="doctor_display.php">
<h1 align="center" style="margin-top:50%; font-size:25px; font-weight:750;">See More</h1></a>
	</div>

   </div>


</div>
</section>


<!-- ****************************************************************************** -->


<!--**********************************************************************-->

  <!-- Articles -->
 

    <section class="advert section">

      <div class="advert-center container">

    </section>



<section class="section featured">

      <div class="title">

        <a id="blog_cates"> <h1>Articles</h1> </a>
        </div>


      <div class="product-center container">


<?php

$cat_res = mysqli_query($con,"select *from blog_cate where status=1 order by categories limit 3");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res))
{
	$cat_arr[] = $row;
}
 foreach($cat_arr as $list)
 { ?>

        <div class="product">

          <div class="product-header">
            <a href="blog_cate.php?p_id=<?php echo $list['blog_cate_id']; ?>"><img src="admin/media/blogs/<?php echo $list['image']; ?>" alt="blog_cate image" height="300px" width="300px"></a>
           
	    
          </div>


          <div class="product-footer">

            <a href="blog_cate.php?id=<?php echo $list['blog_cate_id']; ?>">
<h3><?php echo $list['categories']; ?></h3></a>
	</div>

   </div>




<?php  } ?>
<div class="product">

                      <a href="blog_cate_display.php?id=<?php echo $list['blog_cate_id']; ?>">
<h1 align="center" style="margin-top:50%; font-size:25px; font-weight:750;">See More</h1></a>
	</div>

   </div>


</div>

</section>


 <!-- ****************************************************************************** -->



    <!-- Your Health Feed -->

    <section class="section featured">

      <div class="title">

        <a id="blog"> <h1>Your Health Feed</h1> </a>

       </div>


      <div class="product-center container">


<?php
$get_blog = get_blog($con,'3','','');
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
<div class="product">

                      <a href="blog_display.php?">
<h1 align="center" style="margin-top:50%; font-size:25px; font-weight:750;">See More</h1></a>
	</div>
   </div>
</div>

	</div>    
  </main>



<?php
require('footer.php');
?>

  <!-- Custom Script -->
    <script src="./js/index.js"></script>
</body>

</html>