<?php
include 'admin/actions/connect.php';
session_start();
error_reporting(0);
if(isset($_SESSION['fullname'])){
    header("Location:signin.php");
}
if(isset($_SESSION['email'])){
    header("Location:signin.php");
}
if(isset($_SESSION['phone'])){
    header("Location:signin.php");
}
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password =md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE email ='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if($result-> num_rows >0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        header("Location:book_one.php");
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
    <link rel="stylesheet" href="admin/bootstrap.min.css">
    <!--Custom CSS file-->
    <link rel="stylesheet" href="admin/login.css">
</head>
<body>
    <!--Login Container Start-->
    <div class="container text-center">
        <!--Form Start-->
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight:800; color:#f9a826;">Sign In</p>
             <!--Notification Message upon submission-->
             <?php
                if(isset($_SESSION['status']))
                {?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">   
                        </button>
                    </div>
                    <?php
                    unset($_SESSION['status']);
                }?>
                <!--Notification Message upon submission-->
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group d-flex justify-content-center">
                <button name="submit" class="btn" style="background:#152238; color:#f9a826;">Login</button>
            </div>
            <p>Do not Have an Account <a href="signup.php">Sign Up Here</a></p>
        </form>
        <!--Form End-->
    </div>
    <!--Login Container Ends-->
</body>
</html>