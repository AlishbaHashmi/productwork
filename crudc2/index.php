<?php
include('connection.php');

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title> Form Handling using Php </title>
</head>
<body>
    <?php
    include('header.php');
    
    ?>
<div class="container">
<form action="index.php" method="post" class="form-group">
   
    <label for="name"> Name  </label>
    <input type="text" name="name" class="form-control">
    <label for="email"> Email  </label>
    <input type="email" name="email" class="form-control">
    <label for="pass"> Password  </label>
    <input type="password" name="pass" class="form-control">
    <label for="age"> Age  </label>
    <input type="number" name="age" class="form-control">
    <label for="gender"> gender  </label>
    <input type="text" name="gender" class="form-control">
    <input type="submit" name="save" class="btn btn-danger">
</form>
</div>

<?php

if(isset($_POST['save'])){
    // mysqli_connect() --> establish the connection with the db
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pass'];
$age = $_POST['age'];
$gender = $_POST['gender'];

    $query = "insert into `@stds` (`name`,`email`,`password`, `age`, `gender`) values('$name', '$email', '$password', '$age', '$gender')";
    $result = mysqli_query($connect, $query);   // connects the query with the db
    if(!$result){
        echo "query failed";
    }else{
        echo "<script> alert('user added successfully')</script>";
    }

    // header('Location:http://localhost:82/classc2/crud/allusers.php');

}

?>






</body>
</html>