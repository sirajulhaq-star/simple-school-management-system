<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "siraj" && $password == "123")
{
    header("Location: dashboard.php");
}
else
{
    echo "Invalid Username or Password";
}

?>