<?php
session_start();

$_SESSION["username"] = "Ebad";
$_SESSION["age"] = "44";
$_SESSION["class"] = "B3";

print_r($_SESSION);
echo $_SESSION['username'];

// mysqli_connect() connection establishment from the databaase
// mysqli_fetch_assoc() fetching the associative array from the database
// mysqli_query() run the query in the database
// mysaqli_num_rows  checking the number of rows in the database
// mysqli_real_escape_string() protect from sql injection
// password_hash($userpass, password_BCRYPT) used to encrypt the password
// password_verify($userpass, encryptedpass) 
include('');

?>