<?php
include ('actions/connect.php');
//===============Session Start====================
session_start();
if(!isset($_SESSION['username'])){
header("Location:../index.php");
}

//===============Session Start====================
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--Bootstrap File-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- font-awesome icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="dashboard.css">
    <style>
        hr.receipt{
            border-top: 1px dashed #8c19c2;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light p-3" style="background:#152238;">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <!---Logo------------------------->
            <img src="../images/logo.png" alt="logo" width="60" height="60">
            <!---Logo------------------------->
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse"
                data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
            <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
        </div>
        
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!--====Sidebar=====Start=======================-->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background:#152238;">
                <div class="position-sticky pt-md-5">
                    <hr class="text-light">
                     <div class="dropdown my-5">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-expanded="false" style="color:#f9a826; background:#152238;">
                            <?php echo "Hello ". $_SESSION['username'];?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Messages</a></li>
                            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                        </ul>
                    </div>
                    <hr class="text-light">
                    <ul class="nav flex-column">
                         <li class="nav-item">
                            <a class="nav-link" href="messages.php">
                            <i class="bi bi-chat-dots-fill" style="font-size: 2rem; color:#f9a826;"></i>
                                <span class="ml-2" style="color:#f9a826;">Messages</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav flex-column">
                         <li class="nav-item">
                            <a class="nav-link" href="home.php">
                                <i class="fa fa-list" style="font-size: 2rem; color:#f9a826;"></i>
                                <span class="ml-2" style="color:#f9a826;">Bookings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--========Sidebar========= Ends===================-->
           <!--Javascript libraries-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>