<?php
include('header.php');
include('connection.php');

$user_id = $_GET['id'];
// echo $user_id;


$del = "DELETE from `@stds` where id = '$user_id' ";

$res = mysqli_query($connect, $del);
if(!$res){
    echo "query failed";
}else{
    header('location:trash.php');
}

?>