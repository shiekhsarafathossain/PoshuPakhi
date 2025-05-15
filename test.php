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
    <title>PoshuPakhi - Premium UI</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f8f9fa, #e3e6e9);
            color: #333;
        }

        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.6);
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        .logo {
            max-height: 50px;
        }

        .nav-link {
            font-size: 20px;
            padding: 10px;
            transition: all 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: #007bff;
            transform: scale(1.1);
        }

        .hero {
            padding: 50px 0;
            text-align: center;
            color: #000;
        }

        .btn {
            border-radius: 12px;
            font-size: 18px;
            padding: 12px 20px;
            transition: all 0.3s ease-in-out;
            background: linear-gradient(135deg, #007bff, #00aaff);
            color: #fff;
            border: none;
        }

        .btn:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #0056b3, #0080ff);
        }

        .card {
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(15px);
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="./assets/images/logo.png" class="logo"></a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-home"></i></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-shopping-cart"></i></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-user"></i></a></li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search">
        <button class="btn">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<div class="hero">
  <h1>Welcome to PoshuPakhi</h1>
  <p>Premium pet accessories with an Apple-like design experience.</p>
  <button class="btn">Explore Now</button>
</div>

<!-- Product Section -->
<div class="container mt-5">
  <div class="row">
    <?php getProducts(); ?>
  </div>
</div>

<!-- Footer -->
<footer class="text-center py-3 bg-white">
  <?php include("includes/footer.php"); ?>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>