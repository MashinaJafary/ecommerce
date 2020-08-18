<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'sports');
    
if (isset($_POST['register'])) {
$username=$_POST['username'];
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$region=$_POST['region'];
$district=$_POST['district'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if($password !=$password2){
    die("Passwords Don't match");
}
$sql_u = "SELECT * FROM customers WHERE username='$username'";
$sql_e = "SELECT * FROM customers WHERE email='$email'";
$res_u = mysqli_query($conn, $sql_u);
$res_e = mysqli_query($conn, $sql_e);

if (mysqli_num_rows($res_u) > 0) {
  echo "username already taken";
}else if(mysqli_num_rows($res_e) > 0){
  echo "email already taken"; 	
}else{
     $query = "INSERT INTO customers (username,contact,region,district,fullname,email, password) 
              VALUES ('$username','$contact','$region','$district','$fullname', '$email', '".md5($password)."')";
     $results = mysqli_query($conn, $query);
     $_SESSION['username']=$username;
     header('location:home.php');
}

}
?>
<!DOCTYPE html>
<html>

     <!-- Font Awsome icons-->
     <script src="https://kit.fontawesome.com/eced52bf7d.js" crossorigin="anonymous"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="style.css" type="text/css" rel="stylesheet" />

<head>
  <title>Registration</title>
  
</head>
<body>
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
    <a class="nav-link mx-4" href="shop.php">SHOP</a>
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
    <a class="nav-link mx-4 active" href="register.php">REGISTER</a>
              </li>
    
		 
</ul>
	</div>
</nav>
  </div>

  <div class="no-records">
      <h2>Register</h2>
  
	
  <form method="post" action="register.php">

      <label>Full Name</label><br>
  	  <input type="text" name="fullname" required><br>

        <label>Username</label><br>
  	  <input type="text" name="username" required><br>

  	  <label>Email</label><br>
  	  <input type="email" name="email" required><br>

		<label>Phone Number</label><br>
  	  <input type="tel" name="contact" placeholder="example +255786560504" pattern="(\+255)\d{9}" required><br>

		<label>Region</label><br>
  	  <input type="text" name="region" required><br>

        <label>District</label><br>
  	  <input type="text" name="district" required><br>
  	 
	    <label>Password</label><br>
  	  <input type="password" name="password" required><br>
   
  	  <label>Confirm password</label><br>
  	  <input type="password" name="password2" required><br>
 
  	  <button type="submit" name="register">Register</button>
  	 
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  </div>
</body>
</html>