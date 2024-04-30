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
                    <li><a href="Login.php">Log out</a></li>
                </ul>
            </nav>
        </div>
    </header>
<h1>available job to apply</h1>
    <div class="containerA">
        <div class="containera"><h2><a href="employee.php">manager</a></h2> </div>

            <div class="containerb">
                <h2><a href="employee.php">assistant manager</a></h2>
            </div>
            <div class="containerc"><h2><a href="employee.php">accountant</a></h2></div>
        </div>
            <div class="containerB">
        <div class="containerd"><h2><a href="employee.php">markerting</a></h2> </div>

            <div class="containere">
                <h2><a href="employee.php">developer</a></h2>
            </div>
            <div class="containerf"><h2><a href="employee.php">audotor</a></h2></div>
        </div>
    </body></html>
    <style type="text/css">
        .containerA
        {
            border: 1px solid black;
            width: 100%;
            height: 300px;
            display: flex;
            text-align: center;
            text-transform: capitalize;
        }
        .containerA .containera
        {
            width: 35%;
            background-color: #958b8b3b;
        }
         .containerA .containerb
        {
            width: 35%;
            background-color: #c1c1dbb0;
        }
         .containerA .containerc
        {
            width: 35%;
            background-color: #6fcd5c73;
        }
         .containerB
        {
            text-align: center;
            text-transform: capitalize;
            border: 1px solid black;
            width: 100%;
            height: 300px;
            display: flex;
        }
   .containerB .containerd
        {
            width: 35%;
            background-color: #6fcd5c73;
        }
         .containerB .containere
        {
            width: 35%;
            background-color: ##c1c1dbb0;
        }
         .containerB .containerf
        {
            width: 35%;
            background-color: #958b8b3b;
        }
    </style>

   

   
