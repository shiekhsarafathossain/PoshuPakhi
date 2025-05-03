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
<!-- Bootstrap CSS Link Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Bootstrap CSS Link End -->

<!-- Font Awesome Link Start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Font Awesome Link End -->

<!-- Style.css Link Start -->
<link rel="stylesheet" href="./assets/css/style.css">
<!-- Style.css Link End -->

<style>
    .cart_img{
    width : 100px;
    height:100px;
    object-fit: contain;
}
</style>
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup>Cart</a>
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
  <?php
    cart();
  ?>
<!-- calling cart function start -->


<!-- calling cart function end -->

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
    

    <!-- Cart start -->

    <div class="cointainer">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Product Image</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Remove</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- php code to display dynamic data start -->
                    <?php
                    
                        global $con;
                      
                        $get_ip_address = getIPAddress();
                        $total_price =0;
                        $cart_query = "SELECT * FROM cart_details WHERE  ip_address='$get_ip_address'";
                        $result = mysqli_query($con, $cart_query);
                      
                        while($row=mysqli_fetch_array($result)){
                          $product_id=$row['product_id'];
                      
                          $select_products = "SELECT * FROM products WHERE product_id ='$product_id'";
                          $result_products = mysqli_query($con, $select_products);
                      
                          while($row_product_price=mysqli_fetch_array($result_products)){
                            $product_price = array($row_product_price['product_price']);
                            $price_single_price = $row_product_price['product_price'];
                            $product_title = $row_product_price['product_title'];
                            $product_image1 = $row_product_price['product_image1'];
                            $product_values = array_sum($product_price);
                            $total_price += $product_values;
                

                    ?>

                    <!-- php code to display dynamic data end -->

                    <tr>
                        <td><?php echo $product_title?></td>
                        <td><img src="./assets/images/product_images/<?php echo $product_image1?>" alt="Logo" class="cart_img"></td>
                        <td><input type="text" name=""  id="" class="form-input w-50"></td>
                        <td><?php echo $price_single_price?>/-</td>
                        <td><input type="checkbox"></td>
                        <td>
                            <button class="bg-info px-3 py-2 border-0 mx-3">Update</button>
                            <button class="bg-info px-3 py-2 border-0 mx-3">Remove</button>
                        </td>
                    </tr>

                    <?php }
                        }?>
                </tbody>
            </table>
            <!-- subtotal start -->
            <div class="d-flex mb-5">
                <h4 class="px-3">Subtotal: <strong class="text-info"><?php echo $total_price?>/-</strong></h4>
                <a href="index.php"><button class="bg-info px-3 py-2 border-0 mx-3">Continue Shopping</button></a>
                <a href="#"><button class="bg-secondary p-3 py-2 border-0 text-light">Checkout</button></a>
            </div>
            <!-- subtotal end -->
        </div>
    </div>

    <!-- Cart End  -->

    <!-- Php Code -->

    <?php
    
    //calling function getProducts()
    //getProducts();

    

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