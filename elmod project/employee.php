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
            <h2>Register</h2>
            <form action="" method="POST">
                <label for="position">Position:</label>
                <input type="text" id="position" name="position" required>

                <label for="applicant_name">Applicant Name:</label>
                <input type="text" id="applicant_name" name="applicant_name" required>
                
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday" required>

                <label for="emp_city">Applicant City:</label>
                <input type="text" id="emp_city" name="emp_city" required>

                <label for="telephone">Telephone:</label>
                <input type="text" id="telephone" name="telephone" required>

                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality" required>

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
               
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <button type="submit" name="submit">Apply</button>
            </form>
        </div>
    </section>

    <?php
    if (isset($_POST['submit'])) {
        $conn = new mysqli('localhost', 'root', '', 'apms');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve form data
        $position = $_POST['position'];
        $applicant_name = $_POST['applicant_name'];
        $birthday = $_POST['birthday'];
        $emp_city = $_POST['emp_city'];
        $phone = $_POST['telephone'];
        $nationality = $_POST['nationality'];
        $date = $_POST['date'];
        $email = $_POST['email'];

        // Prepare and execute SQL statement
        $insert = "INSERT INTO employees (position, applicant_name, birthday, emp_city, telephone, nationality, date, email) VALUES ('$position', '$applicant_name', '$birthday', '$emp_city', '$phone', '$nationality', '$date', '$email')";

        if ($conn->query($insert) === TRUE) {
            echo "Registered successfully";
        } else {
            echo "Error: " . $insert . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

    <footer>
        <div class="container">
            <p>&copy; 2024 Lamah Ltd - iPhone Repair Shop</p>
        </div>
    </footer>
</body>
</html>