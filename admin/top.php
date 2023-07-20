<!doctype html>
<html>
<head> 
   <link rel="stylesheet" href="css/style.css">
</head>

<?php
 require('connection.php');
 ?>

<body>

    <input type="checkbox" id="nav-toggle">
   <title>Menu</title>  
</head>

<!doctype html>

<html>
  
<head>
  
   <title>Categories Page</title>
    
</head>

<div class="sidebar">

        <div class="sidebar-brand">

            <h2><span class="las la-clinic-medical"></span> <span>Dashboard</span></h2>

        </div>

        <div class="sidebar-menu">

            <ul>

		
                <li>
<a href="categories.php"><span>Categories Master</span></a></li>

                <li> <a href="product.php"><span>Product Master</span></a> </li>

                <li> <a href="manage_order.php"><span>Order Master</span></a> </li>

                <li> <a href="users.php"><span>User Master</span></a> </li>

                <li> <a href="contact_us.php"><span>Contact Us</span></a> </li>

                <li> <a href="doc_cate.php"><span>Doctor's Categories</span></a> </li>

                <li> <a href="doctors.php"><span>Doctors' List</span></a> </li>

                <li> <a href="blog_cate.php"><span>Blog categories</span></a> </li>

                <li> <a href="blog.php"><span>Blog</span></a> </li>

            </ul>

        </div>
    </div>


<div class="main-content">

        <header>

            <h2>


                <label for="nav-toggle">

                    <span class="las la-bars"></span>

                </label> GreatFeel
            </h2>


                       <div class="user-wrapper">

                
                <div>
                    <h4><?php echo $_SESSION['ADMIN_USERNAME']; ?></h4>

                    <small><a href="logout.php" class="nav-link">Logout</a></small>

                </div>
            </div>
       


<?php

	if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN'] != '')
	{			
	}
	else
	{
		header('location:login.php');
		die();
	}
?>

 </header>





<main>
                  

       
     
