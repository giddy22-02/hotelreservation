<?php
include 'actions/connect.php';
session_start();
error_reporting(0);
if(isset($_SESSION['username'])){
    header("Location: index.php");
}



if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admins WHERE username ='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if($result-> num_rows >0){
        $row = mysqli_fetch_assoc($result);
        $branch=mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location:home.php");
    }else {
        echo "<script>alert('Woops! Email or password is wrong.')</script>";
    }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Page Title-->
    <title>Admin-Login</title>
    <!--Bootstrap File-->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!--Custom CSS file-->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!--Login Container Start-->
    <div class="container text-center">
        <!--Form Start-->
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight:800; color:#f9a826;">Admin</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group d-flex justify-content-center">
                <button name="submit" class="btn" style="background:#152238; color:#f9a826;">Login</button>
            </div>
        </form>
        <!--Form End-->
    </div>
    <!--Login Container Ends-->
</body>
</html>