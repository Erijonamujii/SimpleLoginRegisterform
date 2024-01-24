<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1  >Hello,<?php echo $_SESSION["username"] ?></h1>

<a href="logout.php" >Logout</a>
<a href="dashboard.php">Dashboard</a>
<a href="home/home.php">Home</a>

</body>
</html>

