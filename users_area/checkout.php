<!-- Connect File -->
<?php
  include("../Includes/connect.php");
  @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoshuPakhi Checkout</title>
<!-- Bootstrap CSS Link Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Bootstrap CSS Link End -->

<!-- Font Awesome Link Start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Font Awesome Link End -->
<link rel="stylesheet" href="style.css">


<style>
/* font start */
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap');

.open-sans-font {
  font-family: "Open Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
}

/* font end */
/* 
body {
  background: linear-gradient(135deg, #FFFFFF 0%, #F0F4FF 100%) !important;
  margin: 0;
  padding: 0;
} */

.logo{
  width:70px;
}

/* card style start */
.card-img-top{
  height: 200px;
}

.top-bar {
    text-align: center !important;
    background: linear-gradient(135deg, #C4D9FF 0%, #5A8DFF 100%) !important;
    
}


/* card style end */

.nav-custom{
  background: linear-gradient(135deg, #C5BAFF 0%, #8A77FF 100%) !important;
}


/* cart.php start */
.cart_img {
  width: 100px;
  height: 100px;
  object-fit: contain;
}
/* cart.php end */

.footer-custom{
  background: linear-gradient(135deg, #C5BAFF 0%, #8A77FF 100%) !important;
}

/* button start */
.button-addtocart-color {
  background: linear-gradient(135deg, #C4D9FF, #91B9FF) !important;
  font-weight: bold;
  color: #000;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.button-addtocart-color:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

.button-viewmore-color {
  background-color: rgba(0, 0, 0, 0.05) !important;
  color: #000;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.button-viewmore-color:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}


/* button end */

/* sidebar start */

.side-bar{
  height: 100%;
  background: linear-gradient(135deg, #E8F9FF 10%, #A0D8FF 100%) !important;
}
.category-title{
  background: linear-gradient(135deg, #E8F9FF 10%, #A0D8FF 100%) !important;
  font-size: large;
  font-weight: bold;

}
.category-item {
  background: linear-gradient(135deg, #E8F9FF 10%, #A0D8FF 100%) !important;
  margin: 5px;
  border-radius: 5px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.category-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  background: linear-gradient(135deg, #C4D9FF 10%, #91B9FF 100%) !important;
  transition: all 0.3s ease;
}

/* sidebar end */


/* card style start*/
.card {
  background: #ffffffcc; /* white with slight transparency */
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
  padding: 20px;
  border-radius: 10px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  backdrop-filter: blur(8px); /* soft blur behind card for depth */
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
}

.title-fixed {
  height: 1.5em; /* fits 1-2 lines */
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.description-fixed {
  height: 4em; /* fits around 4-5 lines */
  /* overflow: hidden;
  text-overflow: ellipsis; */
}

.price{
  font-size: large;
  font-weight: bolder;
}

/* card style end */

</style>

</head>
<body class="open-sans-font">
<!-- Navbar Start -->
<!-- First Part Start -->
<div class="navbar navbar-expand-lg login-bar">
      <ul class="navbar-nav me-auto">
      <?php
      if(!isset($_SESSION['username'])){
          echo "<li class='nav-item'>
        <a class='nav-link' href='#'>Welcome Guest</a>
      </li>";
        }
        else{
          echo "<li class='nav-item'>
        <a class='nav-link' href='profile.php'>Welcome ".$_SESSION['username']."</a>
      </li>";
        }
     
        if(!isset($_SESSION['username'])){
          echo "<li class='nav-item'>
        <a class='nav-link' href='user_login.php'>Login</a>
      </li>";
        }
        else{
          echo "<li class='nav-item'>
        <a class='nav-link' href='logout.php'>Logout</a>
      </li>";
        }

      ?>
      </ul>

    </div>
<!-- First Part End -->

<!-- Second Part Start -->
    <div class="container-fluid p-0">
        
<nav class="navbar navbar-expand-lg nav-custom">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="../index.php"><img src="../assets/images/logo.png" alt="logo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contact.php">Contact</a>
        </li>
    
      </ul>
      <form class="d-flex" role="search" action="../search_product.php" method="GET">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">

        <input class="btn btn-outline-light" type="submit" value="Search" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
    </div>
<!-- Second Part End -->

<!-- Navbar End -->


<!-- Center Part Start -->
<!-- Title Part Start -->
<div class="top-bar">
  <h3 class="text-center pt-2 mb-0">Welcome to PoshuPakhi</h3>
  <p class="text-center pb-2 mb-0 pt-0">Everything for Your Pets & Birds.</p>
</div>
<!-- Title Part End -->

  <div class="col-md-12">
    <!-- Product Start -->
    <div class="row mx-0">
        <?php
        
        if(!isset($_SESSION['username'])){
            include('./user_login.php');

        }
        else{
            include('./payment.php');
        }
        
        ?>

    </div>
    <!-- Product End -->
  </div>
<!-- Center Part End -->
</div>



<!-- Footer Start -->
<?php
  include("../Includes/footer.php");
?>
<!-- Footer End -->
    
<!-- Bootstrap JS Link Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap JS Link End -->
</body>
</html>