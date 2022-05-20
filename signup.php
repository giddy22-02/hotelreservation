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
        <form action="actions/add_sign_up.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight:800; color:#f9a826;">Sign Up</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Full Name" name="fullname" required>
            </div>
            <div class="input-group">
                <input type="tel" placeholder="Phone No" name="phone" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group d-flex justify-content-center">
                <button name="submit" class="btn" style="background:#152238; color:#f9a826;">Sign Up</button>
            </div>
            <p>Already Have an Account <a href="signin.php">Login Here</a></p>
        </form>
        <!--Form End-->
    </div>
    <!--Login Container Ends-->
</body>
</html>