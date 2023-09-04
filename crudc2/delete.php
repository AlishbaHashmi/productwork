<?php

include('connection.php');

  $userid = $_GET['id'];
// echo $userid;


$delete = "UPDATE `@stds` SET status = '0'  where id = '$userid'";

$result = mysqli_query($connect, $delete);
if(!$result){die("query failed");
}
header('location:http://localhost:82/classc2/crud/allusers.php');

?>