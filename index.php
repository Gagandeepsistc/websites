<?php
session_start(); // Start the session at the very top of the file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawshake - Pet Sitter Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="Pawshake Logo" class="logo-img">
            <h1>Pawshake</h1>
        </div>
        <nav>
            <?php if (isset($_SESSION['username'])): ?>
                <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="signup.php">Sign up</a>
                <a href="login.php">Log in</a>
            <?php endif; ?>
        </nav>
    </header>

    <!-- Add the rest of your page content here -->

</body>
</html>

    

    <!-- Hero Section -->
<section class="hero">
    <video autoplay muted loop id="hero-video">
        <source src="video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="hero-content">
        <h2>Your Pet’s Best Friend</h2>
        <p>Find the best pet sitters in town!</p>
        <form action="find-pet-sitter.php" method="POST">
            <input type="text" placeholder="Enter your location" id="location" name="location" required>
            <button type="submit" id="search-btn">Search Now</button>
        </form>
    </div>
</section>

    
   
<!-- Services Section -->
<section class="services">
    <h2>Our Services</h2>
    <div class="services-container">
        <div class="service-item">
            <img src="doggy-daycare.jpg" alt="Doggy Day Care">
            <h3>Doggy Day Care</h3>
            <p>Leave your dog in safe hands while you're away.</p>
            <a href="book-doggy-daycare.php" class="service-button">Book Now</a>
        </div>
        <div class="service-item">
            <img src="dog-boarding.jpg" alt="Dog Boarding">
            <h3>Dog Boarding</h3>
            <p>Overnight care for your pet with trusted sitters.</p>
            <a href="book-dog-boarding.php" class="service-button">Book Now</a>
        </div>
        <div class="service-item">
            <img src="dog-walking.jpg" alt="Dog Walking">
            <h3>Dog Walking</h3>
            <p>Daily walks with experienced pet lovers.</p>
            <a href="book-dog-walking.php" class="service-button">Book Now</a>
        </div>
        <div class="service-item">
            <img src="home-visits.jpg" alt="Home Visits">
            <h3>Home Visits</h3>
            <p>Check-in visits to keep your pet company.</p>
            <a href="book-home-visits.php" class="service-button">Book Now</a>
        </div>
    </div>
</section>

<!-- Feedback Section -->
<section class="feedback">
    <h2>We'd Love to Hear from You!</h2>
    <p>Share your feedback or suggestions with us.</p>
    
    <form action="submit-feedback.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Your Feedback:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Submit Feedback</button>
    </form>
</section>


    <!-- About Us Section -->
<section class="about-us">
    <h2>About Us</h2>
    <div class="about-content">
        <div class="about-description">
            <p>At Pawshake, we are passionate about providing the best care for your beloved pets. Our mission is to connect pet owners with trusted, reliable pet sitters who will treat your pets like family. Whether you're at work, on vacation, or just need a helping hand, we're here to ensure your pets are well taken care of.</p>

            <p>Founded in 2020, Pawshake was born from a love for animals and a need for a trustworthy pet care solution. Over the years, we’ve grown to include a diverse team of experienced pet sitters, all dedicated to offering top-quality services and loving care.</p>
        </div>

        <div class="about-image">
            <img src="team-photo.jpg" alt="Our Team" />
        </div>
    </div>

    <div class="about-mission">
        <h3>Our Mission</h3>
        <p>Our mission is simple: to provide pet owners with peace of mind by connecting them with trusted and loving pet sitters. We believe every pet deserves to feel safe, happy, and loved, even when their owners are away.</p>
    </div>

    <div class="about-story">
        <h3>Our Story</h3>
        <p>It all started when our founder, Jane Doe, struggled to find reliable care for her two dogs while on vacation. After countless hours of searching, she realized there was a gap in the pet care market—there had to be a better solution. That's when Pawshake was born. Today, we’ve helped thousands of pet owners find the perfect pet sitters for their furry friends.</p>
    </div>
</section>


    <!-- Footer Section -->
    <!-- Footer Section -->
<footer>
    <div class="footer-container">
        <div class="footer-row">
            <!-- Quick Links -->
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about-us">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="footer-column">
                <h3>Contact Us</h3>
                <ul>
                    <li><i class="fa fa-map-marker"></i> 123 Pawshake Lane, Sydney, Australia</li>
                    <li><i class="fa fa-envelope"></i> contact@pawshake.com</li>
                    <li><i class="fa fa-phone"></i> +61 2 1234 5678</li>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div class="footer-column">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright & Legal Links -->
        <div class="footer-bottom">
            <p>&copy; 2024 Pawshake. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </div>
</footer>

</body>
</html>

