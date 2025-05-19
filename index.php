<?php 
session_start();

$current_date = date("l, F j, Y");
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>

<h1>Assignment 1</h1>
  <p> Welcome Back, <?=$_SESSION['username'] ?></p>
  <p> Today is <?=$current_date?></p>
<p><a href='./login.php'>Log in Here!</a></p>

</body>
</html> 