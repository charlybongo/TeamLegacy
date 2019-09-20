<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Teamlegacy</title>
</head>
<body>
	<h1>Welcome to our blog</h1>
	<h4><span>Together </span>everyone <span>achieves </span> more</h4>
	<h4 href="logout.php"><a href="logout.php">LOGOUT</a></h4>

</body>
</html>
