<?php

$valid_username = "Admin";
$valid_password = "CerealFish";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == $valid_username && $password == $valid_password) {
    echo "Welcome back, Admin!";
}
else{
    echo "Invalid username or password";
}
?>