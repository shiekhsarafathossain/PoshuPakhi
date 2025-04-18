<?php
include("../includes/connect.php");
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
     
</head>
<body>
    <!-- Insert Products Start -->

    <div class="container mt-5">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data"></form>

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
                // Query to get all categories from the database
                $select_query = "SELECT * FROM categories";
                
                $result_query = mysqli_query($con, $select_query);
                while($row = mysqli_fetch_assoc($result_query)) {
                    $category_title = $row['category_title'];
                    // Loop through each category
                    
                    $category_id = $row['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                    // Print each option tag
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

            <!-- Product Price Start -->
            <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_products" class="btn btn-info" value="Insert Products">
            </div>
            <!-- Product Price End -->
            
        
    </div>


    <!-- Insert Products End -->

    <!-- Footer Start -->
    <footer class="py-3 my-4 mt-4 bg-info">
        <p class="text-center text-body-secondary">All rights reserved © 2025 by Sheikh Sarafat Hossain</p>
    </footer>
    <!-- Footer End -->



<!-- Bootstrap JS Link Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap JS Link End -->
</body>
</html>