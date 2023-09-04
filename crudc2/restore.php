<?php
include('connection.php');

$user_id = $_GET['id'];

$restore = "UPDATE `@stds` SET status = '1' where id = '$user_id' ";
$sqlconn = mysqli_query($connect, $restore);
if($sqlconn){
    
    header('location:allusers.php');
}else{
    echo "query failed";
}
?>
