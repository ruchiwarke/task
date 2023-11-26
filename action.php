
<?php

$servername = "54.87.16.208";
$user = "demo";
$pass = "demo";
$dbname = "task_db";

// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//if($conn)
// get the post records

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

// database insert SQL code
	$sql = "INSERT INTO `task_db` (`id`, `username`, `password`) VALUES (?, ?, ?)";
	$result = $conn->prepare($sql);
	$sql->bind_param("1", $username, $password);
// insert in database 

	if($result->execute())
	{
		echo "Records Inserted";
	}
	else
	{
		echo "Error: " . $conn->error;
	}
	$result->close();
}

$conn->close();
?>
