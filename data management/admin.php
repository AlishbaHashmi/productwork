<?php

include('config.php');
include('header.php');

$sqlquery = "select * from `user`";

$res = mysqli_query($connection, $sqlquery);
if(!$res){
    echo "query failed";
}else{
    echo "query successful";
}



 








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Gender</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
  while($fetch = mysqli_fetch_assoc($res)){
    ?>
    <tr>
      <th scope="row"> <?php echo $fetch['id'] ;?></th>
      <td> <?php echo $fetch['username'] ;?></td>
      <td><?php echo $fetch['gender'] ;?></td>
      
    </tr>
    <?php
    }
    ?>
    
  </tbody>
</table>



</body>
</html>