<?php
$conn=new mysqli('localhost','root','','apms');
$sele="SELECT * FROM employee";
$c=mysqli_query($conn,$sele);

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
<body>
<table border="1" cellspacing="0">
	<tr>
		<td colspan="14" style="background-color: white; height: 40px; text-transform: uppercase; text-align: center;">
		table of applicant in different positions</td>
	</tr><tr>
	<td>emp_id</td>
	<td>position</td>
	<td>applicant name</td>
	<td>birday</td>
	<td>city</td>
	<td>telephone</td>
	<td>nationality</td>
	<td>date applied</td>
	<td>email</td>
	<td>update</td>
	<td>delete</td>
    </tr>

	<tr>
		<?php while ($rows=mysqli_fetch_assoc($c)) { ?>
			<td><?php echo $rows['emp_id']; ?></td>
			<td><?php echo $rows['position']; ?></td>
			<td><?php echo $rows['applicant_name']; ?></td>
			<td><?php echo $rows['birthday']; ?></td>
			<td><?php echo $rows['emp_city']; ?></td>
			<td><?php echo $rows['telephone']; ?></td>
			<td><?php echo $rows['nationality']; ?></td>
			<td><?php echo $rows['date']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><a href="update.php?edit=<?php echo $rows['emp_id']; ?>">edit</a></td>
			<form action="delete.php" method="post">
				<td>
					<input type="hidden" name="emp_id" value="<?php echo $rows['emp_id']; ?>">
					<input type="submit" name="delete" value="delete">
				</td>
			</form>

	</tr>
<?php } ?>
</table></body>
<style type="text/css">
	body
	{
		background-color: gray;
	}

table
{
	width: 30%;
	padding: 10px;
	font-family: sans-serif;
	text-transform: capitalize;
	background-color: white;
	margin-left: 350px;
}
input
{
	padding: 20px;
	width: 100px;
	text-transform: uppercase;
}
button
{
	padding: 20px;
	width: 100px;
	text-transform: uppercase;

}

</style>