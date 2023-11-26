
<?php

$servername = "3.87.89.9";
$user = "one";
$pass = "one";

// Create connection
$conn = new mysqli($servername, $user, $pass);

//if($conn)
// get the post records

if($_server["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

// database insert SQL code
$sql = $db->"INSERT INTO `task_db` (`id`, `username`, `password`) VALUES (?, ?, ?)";
$sql->bind_param(1, $username, $password);
$result = $sql->execute();
// insert in database 
$rs = mysqli_query($conn, $result);

if($rs)
{
	echo "Records Inserted";
}
else
	die("Connection failed: " . $conn->connect_error)
?>
