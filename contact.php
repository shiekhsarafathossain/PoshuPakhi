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

/* body {
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

.team-img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border: 3px solid #dee2e6;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
                <img src="./assets/images/team_images/sarafat.jpg" class="team-img rounded-circle mb-3" alt="Sheikh Sarafat Hossain">
                <h5 class="fw-semibold mb-2">Sheikh Sarafat Hossain</h5>
                <p class="text-primary fw-semibold mb-2">CEO</p>
                <p class="icon-text mb-1">
                    <i class="fa-solid fa-envelope text-secondary"></i> ceo@poshupakhi.com
                </p>
                <p class="icon-text">
                    <i class="fa-solid fa-phone text-secondary"></i> +880 1923400407
                </p>
                <p class="bio-text">Leading the team with passion and vision, dedicated to innovation and growth.</p>
            </div>
        </div>

        <!-- Team Member 2 -->
        <div class="col-sm-6 col-md-3">
            <div class="card team-card p-4 text-center border-0 shadow-sm rounded-4">
                <img src="./assets/images/team_images/raya.jpeg" class="team-img rounded-circle mb-3" alt="Rijia Parveen Raya">
                <h5 class="fw-semibold mb-2">Rijia Parveen Raya</h5>
                <p class="text-primary fw-semibold mb-2">CMO</p>
                <p class="icon-text mb-1">
                    <i class="fa-solid fa-envelope text-secondary"></i> cmo@poshupakhi.com
                </p>
                <p class="icon-text">
                    <i class="fa-solid fa-phone text-secondary"></i> +880 1937430623
                </p>
                <p class="bio-text">Marketing expert driving customer engagement and brand growth with creative strategies.</p>
            </div>
        </div>

        <!-- Team Member 3 -->
        <div class="col-sm-6 col-md-3">
            <div class="card team-card p-4 text-center border-0 shadow-sm rounded-4">
                <img src="./assets/images/team_images/nipa.jpg" class="team-img rounded-circle mb-3" alt="Nipa Mridha">
                <h5 class="fw-semibold mb-2">Nipa Mridha</h5>
                <p class="text-primary fw-semibold mb-2">CFO</p>
                <p class="icon-text mb-1">
                    <i class="fa-solid fa-envelope text-secondary"></i> cfo@poshupakhi.com
                </p>
                <p class="icon-text">
                    <i class="fa-solid fa-phone text-secondary"></i> +880 1422400607
                </p>
                <p class="bio-text">Focused on financial excellence and sustainable growth management.</p>
            </div>
        </div>

        <!-- Team Member 4 -->
        <div class="col-sm-6 col-md-3">
            <div class="card team-card p-4 text-center border-0 shadow-sm rounded-4">
                <img src="./assets/images/team_images/shibly.jpg" class="team-img rounded-circle mb-3" alt="Jubaiya Akter Shibly">
                <h5 class="fw-semibold mb-2">Jubaiya Akter Shibly</h5>
                <p class="text-primary fw-semibold mb-2">CTO</p>
                <p class="icon-text mb-1">
                    <i class="fa-solid fa-envelope text-secondary"></i> cto@poshupakhi.com
                </p>
                <p class="icon-text">
                    <i class="fa-solid fa-phone text-secondary"></i> +880 1997400107
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
