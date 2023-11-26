
<?php

$servername = "3.87.89.9";
$username = "one";
$password = "one";

// Create connection
$conn = new mysqli($servername, $username, $password);

//if($conn)
// get the post records

if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `task_db` (`id`, `username`, `password`) VALUES ('1', '$username', '$password')";

// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
else
	die("Connection failed: " . $conn->connect_error)
?>
