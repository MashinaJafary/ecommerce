<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Font Awsome icons-->
	  <script src="https://kit.fontawesome.com/eced52bf7d.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet" />

  </head>
  <body>
       <!--This is the Header-->
	  
	  <div class="header">
<h4 class="text-dark bg-white m-0 p-3"><img class="image" src="product-images/try2.jpg" width="150" height="150" alt="#"/> Sports Online Shop </h4>
	   </div>
	  
	  <!--This is the Navigation Bar-->
	  
<nav class="navbar navbar-expand-md bg-dark navbar-dark text-center">
	
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
	
                <li class="nav-item">
    <a class="nav-link mx-4" href="home.php">HOME</a>
                </li>
              <li class="nav-item">
    <a class="nav-link mx-4" href="shop.php">SHOP</a>
               </li>
               <li class="">
    <a class="nav-link mx-4" href="index.php">CART</a>
                </li>
               <li class="nav-item">
    <a class="nav-link mx-4" href="aboutUs.php">ABOUT US</a>
              </li>
              <li class="nav-item">
    <a class="nav-link mx-4  active" href="contact.php">CONTACT</a>
              </li>
              <li class="nav-item">
    <a class="nav-link mx-4 p-100 " href="login.php">LOGIN</a>
              </li>
              <li class="">
    <a class="nav-link mx-4" href="register.php">REGISTER</a>
              </li>
		 
</ul>
	</div>
</nav>


<!-- Footer -->
<div class="no-recods">
<footer class="page-footer font-small bg-warning bg-white">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">SPORTS ONLINE SHOP</h5>
        <p></p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">other related links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">CoICT</a>
          </li>
          <li>
            <a href="#!">TCRA</a>
          </li>
          <li>
            <a href="#!">TTCL</a>
          </li>
          <li>
            <a href="www.nit.ac.tz">NIT</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

     
     
      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">ADDRES</h5>
		  <address>
             P.O.BOX GROUP NO:2 <hr>
             DAR ES SALAAM-TANZANIA<hr>
             Tell: +255 786 560 504<hr>
             <a href="tz.technologyclub@gmail.com">tz.technologyclub@gmail.com</a>
		  </address>

       
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->


  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center pt-5 p-5">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-3" href="https://www.facebook.com" >
      <img src="svg/Facebook_colored_svg_copy.svg" alt=""/> 
		</a>
    </li>
    <li class="list-inline-item">
      <a href="https://twitter.com" class="btn-floating btn-tw mx-3">
       <img src="svg/Twitter_colored_svg.svg" alt=""/> 
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-3" href="https://www.instagram.com/">
       <img src="svg/Instagram_colored_svg.svg" alt=""/> 
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-3" href="https://www.linkedin.cn/uas/login">
       <img src="svg/Linkedin_unofficial_colored_svg.svg" alt=""/> 
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-3" href="https://www.youtube.com/" >
       <img src="svg/Youtube_colored_svg.svg" alt=""/>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="home.php"> GROUP NO:2</a>
  </div>
  <!-- Copyright -->

</footer>




</body>
</html>