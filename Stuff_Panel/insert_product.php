<?php
include("../includes/connect.php");
if(isset($_POST['insert_products'])){
    $product_title = $_POST['product_title'];
    $product_description = $_POST['description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    $product_price_buying = $_POST['product_price_buying'];
    $seller_name = $_POST['seller_name'];
    $seller_contact = $_POST['seller_contact'];
    $stock_quantity = $_POST['stock_quantity'];
    $product_status = 'true';

    //Accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];
    
    //Accessing image temp name

    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    //Checking empty Condition

    if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_category=='' or $product_price=='' or $temp_image1=='' or $temp_image2=='' or $temp_image3==''){
        echo "<script>alert('Please fill all the fields')</script>";
        exit();
    }
    else{

        //images
        move_uploaded_file($temp_image1,"../assets/images/product_images/$product_image1");
        move_uploaded_file($temp_image2,"../assets/images/product_images/$product_image2");
        move_uploaded_file($temp_image3,"../assets/images/product_images/$product_image3");

        //insert query
        $insert_products = "INSERT INTO `products` (product_title, product_description, product_keywords, category_id, product_image1, product_image2, product_image3, product_price, product_price_buying, seller_name, seller_contact, stock_quantity, date, status) VALUES 
        ('$product_title', '$product_description', '$product_keywords', '$product_category', '$product_image1', '$product_image2', '$product_image3', '$product_price', '$product_price_buying','$seller_name', '$seller_contact', '$stock_quantity', NOW(), '$product_status')";
        
        $result_query = mysqli_query($con,$insert_products);
        if($result_query){
            echo "<script>alert('Products inserted successfully')</script>";
        }
    }
}
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

.product_image{
      width: 100px;
      height: 100px;
      object-fit: contain;
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
  </div>
</nav>
    </div>
<!-- Second Part End -->
<!-- Navbar End -->

<!-- Center Part Start -->

<!-- Title Part Start -->
<?php include("../Includes/title_bar.php"); ?>
<!-- Title Part End -->

    <!-- Insert Products Start -->
    <div class="container mt-2">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data">

            <!-- Title Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product title" class="form-label">Product Title</label>
            <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
            </div>
            <!-- Title End -->
            
            <!-- Description Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="description" class="form-label">Product Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
            </div>
            <!-- Description End -->

            <!-- Keywords Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_keywords" class="form-label">Product Keywords</label>
            <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">
            </div>
            <!-- Keywords End -->

            <!-- Category Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_category" id="" class="form-select">
                <option value="">Select a Category</option>
                
                <?php
                    $select_query="Select * from categories";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                            $category_title=$row['category_title'];
                            $category_id=$row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                    }
                ?>
            </select>
            </div>
            <!-- Category End -->

            <!-- Image 1 Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image1" class="form-label">Product Image 1</label>
            <input type="file" name="product_image1" id="product_image1" class="form-control" autocomplete="off" required="required">
            </div>
            <!-- Image End -->
            <!-- Image 2 Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image2" class="form-label">Product Image 2</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control" autocomplete="off" required="required">
            </div>
            <!-- Image 2 End -->
            <!-- Image 3 Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image3" class="form-label">Product Image 3</label>
            <input type="file" name="product_image3" id="product_image3" class="form-control" autocomplete="off" required="required">
            </div>
            <!-- Image 3 End -->

            <!-- Product Price Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
            </div>
            <!-- Product Price End -->

            <!-- Product Buying Price Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price_buying" class="form-label">Product Buying Price</label>
            <input type="text" name="product_price_buying" id="product_price_buying" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
            </div>
            <!-- Product Buying Price End -->

            <!-- Wholeseller Name Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="seller_name" class="form-label">Wholeseller Name</label>
            <input type="text" name="seller_name" id="seller_name" class="form-control" placeholder="Enter Wholeseller name" autocomplete="off" required="required">
            </div>
            <!-- Wholeseller Name End -->

            <!-- Wholeseller Contact Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="seller_contact" class="form-label">Wholeseller Contact</label>
            <input type="text" name="seller_contact" id="seller_contact" class="form-control" placeholder="Enter Wholeseller Contact" autocomplete="off" required="required">
            </div>
            <!-- Wholeseller Contact End -->

            <!-- Wholeseller stock_quantity Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="stock_quantity" class="form-label">Stock Quantity</label>
            <input type="text" name="stock_quantity" id="stock_quantity" class="form-control" placeholder="Enter stock quantity" autocomplete="off" required="required">
            </div>
            <!-- Wholeseller stock_quantity End -->

            <!-- Product Button Start -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_products" class="btn button-addtocart-color" value="Insert Products">
            </div>
            <!-- Product Button End -->
        </form>
    </div>


    <!-- Insert Products End -->

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