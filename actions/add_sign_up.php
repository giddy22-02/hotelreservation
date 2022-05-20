<?php
include ('../admin/actions/connect.php');
session_start();
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
     //Check if the candidate ID Already Exist
     $check_id = mysqli_num_rows(mysqli_query($con, "SELECT email FROM users WHERE  email='$email'"));
     if ($check_id > 0) {
        $_SESSION['status'] = "The Email you entered is  Already taken";
        header("Location: ../signup.php");
    }else{
        $sql = "INSERT INTO users (email,fullname,phone,password)VALUES ('$email','$fullname','$phone','$password')";
        $result = mysqli_query($con, $sql);
        if ($result) {
           
            $_SESSION['status'] = "Successfully Sign Up";
            header("Location: ../signin.php");
        }else {
           
            $_SESSION['status'] = "Something Went wrong,";
            header("Location: ../signup.php");
        }
    }

?>