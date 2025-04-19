<!-- Connect File -->
<?php
  include("Includes/connect.php");
  include("functions/common_function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoshuPakhi</title>
<!-- Bootstrap CSS Link Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Bootstrap CSS Link End -->

<!-- Font Awesome Link Start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Font Awesome Link End -->

<!-- Style.css Link Start -->
 <link rel="stylesheet" href="./assets/css/style.css">
<!-- Style.css Link End -->
</head>
<body>
<!-- Navbar Start -->
<!-- First Part Start -->
    <div class="navbar navbar-expand-lg bg-light">
      <ul class="navbar-nav me-auto">

      <li class="nav-item">
        <a class="nav-link" href="">Welcome Guest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Login</a>
      </li>

      </ul>

    </div>
<!-- First Part End -->

<!-- Second Part Start -->
    <div class="container-fluid p-0">
        
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <img src="./assets/images/logo.png" alt="logo" class="logo">
    <a class="navbar-brand" href="#">PoshuPakhi Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup>Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
    
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <input class="btn btn-outline-light" type="submit" value="Search">
      </form>
    </div>
  </div>
</nav>
    </div>
<!-- Second Part End -->
<!-- Navbar End -->

<!-- Center Part Start -->
<!-- Title Part Start -->

<div class="bg-light">
  <h3 class="text-center">PoshuPakhi</h3>
  <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, molestiae ad optio ratione magni dicta.</p>
</div>

<!-- Title Part End -->

<!-- Sidebar Start -->

<div class="row m-auto"> <!-- row m-auto for fixing bug side width -->
  <div class="col-md-2 bg-secondary p-0 text-center">
  <!-- SideBar Start-->
  <ul class="navbar-nav me-auto">
    <li class="nav-item bg-info">
      <h3>Category</h3>
    </li>
    
  <?php
    //calling function getCategory()
    getCategory();
    
  ?>

  <!-- SideBar End -->
  </div>
  <div class="col-md-9 m-auto">
    <!-- Product Start -->
    <div class="row">
    
    <!-- Php Code -->

    <?php
    
    //calling function getProducts()
    getProducts();

    //calling function getProducts()
    getProductsbByCategories()

    ?>

    </div>
    <!-- Product End -->
  </div>
<!-- Center Part End -->
</div>



<!-- Footer Start -->
<footer class="py-3 my-4 bg-info">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">All rights reserved © 2025 by Sheikh Sarafat Hossain</p>
  </footer>
<!-- Footer End -->
    
<!-- Bootstrap JS Link Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap JS Link End -->
</body>
</html>