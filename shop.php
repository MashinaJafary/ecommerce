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
 
	  
	  <!--This is the Navigation Bar-->
	   <!--This is the Header-->
	  
<h4 class="text-dark bg-white m-0 p-3"><img class="image" src="product-images/try2.jpg" width="150" height="150" alt="#"/> SPORTS ONLINE SHOP </h4>
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
    <a class="nav-link mx-4 active" href="shop.php">SHOP</a>
               </li>
               <li class="">
    <a class="nav-link mx-4" href="index.php">CART</a>
                </li>
               <li class="nav-item">
    <a class="nav-link mx-4" href="aboutUs.php">ABOUT US</a>
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
	  

  <div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "Tsh".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	
	?>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
