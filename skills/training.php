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
            padding-top: 80px;
        }

        /* White Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand img {
            height: 60px;
        }
        
        .navbar-nav .nav-link {
            color: #333 !important;
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0 12px;
            padding: 8px 0;
            position: relative;
        }
        
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #f39c12;
            transition: width 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #f39c12 !important;
        }
        
        .navbar-toggler {
            border: none;
        }

        /* Header Section */
        .header-section {
            text-align: center;
            padding: 100px 20px;
            background-color: #000;
        }
        
        .header-section h1 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .training-types {
            color: #f39c12;
            font-size: 1.3rem;
            margin-bottom: 30px;
        }
        
        .header-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
        }
        
        .header-description {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* Training Schedule */
        .training-schedule-container {
            display: flex;
            justify-content: center;
            margin: 40px 0;
        }
        
        .training-schedule {
            background-color: #111;
            padding: 50px;
            border-radius: 8px;
            max-width: 800px;
            width: 100%;
        }

        /* Footer */
        .footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 50px;
        }
        
        .footer p {
            margin-bottom: 20px;
        }
        
        .social-media a {
            color: white;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s;
        }
        
        .social-media a:hover {
            color: #f39c12;
        }

        /* Back to Top Button */
        #backToTopBtn {
            display: none;
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #f39c12;
            color: white;
            border: none;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        #backToTopBtn:hover {
            background: #e67e22;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

    <!-- White Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="wondreboy.php">
                <img src="capture7.png" alt="Skills Therapy Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="wondreboy.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="training.php">Training</a></li>
                    <li class="nav-item"><a class="nav-link" href="coaching.php">Coaching</a></li>
                    <li class="nav-item"><a class="nav-link" href="camps.php">Camps</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <div class="header-section">
        <h1>SKILLS THERAPY</h1>
        <div class="training-types">
            PRESENTIAL GROUP TRAINING - 1ON1 PRIVATE TRAINING
        </div>
        
        <h2>BASKETBALL TRAINING</h2>
        
        <p class="header-description">
            SKILLS THERAPY Development provides individual Basketball Training Sessions & Group Training Sessions. 
            You can attend weekly on a regular basis or have an Exclusive session with Skills Therapy. 
            You will be trained to develop basketball handling, footwork, shooting, athletics, game IQ, 
            mental toughness, and more...
        </p>
    </div>

    <!-- Training Schedule Section - Now properly centered -->
    <div class="training-schedule-container">
        <div class="training-schedule text-center">
            <h3>Training Schedule</h3>
            <p>We offer training sessions on the following days:</p>
            <ul class="list-unstyled">
                <li>Monday: 10:00 AM - 12:00 PM</li>
                <li>Wednesday: 2:00 PM - 4:00 PM</li>
                <li>Friday: 5:00 PM - 7:00 PM</li>
            </ul>
        </div>
    </div>

    <!-- Other Sections -->
    <div class="container-fluid my-5">
        <?php include 'faqs.php'; ?>
    </div>

    <div class="container-fluid my-5">
        <?php include 'program.php'; ?>
    </div>
   
    <div class="container my-5">
        <?php include 'call.php'; ?>
    </div>
    
    <div class="container my-5">
        <?php include 'coach.php'; ?>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Skills Therapy Basketball Training. All rights reserved.</p>
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Back to Top Button
        window.addEventListener('scroll', function() {
            var btn = document.getElementById('backToTopBtn');
            btn.style.display = (window.scrollY > 300) ? 'block' : 'none';
        });
        
        document.getElementById('backToTopBtn').addEventListener('click', function() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>