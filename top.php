<!DOCTYPE html>



<head>
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  
	<!-- Custom StyleSheet -->
  <link rel="stylesheet" href="css/styles.css" />
  
	<title>Online HealthCare System</title>

</head>


<!-- Header -->
  <header id="home" class="header">
 
<?php
require ('connection.php');
require ('functions.php');

$cat_res = mysqli_query($con,"select *from categories where status=1 order by categories");

$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res))
{
	$cat_arr[] = $row;
}
?>


<body>
     
	 <!-- Navigation -->
    <nav class="nav">

        <div class="navigation container">

            <div class="logo">

                <h1>GreatFeel</h1>

            </div>


            <div class="menu">

                <div class="top-nav">

                    <div class="logo">

                     

                    </div>

                   
                </div>


                <ul class="nav-list">

                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>

            <li class="nav-item">
<a href="blog_cate_display.php" class="nav-link">Blogs</a>
</li>

            <li class="nav-item"><a href="doctor_display.php" class="nav-link">Book Appointment</a></li>

            <li class="nav-item">
<a href="contact.php" class="nav-link">Contact</a></li>

	
	 <?php if(isset($_SESSION['USER_LOGIN']))
	 { ?>
            <li class="nav-item"><a href="account.php" class="nav-link">My Account</a>
</li>

	    <li class="nav-item"><a href="myorder.php" class="nav-link">My Order</a></li>
	 <?php } ?>

	  <?php if(isset($_SESSION['PATIENT_LOGIN']))
	 { ?>
	    <li class="nav-item"><a href="account.php" class="nav-link">My Account</a>
</li>

            <li class="nav-item"><a href="myApp.php" class="nav-link">My Appointment</a></li>
	 <?php } ?>
            <li class="nav-item">
<a href="cart.php" class="nav-link"><img src="cart.png" style="height:20px; width:20px; padding:0px;"></i></a></li>
</ul>
    </nav>



<?php if(isset($_SESSION['USER_LOGIN']))
{
	
	
	echo '<a href="logout.php" class="nav-link">User Logout</a>';
	
}
else
{
	echo '<a href="login.php?page=index.php" class="nav-link">User Login</a>';
}

if(isset($_SESSION['PATIENT_LOGIN']))
{
	echo '| <a href="patient_logout.php" class="nav-link">Patient Logout</a>';
}
else
{
	echo ' | <a href="patient_login.php" class="nav-link">Patient Login</a>';
}

?>


  
</header>


<!-- Custom Script -->
    <script src="./js/index.js"></script>
</body>

</html>