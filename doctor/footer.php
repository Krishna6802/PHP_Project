<!-- Footer -->
  <footer id="footer" class="section footer">

    <div class="container">

      <div class="footer-container">

        <div class="footer-center">

          <h3>EXPLORE</h3>

          <a href="../about.php">About Us</a>

          <a href="../contact.php">Contact Us</a>

          <a href="../image.php">Image Gallary</a>

          <a href="#"></a>

        </div>

        <div class="footer-center">

          <h3>QUICK LINKS</h3>

          <a href="../index.php#pro">Buy Medical Products</a>

          <a href="../index.php#book_appointment">Book Appointment</a>

                  <a href="index.php#book_appointment">Book Appointment</a>
 <?php if(isset($_SESSION['USER_LOGIN']))
	 { ?>
           <a href="../logout.php">User Logout</a> <?php } 
       else { ?><a href="../login.php?page=index.php">User Login</a>  <?php } ?>

 <?php if(isset($_SESSION['PATIENT_LOGIN']))
	 { ?>
          <a href="../patient_logout.php">Patient Logout</a><?php } 
       else { ?> <a href="../patient_login.php?page=index.php">Patient Login</a> <?php } ?>

 <?php if(isset($_SESSION['DOC_LOGIN']))
	 { ?>
           <a href="doc_logout.php">Doctor Logout</a><?php } 
       else { ?> <a href="doc_login.php?page=index.php">Doctor Login</a> <?php } ?>

<?php if(isset($_SESSION['ADMIN_LOGIN']))
	 { ?>
          <a href="../admin_login.php">Admin Login</a><a href="../admin/logout.php">Admin Logout</a> <?php } 
       else { ?> <a href="../admin_login.php">Admin Login</a> <?php } ?>


     </div>

        <div class="footer-center">

          <h3>MY ACCOUNT</h3>

          <a href="../account.php">My Account</a>

      <a href="../cart.php?page=index.php">My Cart</a>

          <a href="../myOrder">My Order</a>

          <a href="../account.php">My Profile</a>
       
   <a href="logout.php">Logout</a>

        </div>


        <div class="footer-center">

          <h3>CONTACT US</h3>
  
  
          <div> 06 Patel Colony, Gandhi Road, 7131 Ahemdabad, India</div>

          <div>company@gmail.com</div>

          <div>456-456-4512
</div>

        
        </div>


      </div>

    </div>

    </div>


<br><hr style="color:white;"><br>
  <img src="facebook1.png" style="height:45px; width:40px; margin-left:400px;"> 
         <img src="twitter.png" style="height:45px; width:50px; margin-left:40px;">
         <img src="youtube.png" style="height:50px; width:50px; margin-left:40px;">
         <img src="insta2.png" style="height:50px; width:50px; margin-left:40px;">
         <img src="linkedin.png" style="height:50px; width:50px; margin-left:40px;">	
<br><br><hr style="color:white;">
  </footer>

  <!-- End Footer -->


  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  

<!-- Custom Script -->
  <script src="js/index.js"></script>
</body>

</html>