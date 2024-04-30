<?php $conn=new mysqli('localhost','root','','apms');
      //if (isset($_POST['edit'])) {
      
     
     $emp_id=$_GET['edit'];
    $city=$_POST['emp_city'];
    $applicant_name=$_POST['applicant_name'];
    $position=$_POST['position'];
    $phone=$_POST['telephone'];
    $Email=$_POST['email'];
    $update="UPDATE employee SET position='$position', applicant_name='$applicant_name',telephone='$phone',email='$email' WHERE emp_id='$emp_id' ";
    $up=mysqli_query($conn,$update);

      // code...

    	//header('location:retreiving.php');  }
//}
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

   

   

    <section class="register">
        <div class="container">
            <h2>update</h2>
            <form action="" method="post">
                <label for="username">position:</label>
                <input type="text" id="position" name="position" required>

                 <label for="username">applicant name:</label>
                <input type="text" id="position" name="applicant_name" required>
                
                
                 <label for="city">applicant city:</label>
                <input type="text" id="city" name="emp_city" required>

                <label for="telephpone">telephone:</label>
                <input type="text" id="telephone" name="telephone" required>

                 
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <button type="submit" name="submit">update data</button><br>
            
            </form>
        </div></section>