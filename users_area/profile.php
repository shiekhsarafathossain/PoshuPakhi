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
    <title>Profile Page</title>
<!-- Bootstrap CSS Link Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Bootstrap CSS Link End -->

<!-- Font Awesome Link Start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Font Awesome Link End -->

<!-- Style.css Link Start -->
<link rel="stylesheet" href="style.css">
<!-- Style.css Link End -->

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
        <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
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
          <a class="nav-link" href="user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup>Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:<?php total_cart_price(); ?>/-</a>
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

<div class="bg-light">
  <h3 class="text-center">PoshuPakhi</h3>
  <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, molestiae ad optio ratione magni dicta.</p>
</div>

<!-- Title Part End -->

<!-- Sidebar Start -->

<div class="row mx-0"> <!-- row m-auto for fixing bug side width -->
    <div class="col-md-2 bg-secondary p-0 text-center">
    <!-- SideBar Start-->
        <ul class="navbar-nav me-auto">
            <li class="nav-item bg-info text-light">
                <h4 class="pt-2">Your Profile</h4>
            </li>

            <?php
            $username = $_SESSION['username'];
            $user_image = "SELECT * FROM user_table WHERE username='$username'";
            $user_image = mysqli_query($con,$user_image);
            $row_image = mysqli_fetch_array($user_image);
            $user_image = $row_image['user_image'];
            
            echo "<li class='nav-item bg-info text-light '>
            <img src='../assets/images/user_images/$user_image' alt='User Image' class='pp-image'>
            </li>"

            ?>


            
            <li class="nav-item">
                <a class="nav-link text-light" href="profile.php">Edit Pending Orders</a>
            </li>
            <li class="nav-item text-light">
                <a class="nav-link bg-info  text-light" href="profile.php?edit_account">Edit Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-light" href="profile.php?my_orders">My orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-info   text-light" href="profile.php?delete_account">Delete Account</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-light" href="logout.php">Logout</a>
            </li>
        </ul>

    </div>
    <!-- SideBar End -->
    
    <div class="col-md-10 text-center">
    <!-- Product Start -->
        <?php get_user_order_details(); 
        if(isset($_GET['edit_account'])){
          include('edit_account.php');
        }
        if(isset($_GET['my_orders'])){
          include('user_orders.php');
        }
        if(isset($_GET['delete_account'])){
          include('delete_account.php');
        }
        ?>
    <!-- Product End -->
    </div>


</div>
<!-- Sidebar Part End -->
<!-- Center Part End -->

<!-- Footer Start -->
<?php
  include("../includes/footer.php");
?>
<!-- Footer End -->
    
<!-- Bootstrap JS Link Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap JS Link End -->
</body>
</html>