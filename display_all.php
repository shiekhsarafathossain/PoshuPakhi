<!-- Connect File -->
<?php
  include("Includes/connect.php");
  include("functions/common_function.php");
  session_start();
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
<link rel="stylesheet" href="style.css">
<!-- Style.css Link End -->

</head>
<body class="open-sans-font">
<!-- Navbar Start -->

<?php include("Includes/navbar.php"); ?>
<!-- Navbar End -->

<!-- calling cart function start -->

<?php
    cart();
?>

<!-- calling cart function end -->

<!-- Center Part Start -->

<!-- Title Part Start -->

<?php include("Includes/title_bar.php"); ?>

<!-- Title Part End -->

<!-- Sidebar Start -->

<div class="row mx-0"> <!-- row m-auto for fixing bug side width -->
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
    
    //calling function getAllProducts()
    getAllProducts();

    //calling function getProducts()
    getProductsbByCategories();

    // $ip = getIPAddress();  
    // echo 'User Real IP Address - '.$ip;  

    ?>

    </div>
    <!-- Product End -->
  </div>
<!-- Center Part End -->
</div>



<!-- Footer Start -->
<?php
  include("includes/footer.php");
?>
<!-- Footer End -->
    
<!-- Bootstrap JS Link Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap JS Link End -->
</body>
</html>