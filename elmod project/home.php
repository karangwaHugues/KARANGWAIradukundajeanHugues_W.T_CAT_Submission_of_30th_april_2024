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
    <link rel="stylesheet" href="home.css">
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
                    <li><a href="position.php">position</a></li>
                    <li><a href="Login.php">Log out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="overlay"></div>
        <div class="container">
            <h2>We are your trusted iPhone repair experts</h2>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Lamah Ltd is a leading iPhone repair shop specializing in fast and reliable repairs for all iPhone models. Our shop is located in huye city near bank of kigali next to RRA training center, we are committed to providing high-quality repair services at affordable price and our services are provided by skilled and experienced technicians.</p>
            <p>Whether you need a cracked screen replacement, battery replacement, or any other iPhone repair service, you can rely on us to get your iPhone back in optimal condition as new as you've bought it.</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Lamah Ltd - iPhone Repair Shop</p>
        </div>
    </footer>
</body>
</html>
