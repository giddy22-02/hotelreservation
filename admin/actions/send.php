<?php
include ('connect.php');
session_start();
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message= $_POST['message'];
    
   
   
        $sql = "INSERT INTO messages (fullname,email,phone,subject,message)VALUES ('$fullname',' $email','$phone','$subject','$message')";
        $result = mysqli_query($con, $sql);
        if ($result) {
           
            $_SESSION['status'] = "Inserted Successfully";
            header("Location: ../../contact.php");
        }else {
            
             $_SESSION['status'] = "Something Went wrong";
             header("Location: ../home.php");
        }

?>