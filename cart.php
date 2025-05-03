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
  <title>PoshuPakhi Cart</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- Custom Style -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <style>
    .cart_img {
      width: 100px;
      height: 100px;
      object-fit: contain;
    }
  </style>
</head>
<body>

<!-- Navbar Start -->
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

<div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
      <img src="./assets/images/logo.png" alt="logo" class="logo">
      <a class="navbar-brand" href="#">PoshuPakhi Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="display_all.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i>
              <sup><?php cart_item(); ?></sup>Cart</a>
          </li>
        </ul>
        <form class="d-flex" role="search" action="search_product.php" method="GET">
          <input class="form-control me-2" type="search" placeholder="Search" name="search_data">
          <input class="btn btn-outline-light" type="submit" value="Search" name="search_data_product">
        </form>
      </div>
    </div>
  </nav>
</div>
<?php cart(); ?>
<!-- Navbar End -->

<!-- Title Section -->
<div class="bg-light">
  <h3 class="text-center">PoshuPakhi</h3>
  <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, molestiae.</p>
</div>

<!-- Main Content -->
<div class="row m-auto">
  <div class="col-md-2 bg-secondary p-0 text-center">
    <!-- Sidebar Start -->
    <ul class="navbar-nav me-auto">
      <li class="nav-item bg-info">
        <h3>Category</h3>
      </li>
      <?php getCategory(); ?>
    </ul>
    <!-- Sidebar End -->
  </div>

  <div class="col-md-9 m-auto">
    <!-- Product Area -->
    <div class="row">
      <!-- Cart Section -->
      <div class="container">
        <div class="row">
          <form action="" method="post">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th>Product Title</th>
                  <th>Product Image</th>
                  <th>Quantity</th>
                  <th>Unit Price</th>
                  <th>Total</th>
                  <th>Remove</th>
                </tr>
              </thead>
              <tbody>
                <?php
                global $con;
                $get_ip_address = getIPAddress();
                $total_price = 0;

                $cart_query = "SELECT * FROM cart_details WHERE ip_address='$get_ip_address'";
                $result = mysqli_query($con, $cart_query);

                if (mysqli_num_rows($result) == 0) {
                  echo "<tr><td colspan='6'><h4>Your cart is empty.</h4></td></tr>";
                }

                $index = 0;
                while ($row = mysqli_fetch_array($result)) {
                  $product_id = $row['product_id'];
                  $quantity = $row['quantity'];

                  $product_query = "SELECT * FROM products WHERE product_id = '$product_id'";
                  $product_result = mysqli_query($con, $product_query);

                  while ($product = mysqli_fetch_array($product_result)) {
                    $title = $product['product_title'];
                    $image = $product['product_image1'];
                    $price = $product['product_price'];
                    $sub_total = $price * $quantity;
                    $total_price += $sub_total;
                ?>
                <tr>
                  <td><?php echo $title; ?></td>
                  <td><img src="./assets/images/product_images/<?php echo $image; ?>" class="cart_img" alt=""></td>
                  <td><input type="number" name="quantities[]" value="<?php echo $quantity; ?>" class="form-control w-50 mx-auto" min="1"></td>
                  <td><?php echo $price; ?>/-</td>
                  <td><?php echo $sub_total; ?>/-</td>
                  <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id; ?>"></td>
                </tr>
                <input type="hidden" name="product_ids[]" value="<?php echo $product_id; ?>">
                <?php
                  }
                }
                ?>
              </tbody>
            </table>

            <!-- Buttons & Subtotal -->
            <div class="d-flex justify-content-between mb-4">
              <h4>Subtotal: <strong class="text-info"><?php echo $total_price; ?>/-</strong></h4>
              <div>
                <input type="submit" value="Update Cart" class="btn btn-info text-white mx-2" name="update_cart">
                <input type="submit" value="Remove Selected" class="btn btn-danger text-white mx-2" name="remove_cart">
                <a href="index.php" class="btn btn-secondary">Continue Shopping</a>
                <a href="#" class="btn btn-success">Checkout</a>
              </div>
            </div>
          </form>

          <!-- Handle Form Logic -->
          <?php
          if (isset($_POST['update_cart'])) {
            $quantities = $_POST['quantities'];
            $product_ids = $_POST['product_ids'];

            foreach ($product_ids as $key => $pid) {
              $qty = (int)$quantities[$key];
              if ($qty > 0) {
                $update_query = "UPDATE cart_details SET quantity=$qty WHERE product_id=$pid AND ip_address='$get_ip_address'";
                mysqli_query($con, $update_query);
              }
            }
            echo "<script>window.location.href='cart.php';</script>";
          }

          if (isset($_POST['remove_cart']) && isset($_POST['removeitem'])) {
            foreach ($_POST['removeitem'] as $remove_id) {
              $delete_query = "DELETE FROM cart_details WHERE product_id=$remove_id AND ip_address='$get_ip_address'";
              mysqli_query($con, $delete_query);
            }
            echo "<script>window.location.href='cart.php';</script>";
          }
          ?>
        </div>
      </div>

      <!-- Load Products by Category -->
      <?php getProductsbByCategories(); ?>
    </div>
  </div>
</div>

<!-- Footer Start -->
<?php include("includes/footer.php"); ?>
<!-- Footer End -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
