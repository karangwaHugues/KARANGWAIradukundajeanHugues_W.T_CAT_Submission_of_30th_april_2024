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
                    <li><a href="register.php">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

   

   

    <section class="register">
        <div class="container">
            <h2>Register</h2>
            <form action="" method="post">
           

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

            

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>


                <button type="submit" name="submit">log in</button><br>
               <input type="checkbox" name="checkbox"><i>remember me</i>
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
<?php
if (isset($_POST['submit'])) {
    

$conn=new mysqli('localhost','root','','apms');
$password=$_POST['password'];
$email=$_POST['email'];
$sel="SELECT * FROM user1 WHERE email='$email' AND password='$password'";
$cc=mysqli_query($conn,$sel);
session_start();
if ($row=mysqli_num_rows($cc)==0) {
    echo "incorect password or username";
}
else
{
     header('location:home.php');
    $_SESSION['password']=$password;
   
}}
?>