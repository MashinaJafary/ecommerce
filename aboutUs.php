<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>About</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Font Awsome icons-->
	  <script src="https://kit.fontawesome.com/eced52bf7d.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet" />


    <link rel="stylesheet" href="assets/css/style.css">

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
    <a class="nav-link mx-4  active" href="aboutUs.php">ABOUT US</a>
              </li>
              <li class="nav-item">
    <a class="nav-link mx-4" href="contact.php">CONTACT</a>
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

<div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- About Details Start -->
        <div class="about-details section-padding30">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-1 col-lg-8">
                        <div class="about-details-cap mb-50">
                            <h4>Our Mission</h4>
                            <p>To enrich our customers's lives throught the power of high quality sportswear, gadgets and footwear.
                            </p>
                            
                        </div>

                        <div class="about-details-cap mb-50">
                            <h4>Our Vision</h4>

                            <p>Through an international network linked by advanced technology we aspire to become an established premium provider of sportswear, gadgets and footwear to our customers at the lowest price  possible.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>