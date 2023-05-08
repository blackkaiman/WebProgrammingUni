<?php
  include("connection.php");
  include("login.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
		<link rel="stylesheet" href="./loginpagestyle.css">
    </head>
<body>
    <div class="container">
        <h1 class="title">Ticketmain</h1>
        <p>New to Ticketmain?</p>
        <a href="registerpage.php">Sign Up</a>
    </div>
<form name="loginform" action="login.php" onsubmit="return isvalid()" method="POST">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
  
      <input type="submit" class="form_button" id="btn" value="Login" name="submit"/>
    </div>
  </form>
  </body>
</html>