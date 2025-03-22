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
     
</head>
<body>
    <!-- Navbar -->
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
    <div class="container-fluid p-0">
        <div class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
            <img src="../assets/images/logo.png" alt="logo" class="logo">
            </div>
        </div>
    </div>

    <!-- Button Part -->
     <div class="button text-center">
        <button><a href="" class="nav-link text-light bg-info my-1">Insert Product</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Product</a></button>
        <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
        <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
        <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
        <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
        <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
     </div>





    <div class="container my-5 ">
        <?php 
        if(isset($GET["insert_category"])){
            include("insert_categories.php");
        }
        ?>
    </div>

    <!-- Footer Start -->
    <footer class="py-3 my-4 bg-info footer">
        <p class="text-center text-body-secondary">All rights reserved © 2025 by Sheikh Sarafat Hossain</p>
    </footer>
    <!-- Footer End -->



<!-- Bootstrap JS Link Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap JS Link End -->
</body>
</html>