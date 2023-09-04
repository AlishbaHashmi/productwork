<?php

session_start();

$_SESSION['username'] = "Ali";
$_SESSION['password'] = sha1("pass");

echo $_SESSION['username'];
echo $_SESSION['password'];



?>