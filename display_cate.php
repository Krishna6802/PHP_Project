

<!DOCTYPE html>



<head>
    
	<!-- Custom StyleSheet -->
  <link rel="stylesheet" href="css/styles.css" />
  
	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="style.css">
 
	<title>Product Categories Page</title>

</head>


<?php
require ('top.php');

?>

<div style="background-color:pink; height:50px; width:1349px;">
<br>
<a href="index.php">Home  >  </a>
<span> All Product Categories </span>
</div>

<!--**********************************************************************-->
<!-- Main -->
  
<!-- Medical Products -->

  
<section class="section featured">

      <div class="title">

        <h1>Medical Products</h1>

      </div>


      <div class="product-center container">


<?php

$cat_res = mysqli_query($con,"select *from categories where status=1 order by categories");
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

            <a href="categories.php?id=<?php echo $list['pro_cate_id']; ?>&page=display_cate.php">
<h3><?php echo $list['categories']; ?></h3></a>
	</div>

   </div>




<?php  } ?>
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

<a href="index.php#pro_categories"><button type="button" class="b1">BACK</button></a></div>

</section>

<?php
require('footer.php');
?>
