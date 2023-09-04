<?php
include('config.php');
include('header.php');


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="registration.php" method="post">
  <div class="mb-3">
    <!-- <label for="exampleInputEmail1" class="form-label">ID</label> -->
    <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">UserName</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gender</label>
    <input type="text" class="form-control" name="gender" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php
if(isset($_POST['submit'])){
$id =  $_POST['id'];
$username =  $_POST['username'];
$pass =  md5($_POST['pass']);
$gender =  $_POST['gender'];

// print_r($_POST); 
$query = "INSERT INTO `user` (`username`, `pass`, `gender`) VALUES ('$username', '$pass', '$gender')";
$result = mysqli_query($connection, $query);
if(!$result){
    echo "query failed";
}
else{
    echo "query successful";
}
}
?>
   
</body>
</html>