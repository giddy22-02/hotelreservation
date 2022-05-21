<?php
include ('../admin/actions/connect.php');
session_start();
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $roomtype = $_POST['roomtype'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $card_number = $_POST['card_number'];
    $security_code = $_POST['security_code'];
    $expiry_month = $_POST['exp_month'];
    $expiry_year = $_POST['exp_year'];
    $name_on_card = $_POST['name_on_card'];

   
        $sql = "INSERT INTO bookings (
            fullname,
            email,
            phone,
            roomtype,
            checkin,
            checkout,
            card_number,
            security_code,
            exp_month,
            exp_year,
            name_on_card
            )
            VALUES (
            '$fullname',
            '$email',
            '$phone',
            '$roomtype',
            '$checkin',
            '$checkout',
            '$card_number',
            '$security_code',
            '$expiry_month',
            '$expiry_year',
            '$name_on_card'
            )";
        $result = mysqli_query($con, $sql);
        if ($result) {
           
            $_SESSION['status'] = "Successfully Booked a Room";
            header("Location: ../book_one.php");
        }else {
            die(mysqli_error($con));
        }
    

?>