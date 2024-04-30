<?php
$conn=new mysqli('localhost','root','','apms');
if (isset($_POST['submit'])) {
    

    $Firstname=$_POST['username'];
    $phone=$_POST['telephone'];
    $Email=$_POST['email'];
    $Password=$_POST['password'];
$insert="INSERT INTO user1 VALUES('','$Firstname','$Email','$phone','$Password')";
$c=mysqli_query($conn,$insert);
if ($c) {
        echo "registered successful";
    }   
else
{
    echo "no".mysqli_error($conn);
}}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamah Ltd - iPhone Repair Shop</title>
    <link rel="stylesheet" href="register.css">
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
                    <li><a href="Login.php">log out</a></li>
                </ul>
            </nav>
        </div>
    </header>

   

   

    <section class="register">
        <div class="container">
            <h2>Register</h2>
            <form action="#" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="telephpone">telephone:</label>
                <input type="text" id="telephone" name="telephone" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>


                <button type="submit" name="submit">Register</button><br>
                <li>already have account&nbsp;&nbsp;&nbsp;<a href="Login.php">login</a> </li>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Lamah Ltd - iPhone Repair Shop</p>
        </div>
    </footer>
</body>
</html>
