<?php
include("../Includes/connect.php");
include("../functions/common_function.php");
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>

    <!-- Bootstrap CSS Link Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Link Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap');


.open-sans-font {
  font-family: "Open Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
}

.logo{
  width:100px;
}

/* card style start */
.card-img-top{
  height: 200px;
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

.nav-custom{
  background-color: #C5BAFF !important;
}
/* dfgdfd */

/* cart.php start */
.cart_img {
  width: 100px;
  height: 100px;
  object-fit: contain;
}
/* cart.php end */

.top-bar{
  background-color: #C4D9FF !important;
}

body{
   background-color: white !important;
}

.footer-custom{
  background-color: #C5BAFF !important;
}
.category-item{
  background-color: #E8F9FF !important;
  margin: 5px;
  border-radius: 5px; 
}
.button-addtocart-color{
    background-color: #C4D9FF !important;
    font-weight: bold;
}
.button-addtocart-color:hover{
  transform: translateY(-5px);
  box-shadow: 20 20px 20px rgba(0, 0, 0, 0.1);
}
.button-viewmore-color{
  background-color: rgba(0, 0, 0, 0.1) !important;
}
.button-viewmore-color:hover{
  transform: translateY(-5px);
  box-shadow: 20 20px 20px rgba(0, 0, 0, 0.1);
}
.category-item:hover{
  transform: translateX(-5px);
  box-shadow: 20 20px 20px rgba(0, 0, 0, 0.1);
  background-color: #C4D9FF !important;

}


.side-bar{
  height: 100%;
  background-color: #E8F9FF !important;
}

.category-title{
  background-color: #E8F9FF !important;
  font-size: large;
  font-weight: bold;
  border-radius:50px;
}
</style>
</head>
<body style="overflow-x: hidden !important;">

<div class="container-fluid m-3">
    <h2 class="text-center">User Login</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="from_checkout" value="<?php if(isset($_GET['checkout'])) { echo '1'; } ?>">
                <div class="form-outline mb-4">
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required name="user_username">
                </div>
                <div class="form-outline mb-4">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="Enter password" autocomplete="off" required name="user_password">
                </div>
                <div class="mt-4 pt-2">
                    <input type="submit" value="Login" class="button-addtocart-color py-3 px-3 border-0 w-100" name="user_login">
                </div>
            </form>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="user_registration.php" class="text-danger">Register</a></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
if(isset($_POST['user_login'])){
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    $from_checkout = isset($_POST['from_checkout']) ? $_POST['from_checkout'] : '';

    $select_query = "SELECT * FROM user_table WHERE username='$user_username'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);

    if($row_count > 0){
        if(password_verify($user_password, $row_data['user_password'])){
            $_SESSION['username'] = $user_username;
            echo "<script>alert('Login Successful')</script>";
            if($from_checkout == '1'){
                echo "<script>window.open('./payment.php','_self')</script>";
            } else {
                echo "<script>window.open('../index.php','_self')</script>";
            }
        } else {
            echo "<script>alert('Invalid Credentials!')</script>";
        }
    } else {
        echo "<script>alert('Invalid Credentials!')</script>";
    }
}
?>
