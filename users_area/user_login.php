<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    
    <!-- Bootstrap CSS Link Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap CSS Link End -->

    <!-- Font Awesome Link Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome Link End -->

    <!-- Style.css Link Start -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Style.css Link End -->
</head>
<body>

<div class="container-fluid m-3">
    <h2 class="text-center">User Login</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
            <form action="login_process.php" method="post" enctype="multipart/form-data">
                <!-- username field start -->
                <div class="form-outline mb-4">
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required name="user_username">
                </div>
                <!-- username field end -->

                <!-- user password field start -->
                <div class="form-outline mb-4">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="Enter password" autocomplete="off" required name="user_password">
                </div>
                <!-- user password field end -->

                <div class="mt-4 pt-2">
                    <input type="submit" value="Login" class="bg-info py-3 px-3 border-0 text-white w-100" name="user_login">
                </div>
            </form>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="user_registration.php" class="text-danger">Register</a></p>
        </div>
    </div>
</div>

<!-- Bootstrap JS Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+rkY0EGbIBq4zG+bz3GMN5t9UJ0Z+" crossorigin="anonymous"></script>

</body>
</html>
