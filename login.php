


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



    <form class="login-form" name="loginForm" id="form" action="" method="POST">
      <h2>LOG IN</h2>


      <div class="input-group">


        <label for="username">Username</label>
        <div class="user-input" id="username"></div>

        <input type="text" id="username" name="username" placeholder="Email or username..." >
       
      </div>



      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password"  placeholder="**********" >
       
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