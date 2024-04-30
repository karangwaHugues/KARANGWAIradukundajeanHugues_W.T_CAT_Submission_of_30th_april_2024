<?php

	

$conn=new mysqli('localhost','root','','apms');
$emp_id=$_POST['emp_id'];
$delete="DELETE FROM employee WHERE emp_id='$emp_id'";
$dle=mysqli_query($conn,$delete);
if ($dle) {
	header('location:retreiving.php');
}
else
{
	echo "no";
}

?>