<!-- Connect File -->
<?php
  include("./Includes/connect.php");
  include("./functions/common_function.php");
  @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Bootstrap CSS Link Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Link Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <link rel="stylesheet" href="./style.css">
    <!-- Custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;700&display=swap');

        .team-card {
            background: #f7f9fc;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: default;
            height: 100%; /* Ensure equal card height */
        }
        
        .team-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.25);
            background: #e6f0ff;
        }

        .team-card h5, .team-card p {
            margin-bottom: 0.5rem;
        }

        .icon-text {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            justify-content: center;
        }

        .bio-text {
            margin-top: 0.5rem;
            font-size: 0.95rem;
            color: #555;
        }
        
        .team-section-title {
            letter-spacing: 1.5px;
            font-weight: bold;
        }
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
<body class="open-sans-font">

<!-- Navbar Start -->
<?php include("./Includes/navbar.php"); ?>
<!-- Navbar End -->

<!-- Team Section Start -->
<section class="container my-5">
    <h2 class="text-center mb-5 team-section-title">Meet Our Team</h2>
    <div class="row justify-content-center g-4">
        <!-- Team Member 1 -->
        <div class="col-sm-6 col-md-3">
            <div class="card team-card p-4 text-center border-0 shadow-sm rounded-4">
                <h5 class="fw-semibold mb-2">Sheikh Sarafat Hossain</h5>
                <p class="text-primary fw-semibold mb-2">CEO</p>
                <p class="icon-text mb-1">
                    <i class="fa-solid fa-envelope text-secondary"></i> sheikhsarafathossain@gmail.com
                </p>
                <p class="icon-text">
                    <i class="fa-solid fa-phone text-secondary"></i> 01627400607
                </p>
                <p class="bio-text">Leading the team with passion and vision, dedicated to innovation and growth.</p>
            </div>
        </div>

        <!-- Team Member 2 -->
        <div class="col-sm-6 col-md-3">
            <div class="card team-card p-4 text-center border-0 shadow-sm rounded-4">
                <h5 class="fw-semibold mb-2">Rijia Parveen Raya</h5>
                <p class="text-primary fw-semibold mb-2">CMO</p>
                <p class="icon-text mb-1">
                    <i class="fa-solid fa-envelope text-secondary"></i> raya@gmail.com
                </p>
                <p class="icon-text">
                    <i class="fa-solid fa-phone text-secondary"></i> 01937430623
                </p>
                <p class="bio-text">Marketing expert driving customer engagement and brand growth with creative strategies.</p>
            </div>
        </div>

        <!-- Team Member 3 -->
        <div class="col-sm-6 col-md-3">
            <div class="card team-card p-4 text-center border-0 shadow-sm rounded-4">
                <h5 class="fw-semibold mb-2">Nipa</h5>
                <p class="text-primary fw-semibold mb-2">CTO</p>
                <p class="icon-text mb-1">
                    <i class="fa-solid fa-envelope text-secondary"></i> nipa@gmail.com
                </p>
                <p class="icon-text">
                    <i class="fa-solid fa-phone text-secondary"></i> 01122400607
                </p>
                <p class="bio-text">Tech enthusiast ensuring seamless system integration and innovation.</p>
            </div>
        </div>

        <!-- Team Member 4 -->
        <div class="col-sm-6 col-md-3">
            <div class="card team-card p-4 text-center border-0 shadow-sm rounded-4">
                <h5 class="fw-semibold mb-2">Shibli</h5>
                <p class="text-primary fw-semibold mb-2">CTO</p>
                <p class="icon-text mb-1">
                    <i class="fa-solid fa-envelope text-secondary"></i> shibli@gmail.com
                </p>
                <p class="icon-text">
                    <i class="fa-solid fa-phone text-secondary"></i> 01997400107
                </p>
                <p class="bio-text">Focused on technical excellence and robust infrastructure management.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer Start -->
<?php include("./Includes/footer.php"); ?>
<!-- Footer End -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
