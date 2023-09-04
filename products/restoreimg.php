<?php
require('../crudc2/connection.php');

$pid = $_GET['id'];

$restore = "UPDATE  `products` SET pstatus = '1' where id = '$pid' ";
$sqlconn = mysqli_query($connect, $restore);
if($sqlconn){
    
    header('location:http://localhost/proaddnew/products/fetchpro.php');
}else{
    echo "query failed";
}
?>
