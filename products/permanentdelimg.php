<?php

require('../crudc2/connection.php');
require('headerimg.php');
$pid = $_GET['id'];

$del = "DELETE from `products` where id = '$pid' ";

$res = mysqli_query($connect, $del);
if(!$res){
    echo "query failed";
}else{
    header('location:http://localhost/proaddnew/products/trashimg.php');
}

?>