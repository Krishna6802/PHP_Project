<!DOCTYPE html>



<head>
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  
	<!-- Custom StyleSheet -->
  <link rel="stylesheet" href="../css/styles.css" />
  
	<title>Online Healthcare System</title>

</head>


<!-- Header -->
  <header id="home" class="header">
 

<?php
require ('connection.php');

?>
<!-- Navigation -->
    <nav class="nav">

        <div class="navigation container">

            <div class="logo">

                <h1>GreatFeel</h1>

            </div>


            <div class="menu">

                <div class="top-nav">

                    <div class="logo">

                        <h1>Codevo</h1>

                    </div>

                   
                </div>



<ul class="nav-list">
<li><a href="docProfile.php" class="nav-link">My Profile</a></li>
<li><a href="my_app.php" class="nav-link">My appointment</a></li>
</ul>

</div>


    </div>

        </div>

    </nav>



<?php if(isset($_SESSION['DOC_LOGIN']))
{
	echo '<a href="logout.php" class="nav-link" style="margin:80px;"> LOGOUT</a>';
}
else
{
	echo '<a href="login.php" class="nav-link" style="margin:80px;">Doctor Login</a>';
}

?>

</header>

