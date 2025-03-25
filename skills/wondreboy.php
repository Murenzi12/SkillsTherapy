<?php // index.php - Homepage ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills Therapy</title>
    <link rel="icon" href="capture7.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            padding-top: 80px; /* Added for fixed navbar */
        }

        /* Premium White Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: #fff;
            padding: 12px 0;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            padding: 8px 0;
        }
        
        .navbar-brand img {
            height: 50px;
            transition: all 0.3s ease;
        }
        
        .navbar-nav .nav-link {
            color: #333;
            font-size: 1rem;
            font-weight: 600;
            margin: 0 12px;
            padding: 8px 0;
            position: relative;
        }
        
        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #f39c12;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover::before,
        .navbar-nav .nav-link.active::before {
            visibility: visible;
            width: 100%;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #f39c12;
        }
        
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 180px 20px 100px;
            background: url('images.jpg') no-repeat center center/cover;
            color: white;
            position: relative;
        }
        
        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }
        
        .hero h2 {
            font-size: 2.5rem;
            color: #f39c12;
        }
        
        .hero .highlight {
            font-size: 3rem;
            font-weight: bold;
            color: #f39c12;
        }

        /* Footer */
        .footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 20px;
        }
        
        .footer a {
            color: #f39c12;
            text-decoration: none;
            margin: 0 10px;
        }
        
        .social-media a {
            margin: 0 10px;
            font-size: 24px;
            color: white;
            transition: color 0.3s;
        }
        
        .social-media a:hover {
            color: #f39c12;
        }

        /* Back to Top Button */
        #backToTopBtn {
            display: none;
            position: fixed;
            bottom: 40px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            background-color: #f39c12;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 12px 16px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }
        
        #backToTopBtn:hover {
            background-color: #e67e22;
        }
    </style>
</head>
<body>

    <!-- Premium White Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="capture7.png" alt="Skills Therapy Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="training.php">Training</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Coaching</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Camps</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1>Master Your Basketball Skills</h1>
            <h2>Elevate Your Game with Professional Coaching</h2>
            <h2 class="highlight">Take Your Game to the Next Level</h2>
        </div>
    </div>

    <!-- Enlarged Carousel -->
    <div class="container text-center my-5">
        <?php include 'carousel.php'; ?>
    </div>

    <!-- About Section -->
    <div class="container text-center my-5">
        <?php include 'about.php'; ?>
    </div>

    <!-- Other Sections -->
    <div class="container-fluid text-center my-5">
        <?php include 'program.php'; ?>
    </div>
   
    <div class="container text-center my-5">
        <?php include 'call.php'; ?>
    </div>
    
    <div class="container text-center my-5">
        <?php include 'coach.php'; ?>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Skills Therapy. All rights reserved.</p>
        <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Navbar Scroll Effect
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");
            const logo = document.querySelector(".navbar-brand img");
            
            if (window.scrollY > 20) {
                navbar.classList.add("scrolled");
                logo.style.height = "45px";
            } else {
                navbar.classList.remove("scrolled");
                logo.style.height = "50px";
            }
        });

        // Back to Top Button
        window.addEventListener("scroll", function() {
            const btn = document.getElementById("backToTopBtn");
            btn.style.display = (window.scrollY > 300) ? "block" : "none";
        });
        
        document.getElementById("backToTopBtn").addEventListener("click", function() {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>