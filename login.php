


<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:userhome.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:adminhome.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Kaushan+Script&family=Vujahday+Script&display=swap" rel="stylesheet">
</head>
<body>

<header>


  <div class="container">



    <form class="login-form" name="loginForm" id="form" action="#" method="POST">
      <h2>LOG IN</h2>


      <div class="input-group">


        <label for="username">Username</label>
        <div class="user-input" id="username"></div>

        <input type="text" id="username" name="username" placeholder="Email or username..."  required>
       
      </div>



      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password"  placeholder="**********" required>
       
      </div>
      <div class="submit">
      <input type="submit" name="submit" value="Submit" >
      </div>
    </form>


    <p class="register">Doesn't have any account yet? <a href="register.php">Register here</a></p>
  </div>
</header>


</body>
</html>
