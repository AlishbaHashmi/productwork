<?php
include('connection.php');
$user_id = $_GET['id'];
// echo $user_id;
$query = "select * from `@stds` where id = '$user_id'";
$res = mysqli_query($connect, $query);
// print_r($);
if(!$res){   
    die("query failed");
}
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title> Update info using Php </title>
</head>
<body>
<div class="container">
<form action="updatedata.php" method="post" class="form-group">
    <label for="name"> Name  </label>
    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'] ?>">
    <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>">
    <label for="age"> Age  </label>
    <input type="number" name="age" class="form-control" value="<?php echo $row['age'] ?>">
    <label for="gender"> gender  </label>
    <input type="text" name="gender" class="form-control" value="<?php echo $row['gender'] ?>">
    <input type="submit" name="save" value="Update" class="btn btn-primary">
</form>
</div>

<?php
}
}
?>

</body>
</html>