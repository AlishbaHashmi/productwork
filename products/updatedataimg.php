<?php
require('../crudc2/connection.php');



$pid = $_POST['id'];
$pname = $_POST['pname'];
$pcat = $_POST['cat'];
$pdes = $_POST['des'];
$pimg = $_FILES['img'];



$updatequery = "UPDATE `products` set id = '$pid',  pname = '$pname', pcategory = '$pcat', pdescription = '$pdes', pimage = '$pimg' where id = '$pid'";

$result = mysqli_query($connect, $updatequery);
if(!$result){
    die("query failed");
}

header('location:http://localhost/proaddnew/products/proaddition.php');


?>