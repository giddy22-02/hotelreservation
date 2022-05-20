<?php
include ('admin/actions/connect.php');
//===============Session Start====================
session_start();
if(!isset($_SESSION['fullname'])){
header("Location:signin.php");
}
if(!isset($_SESSION['email'])){
    header("Location:signin.php");
}
if(!isset($_SESSION['phone'])){
    header("Location:signin.php");
}

//===============Session Start====================
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eagle Hotel</title>
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!--Custom CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--========Start Navbar======-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="Eagle's hotel logo" width="150" height="150">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav w-100 mr-auto">
                <li class="nav-item ">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="book.php">booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-expanded="false" style="color:#f9a826; background:#152238;">
                            <?php echo "Welcome ". $_SESSION['fullname'];?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Messages</a></li>
                            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--========End Navbar======-->
   <!--========Start Room Book===-->
   <div class="row m-3">
       <div class="col-md-6">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/room1.jpg" alt="First slide" style="height:500;">
                            
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/slide1.jpg" alt="Second slide"style="height:500;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/conference1.jpg" alt="Third slide" style="height:500;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/room4.jpg" alt="Third slide" style="height:500;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
       </div>
       <div class="col-md-6">
       <div class="my-5">
        <form>
                <div class="row">
                    <div class="col-md-4">
                    <p>Name:<?php echo $_SESSION['fullname'];?></p>
                    </div>
                    <div class="col-md-4">
                    <p>Email:<?php echo $_SESSION['email'];?></p>
                    </div>
                    <div class="col-md-4">
                    <p>Phone No:<?php echo $_SESSION['phone'];?></p>
                    </div>
               
                </div>
                <p>Room Type: <?php echo "Regular";?></p>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Checkin">Check In</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-6">
                <label for="checkout">Check Out</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <h3>Card Payments</h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Checkin">Check In</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-6">
                <label for="Checkin">Check In</label>
                    <input type="date" class="form-control">
                </div>
                </div>
            <button type="submit" class="btn btn-primary"style="background:#f9a826; color:#152238;">Book</button>
        </form>
    </div>
        </div>
   </div>
   

    <!--========End  Home Room Book=====-->
    <!--rooms Start-->
    <main>
        <div class="bg-trasparent my-4 p-3" style="position: relative;">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="images/room1.jpg" class="card-img-top" alt="...">
                        <div class="label-top shadow-sm font-weight-bold">Regular</div>
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-success">Kshs 15,000</span>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="bi bi-cup-fill"></i>
                                    Breakfast Not Included
                                </div>
                                <div class="col-md-4">
                                    <i class='fas fa-car'></i>
                                    Pick Up not Available
                                </div>
                                <div class="col-md-4">
                                    <i class="bi bi-person-check-fill"></i>
                                    1person
                                </div>
                            </div>

                            <div class="text-center my-4"> <a href="" class="btn btn-warning">Book Now</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="images/room3.jpg" class="card-img-top" alt="...">
                        <div class="label-top shadow-sm font-weight-bold">Executive</div>
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">Kshs25,000</span> 
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="bi bi-cup-fill"></i>
                                    Breakfast Not Included
                                </div>
                                <div class="col-md-4">
                                    <i class='fas fa-car'></i>
                                    Pick Up not Available
                                </div>
                                <div class="col-md-4">
                                    <i class="bi bi-person-check-fill"></i>
                                    1person
                                </div>
                            </div>
                            <div class="d-grid gap-2 my-4"> <a href="#" class="btn btn-warning">Book Now</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="images/room4.jpg" class="card-img-top" alt="...">
                        <div class="label-top shadow-sm">VIP Package</div>
                        <div class="card-body">
                            <div class="clearfix mb-3"> 
                                <span class="float-start badge rounded-pill bg-success">Kshs 50,000</span> 
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="bi bi-cup-fill"></i>
                                    Breakfast Not Included
                                </div>
                                <div class="col-md-4">
                                    <i class='fas fa-car'></i>
                                    Pick Up not Available
                                </div>
                                <div class="col-md-4">
                                    <i class="bi bi-person-check-fill"></i>
                                    1person
                                </div>
                            </div>
                            <div class="text-center my-4"> <a href="#" class="btn btn-warning">Book Now</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="images/room2.jpg" class="card-img-top" alt="...">
                        <div class="label-top shadow-sm font-weight-bold">VVIP Package</div>
                        <div class="card-body">
                            <div class="clearfix mb-3"> 
                                <span class="float-start badge rounded-pill bg-success">Kshs 80,000</span> 
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="bi bi-cup-fill"></i>
                                    Breakfast Not Included
                                </div>
                                <div class="col-md-4">
                                    <i class='fas fa-car'></i>
                                    Pick Up not Available
                                </div>
                                <div class="col-md-4">
                                    <i class="bi bi-person-check-fill"></i>
                                    1person
                                </div>
                            </div>
                            <div class="text-center my-4"> <a href="#" class="btn btn-warning">Book Now</a> </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--rooms Ends--->
    <!--========Footer Start=========-->
    <div class="row" style="background: #152238; color: #f9a826;">
        <div class="container text-center">
            <img src="images/logo.png" alt="logo" style="width: 150px; height:150px;">
        </div>
        <div class="container">
            <p>Eagle's Hotel</p>
            <p>P.O Box 100,</p>
            <p> Nairobi, Mombasa Road, Kenya</p>
            <p> info@eagleshotel.ac.ke</p>
        </div>

    </div>
    <!--========Footer End===========-->
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

</body>

</html>