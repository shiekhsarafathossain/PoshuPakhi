<?php

// including connection file
// include("./includes/connect.php");

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
          <p class='card-text'>Price: $product_price</p>
          <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
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
          <p class='card-text'>Price: $product_price</p>
          <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
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
          <p class='card-text'>Price: $product_price</p>
          <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
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
          <p class='card-text'>Price: $product_price</p>
          <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
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
            <p class='card-text'>Price: $product_price</p>
            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
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


// get ip_address start

function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  


// get ip_address end

// cart function start

function cart(){
  if(isset($_GET['add_to_cart'])){
    global $con;

    $get_ip_address = getIPAddress(); 
    
    $get_product_id = $_GET['add_to_cart'];

    $select_query = "SELECT * FROM cart_details WHERE ip_address='$get_ip_address' and product_id=$get_product_id";
    $result_query = mysqli_query($con, $select_query);

    $numOfRows = mysqli_num_rows($result_query); // counting rows
    if($numOfRows>0){
        echo "<script>alert('Item already present inside cart')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else{
      $insert_query = "INSERT INTO cart_details (product_id, ip_address,quantity) VALUES ($get_product_id,'$get_ip_address',1)";
      $result_query = mysqli_query($con, $insert_query);
      echo "<script>alert('Item is added to cart')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }
  }
}

// cart function end

// function for get cart item numbers start
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_address = getIPAddress(); 
    $select_query = "SELECT * FROM cart_details WHERE ip_address='$get_ip_address'";
    $result_query = mysqli_query($con, $select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  }
  else{
    global $con;
    $get_ip_address = getIPAddress(); 
    $select_query = "SELECT * FROM cart_details WHERE ip_address='$get_ip_address'";
    $result_query = mysqli_query($con, $select_query);
    $count_cart_items=mysqli_num_rows($result_query);
    }

    echo $count_cart_items;
  
}


//function for get cart item numbers end

//  total cart price start

function total_cart_price(){
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
      $product_values = array_sum($product_price);
      $total_price += $product_values;
    }

  }

  echo $total_price;

}

// total cart price end

//get user order details start
function get_user_order_details(){
  global $con;
  $username = $_SESSION['username'];
  $get_details = "SELECT * FROM user_table WHERE username='$username'";
  $result_query = mysqli_query($con,$get_details);
  while($row_query=mysqli_fetch_array($result_query)){
    $user_id = $row_query['user_id'];
    if(!isset($_GET['edit_account'])){
      if(!isset($_GET['my_orders'])){
        if(!isset($_GET['delete_account'])){
          $get_orders="SELECT * FROM user_orders WHERE user_id=$user_id AND order_status='pending'";
          $result_orders_query = mysqli_query($con,$get_orders);
          $row_count = mysqli_num_rows($result_orders_query);

          if($row_count>0){
            echo "<h3 class='text-center'>You have <span class='text-danger'>$row_count</span> pending orders.</h3>
            <p class='text-center'><a href='profile.php?my_orders' class='text-dark'>Order Details</a></p>";

          }
          else{
            echo "<h3 class='text-center'>You have <span class='text-success'>Zero</span> pending orders.</h3>
            <p class='text-center'><a href='../index.php' class='text-success'>Explore</a></p>";

          }
        }
      }
    }

  }
}

//get user order details end



?>