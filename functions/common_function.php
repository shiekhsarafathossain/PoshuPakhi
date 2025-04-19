<?php

// including connection file
include("./includes/connect.php");

// getting product function start

function getProducts(){
    global $con;
    // Fetching the products
    $select_query = "SELECT * FROM products ORDER BY rand()";
    $result_query = mysqli_query($con,$select_query);
    // $row = mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row = mysqli_fetch_assoc($result_query)){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
    //  $product_keywords = $row['product_keywords'];
      $category_id = $row['category_id'];
      $product_image1 = $row['product_image1'];
      $product_image2 = $row['product_image2'];
      $product_image3 = $row['product_image3'];
      $product_price = $row['product_price'];
      echo "<div class='col-md-4 mb-3'>
      <div class='card'>
        <img src='./assets/images/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <a href='#' class='btn btn-primary'>Add to cart</a>
          <a href='#' class='btn btn-secondary'>View More</a>
        </div>
      </div>
    </div>";
    }
}

// getting product function end

// getting category function start

function getCategory(){
    global $con; //making con global variable
    $select_category = "SELECT * FROM categories";
    $result_category = mysqli_query($con,$select_category);
    
    while($row_data = mysqli_fetch_assoc($result_category)){
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo "<li class='nav-item bg-info'>
        <a href='index.php?categories=$category_id' class='nav-link bg-primary'>$category_title</a>
        </li>";
    }
}

// getting category function end

?>