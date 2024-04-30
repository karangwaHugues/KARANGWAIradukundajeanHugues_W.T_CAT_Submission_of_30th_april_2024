<?php
session_start();
if (!isset($_SESSION['password'])) {
    header('location:Login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamah Ltd - iPhone Repair Shop</title>
    <link rel="stylesheet" href="services.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Lamah Ltd</h1>
            <nav>
                <ul class="menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="Logout.php">log out</a></li>
                </ul>
            </nav>
        </div>
    </header>
  <section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-item">
                <img src="iphone13.jpg" alt="Screen Repair">
                <p>Screen Repair</p>
            </div>
            <div class="service-item">
                <img src="iphone11.jpg">
                <p>Battery Replacement</p>
            </div>
            <div class="service-item">
                <img src=".jpg">
                <p>Camera Repair</p>
            </div>
            <div class="service-ite">
                <img src="image.jpg">
                <p>Camera Repair</p>
            </div>
            <!-- Add more service items as needed -->
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Lamah Ltd - iPhone Repair Shop</p>
        </div>
    </footer>
</body>
</html>
