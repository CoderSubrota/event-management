<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            background: url('https://via.placeholder.com/1920x700') no-repeat center center/cover;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.5rem;
            margin-top: 20px;
        }
        .services img {
            width: 100%;
            border-radius: 15px;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<?php 
session_start() ;

require_once "./navbar.php"; 
require_once "./cdn.html"; 
?>
<!-- Hero Section -->
<section class="hero" style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIYfj4Go_Y2g8QfVB-_LJd_1MiRYWJy3Cfw4sLvpdPsqup_L6ZncBazWM2vFj5iOLg0hQ&usqp=CAU);">
    <div class="container">
        <h1>Welcome to Event</h1>
        <p>We make your events unforgettable</p>
        <a href="#services" class="btn btn-primary btn-lg mt-3">Explore Services</a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container text-center">
        <h2>About Us</h2>
        <p class="mt-3">We specialize in organizing weddings, corporate events, and private parties. Our dedicated team ensures that every detail is taken care of.</p>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card shadow">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVpakjLBkEt-2FNGk-9CBOyHoChY9O3IhxvTHA8aYcVCh_oVZAPvnDVzA9D1a-8iVG1PI&usqp=CAU" alt="Service 1" class="card-img-top h-25">
                    <div class="card-body">
                        <h5 class="card-title">Wedding Planning</h5>
                        <p class="card-text">Create magical moments for your special day.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIYfj4Go_Y2g8QfVB-_LJd_1MiRYWJy3Cfw4sLvpdPsqup_L6ZncBazWM2vFj5iOLg0hQ&usqp=CAU" alt="Service 2" class="card-img-top h-25">
                    <div class="card-body">
                        <h5 class="card-title">Corporate Events</h5>
                        <p class="card-text">Professional planning for impactful events.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKF_YlFFlKS6AQ8no0Qs_xM6AkjvwFwP61og&s" alt="Service 3" class="card-img-top h-25">
                    <div class="card-body">
                        <h5 class="card-title">Private Parties</h5>
                        <p class="card-text">Personalized parties for every occasion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Search Event Section -->
<section id="contact" class="py-5">
    <div class="container text-center">
        <h2 class="text-center fs-2 fw-bold my-5">Search Events</h2>
        <div class="input-group flex-nowrap">

  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    <button class="btn btn-primary" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass"></i></button>
</div>

    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container text-center">
        <h2>Contact Us</h2>
        <p class="mt-3">Have questions? Reach out to us anytime.</p>
        <a href="mailto:info@eventify.com" class="btn btn-outline-dark">Email Us</a>
    </div>
</section>

 <?php  require_once"./footer.html"; ?>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
