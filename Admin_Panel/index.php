<!-- Connect File -->
<?php
  include("../Includes/connect.php");
  include("../functions/common_function.php");
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS Link Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap CSS Link End -->
    <!-- Font Awesome Link Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome Link End -->
    <!-- Style.css Link Start -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Style.css Link End -->
     
<style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap');


.open-sans-font {
  font-family: "Open Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
}

.logo{
  width:100px;
}

/* card style start */
.card-img-top{
  height: 200px;
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

.nav-custom{
  background-color: #C5BAFF !important;
}
/* dfgdfd */

/* cart.php start */
.cart_img {
  width: 100px;
  height: 100px;
  object-fit: contain;
}
/* cart.php end */

.top-bar{
  background-color: #C4D9FF !important;
}

body{
   background-color: white !important;
}

.footer-custom{
  background-color: #C5BAFF !important;
}
.category-item{
  background-color: #E8F9FF !important;
  margin: 5px;
  border-radius: 5px; 
}
.button-addtocart-color{
    background-color: #C4D9FF !important;
    font-weight: bold;
}
.button-addtocart-color:hover{
  transform: translateY(-5px);
  box-shadow: 20 20px 20px rgba(0, 0, 0, 0.1);
}
.button-viewmore-color{
  background-color: rgba(0, 0, 0, 0.1) !important;
}
.button-viewmore-color:hover{
  transform: translateY(-5px);
  box-shadow: 20 20px 20px rgba(0, 0, 0, 0.1);
}
.category-item:hover{
  transform: translateX(-5px);
  box-shadow: 20 20px 20px rgba(0, 0, 0, 0.1);
  background-color: #C4D9FF !important;

}


.side-bar{
  height: 100%;
  background-color: #E8F9FF !important;
}

.category-title{
  background-color: #E8F9FF !important;
  font-size: large;
  font-weight: bold;
  border-radius:50px;
}
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
        <a class='nav-link' href='../users_area/profile.php'>Welcome ".$_SESSION['username']."</a>
      </li>";
        }
     
        if(!isset($_SESSION['username'])){
          echo "<li class='nav-item'>
        <a class='nav-link' href='../users_area/user_login.php'>Login</a>
      </li>";
        }
        else{
          echo "<li class='nav-item'>
        <a class='nav-link' href='../users_area/logout.php'>Logout</a>
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
    
    <a class="navbar-brand" href="index.php"><img src="../assets/images/logo.png" alt="logo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="search_product.php" method="GET">
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
<?php include("../Includes/title_bar.php"); ?>
<!-- Title Part End -->



<div class="row mx-0"> <!-- row m-auto for fixing bug side width -->
    <!-- SideBar Start-->
    <div class="col-md-2 p-0 text-center">
        <ul class="navbar-nav me-auto side-bar">
            <li class="nav-item category-title pt-2">
                <h3 class="fw-bold">Admin Dashboard</h3>
            </li>
            <li class='nav-item category-item'>
                <a href='insert_product.php' class='nav-link'>Insert Product</a>                
            </li>
            <li class='nav-item category-item'>
                <a href='index.php?view_products' class='nav-link'>View Products</a>                
            </li>
            <li class='nav-item category-item'>
                <a href='index.php?insert_category' class='nav-link'>Insert Cateogory</a>                
            </li>
            <li class='nav-item category-item'>
                <a href='#' class='nav-link'>View Categories</a>                
            </li>
            <li class='nav-item category-item'>
                <a href='#' class='nav-link'>View Order List</a>                
            </li>
            <li class='nav-item category-item'>
                <a href='#' class='nav-link'>View Payment List</a>                
            </li>
            <li class='nav-item category-item'>
                <a href='#' class='nav-link'>View User List</a>                
            </li>
            <li class='nav-item category-item'>
                <a href='#' class='nav-link'>Register Admin/Moderator</a>                
            </li>
            <li class='nav-item category-item'>
                <a href='#' class='nav-link'>Sales Report</a>                
            </li>
            <li class='nav-item category-item'>
                <a href='#' class='nav-link'>#</a>                
            </li>
            <li class='nav-item category-item'>
                <a href='#' class='nav-link'>#</a>                
            </li>
            <li class='nav-item category-item'>
                <a href='#' class='nav-link'>#</a>                
            </li>
        </ul>
    </div>
    <!-- SideBar End -->

    <div class="col-md-9 pt-3 mx-auto">
        <!-- Product Start -->
        <div class="row">
            <div class="container">
            <?php 
                if(isset($_GET["insert_category"])){
                    include("insert_categories.php");
                }
                if(isset($_GET["view_products"])){
                    include("view_products.php");
                }
            ?>
            </div>
        </div>
        <!-- Product End -->
    </div>

</div>
<!-- Center Part End -->
    

<!-- Footer Start -->
<?php include("../Includes/footer.php"); ?>
<!-- Footer End -->


<!-- Bootstrap JS Link Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap JS Link End -->
</body>
</html>