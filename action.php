
<?php
$servername = "3.87.89.9";
$username = "root";
$password = "r";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// get the post records
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

?>
