<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Kaushan+Script&family=Vujahday+Script&display=swap" rel="stylesheet">

</head>
<body>

  

    <div class="container">

        <form action=""class="registerform" name="registerForm"  action="=">
            <h2> CREATE NEW ACCOUNT</h2>
            
<div class="input">

<label for="name">Name</label>
<input type="text" name="name"placeholder="Write your name here..."  id="name">

</div>

<div class="input">
    <label for="Surname">Surname</label>
    <input type="text" id="surname"  id="surname"placeholder="Write your surname here...">
</div>

<div class="input">
    <label for="Email">Email</label>
    <input type="email"placeholder="Write your email here..." id="email" >
</div>

<div class="input">
    <label for="Username">Username</label>
    <input type="username"placeholder="Write your username here..." id="username" >
</div>


<div class="input">
    <label for="Password">Password</label>
    <input type="password"id="password"placeholder=" At least 8 characters" >
</div>
<div id="message" style="color: red;"></div>
<button type="submit"><a href="login.html" style="color: aliceblue;text-decoration: none;">Register</a></button>


        </form>

        <p class="login">Already registered ?<a href="login.html">Log in</a></p>

    </div>
  <script src="form2.js"></script>  
</body>
</html>