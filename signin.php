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
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id"
        content="497450111077-qqqjtri480gibho4kvq6qolang2f63rf.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
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
                <strong>Hey!</strong>
                <?php echo $_SESSION['status']; ?>
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
            <div class="oauth">
                <p class="text-center"> or</p>
                <html lang="en">
                    <div class="g-signin25" data-onsuccess="onSignIn" data-theme="dark"> </div>
                    <script>
                        function onSignIn(googleUser) {
                            // Useful data for your client-side scripts:
                            var profile = googleUser.getBasicProfile();
                            console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                            console.log('Full Name: ' + profile.getName());
                            console.log('Given Name: ' + profile.getGivenName());
                            console.log('Family Name: ' + profile.getFamilyName());
                            console.log("Image URL: " + profile.getImageUrl());
                            console.log("Email: " + profile.getEmail());

                            // The ID token you need to pass to your backend:
                            var id_token = googleUser.getAuthResponse().id_token;
                            console.log("ID Token: " + id_token);
                        }
                    </script>

                </html>
            </div>
            <p>Do not Have an Account <a href="signup.php">Sign Up Here</a></p>
        </form>
        <!--Form End-->
    </div>
    <!--Login Container Ends-->
</body>

</html>