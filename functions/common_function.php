<?php

// including connection file
include("./includes/connect.php");

// getting product function start

function getProducts(){
    global $con;
    //if no categories selected ##for home page
    if(!isset($_GET['categories'])){

    // Fetching the products
    $select_query = "SELECT * FROM products ORDER BY rand() LIMIT 0,2";
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
          <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>
      </div>
    </div>";
    }

    }
}


// getting product function end

// getting all products

function getAllProducts(){
  global $con;
    //if no categories selected ##for home page
    if(!isset($_GET['categories'])){

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
          <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>
      </div>
    </div>";
    }

    }
}




// getting product by category start

function getProductsbByCategories(){
    global $con;
    //if categories selected ##for individual category page
    if(isset($_GET['categories'])){
    $category_id = $_GET['categories'];
    // Fetching the products
    $select_query = "SELECT * FROM products WHERE category_id = $category_id ORDER BY rand() LIMIT 0,9";
    $result_query = mysqli_query($con,$select_query);

    $numOfRows = mysqli_num_rows($result_query); // counting rows
    if($numOfRows==0){
        echo "<h2 class='text-center'>No Stock :(</h2>";
    }
    else{
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
          <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>
      </div>
    </div>";
    }
    }

    }
}

// getting product by category end



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

// searching products function start

function searchProducts(){
  global $con;
    //if no categories selected ##for home page
    if(isset($_GET['search_data_product'])){
      $searchValue = $_GET['search_data'];
    // Fetching the products
    $search_query = "SELECT * FROM products WHERE product_keywords LIKE '%$searchValue%'";
    $result_query = mysqli_query($con,$search_query);
    // $row = mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    $numOfRows = mysqli_num_rows($result_query); // counting rows
    if($numOfRows==0){
        echo "<h2 class='text-center'>No Result Matched :(</h2>";
    }
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
          <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>
      </div>
    </div>";
    }

    }
}

// searching products function end

// view details start
function view_details(){
  global $con;
  if(isset($_GET['product_id'])){
    if(!isset($_GET['categories'])){
      $product_id = $_GET['product_id'];
      $select_query = "SELECT * FROM products WHERE product_id='$product_id'";
      $result_query = mysqli_query($con, $select_query);

      while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
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
            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
          </div>
        </div>
      </div>
      <div class='col-md-8'>
        <!-- related cards -->
        <div class='row'>
            <div class='col-md-12'>
                <h4 class='text-center text-info mb-5'>Related Products</h4>
            </div>
            <div class='col-md-6'>
                <img src='./assets/images/product_images/$product_image2' class='card-img-top' alt='$product_title'>
            </div>
            <div class='col-md-6'>
                <img src='./assets/images/product_images/$product_image3' class='card-img-top' alt='$product_title'>
            </div>
        </div>
    </div>

      ";
      }
    }
  }
}

// view details end


?>