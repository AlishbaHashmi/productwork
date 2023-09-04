<?php
require('../crudc2/connection.php');

  $pid = $_GET['id'];

$delete = "UPDATE `products` SET pstatus = '0'  where id = '$pid'";

$result = mysqli_query($connect, $delete);
if(!$result){die("query failed");
}
header('location:http://localhost/proaddnew/products/fetchpro.php');

?>