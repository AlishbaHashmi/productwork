<?php
// severname, username, pass, db

$connection = mysqli_connect("localhost", "root", "", "userManagment");

if(!$connection){
    echo "connection failed";
}




?>