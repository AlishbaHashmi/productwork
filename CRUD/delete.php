<?php
include('connection.php');
$user_id = $_GET['id'];

$delete = "delete from usersb3 where id = '$user_id'";

$result1 = mysqli_query($conn, $delete);

if(!$result1){
    die("query failed");
}
header('location:http://localhost:82/classb3/crud/allusers.php');


?>