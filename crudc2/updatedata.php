<?php
include('connection.php');

// print_r($_POST);
$userid = $_POST['id'];
$username = $_POST['name'];
$userage = $_POST['age'];
$usergender = $_POST['gender'];



$updatequery = "update `@stds` set id = '$userid',  name = '$username', age = '$userage', gender = '$usergender' where id = '$userid'";

$result = mysqli_query($connect, $updatequery);
if(!$result){
    die("query failed");
}

header('location:http://localhost/classworkB3-main/crudc2/index.php');


?>