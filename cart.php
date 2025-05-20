<!-- Connect File -->
<?php
  include("./Includes/connect.php");
  include("./functions/common_function.php");
  session_start();
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
  <link rel="stylesheet" href="./style.css">
  
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
<?php include("./Includes/navbar.php"); ?>
<!-- Navbar End -->

<!-- calling cart -->
<?php cart(); ?>


<!-- Title Section -->
<?php include("./Includes/title_bar.php"); ?>
<!-- Main Content -->


<div class="row mx-0">
  <div class="col-md-2 p-0 text-center">
    <!-- Sidebar Start -->
    <ul class="navbar-nav me-auto side-bar">
      <li class="nav-item pt-2">
        <h3 class="fw-bold">Category</h3>
      </li>
      <?php getCategory(); ?>
    </ul>
    <!-- Sidebar End -->
  </div>

  <div class="col-md-9 mx-auto mt-3">
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
              <h4>Subtotal: <strong class="text-info"><?php echo $total_price; ?> /- BDT</strong></h4>
              <div>
                <input type="submit" value="Update Cart" class="btn btn-dark text-white mx-2" name="update_cart">
                <input type="submit" value="Remove Selected" class="btn btn-danger text-white mx-2" name="remove_cart">
                <a href="index.php" class="btn btn-warning text-white mx-2">Continue Shopping</a>
                <a href="./users_area/checkout.php" class="btn btn-success text-white mx-2" style="margin-right:0 !important; ">Checkout</a>
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
            echo "<script>window.location.href='./cart.php';</script>";
          }

          if (isset($_POST['remove_cart']) && isset($_POST['removeitem'])) {
            foreach ($_POST['removeitem'] as $remove_id) {
              $delete_query = "DELETE FROM cart_details WHERE product_id=$remove_id AND ip_address='$get_ip_address'";
              mysqli_query($con, $delete_query);
            }
            echo "<script>window.location.href='./cart.php';</script>";
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
<?php include("./Includes/footer.php"); ?>
<!-- Footer End -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
