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
    <link rel="stylesheet" href="aboutus.css">
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
                    <li><a href="register.php">Log out</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <section class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Lamah Ltd is a leading iPhone repair shop specializing in fast and reliable repairs for all iPhone models. with a well experienced and skilled team of technicians, we are committed to providing high-quality repair services at affordable prices.</p>
            <h3>Meet Our Administration Team</h3>
            <div class="team-member">
                <img src="CEO.JPG" alt="CEO - Karangwa Hugues">
                <p><strong>Karangwa Hugues</strong><br>CEO</p>
            </div>
            <div class="team-member">
                <img src="operations-manager.jpg" alt="Operations Manager - Kirenga Jean">
                <p><strong>Kirenga Jean</strong><br>Operations Manager</p>
            </div>
            <div class="team-member">
                <img src="customer-service-manager.jpg" alt="Customer Service Manager - Nsinzi Deborah">
                <p><strong>Nsinzi Deborah</strong><br>Customer Service Manager</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Lamah Ltd - iPhone Repair Shop</p>
        </div>
    </footer>
</body>
</html>
