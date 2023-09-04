<?php
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
echo $_REQUEST['id'] . "<br>";
echo $_REQUEST['name'] . "<br>";
echo $_REQUEST['age'] . "<br>";
echo $_REQUEST['gender'] . "<br>";

session_start();

echo $_SESSION['username'];
echo $_SESSION['age'];
echo $_SESSION['class'];

session_unset();
session_destroy();


?>