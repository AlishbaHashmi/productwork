<?php
    include('header.php');
    include('connection.php');
    if(isset($_POST['Login'])){
        $user_email = $_POST['email'];
        $user_pass = $_POST['pass'];

        $query = "SELECT * from`@stds` where email = '$user_email' AND password = '$user_pass'";

        $res = mysqli_query($connect, $query);
        // print_r($res);
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
               session_start();
               $_SESSION["username"] = $row['name'];
               header('location:http://localhost/classworkB3-main/crudc2/index.php');
            }
        }
        else{
            echo "<script> alert('Invalid username/password')</script>";
        }
    }



    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login Page </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-group">
        <label for="email"> Email  </label>
    <input type="email" name="email" class="form-control">
    <label for="pass"> Password  </label>
    <input type="password" name="pass" class="form-control">
    <input class="btn btn-success" type="submit" value="Login" name="Login">
        </form>
        </div>
    </body>
    </html>