<?php 
$conn = mysqli_connect("localhost", "root", "", "registration");


$id =$_GET['id'];

$del = "UPDATE `usersb3` SET `status` = 0 WHERE `id` = $id"; 
$res = mysqli_query($conn,$del);

if($res){
    header("location: allusers.php");
}


?>