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
                    <a class="nav-link" href="book.php">booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
             <div class="dropdown my-5">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-expanded="false" style="color:#f9a826; background:#152238;">
                            <?php echo "Hello ". $_SESSION['fullname'];?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Messages</a></li>
                            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                        </ul>
                    </div>
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
                        <img class="d-block w-100" src="images/slide1.jpg" alt="Second slide" style="height:500;">
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
                <form action="actions/i_book_one.php" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Name:
                                <?php echo $_SESSION['fullname'];?>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>Email:
                                <?php echo $_SESSION['email'];?>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>Phone No:
                                <?php echo $_SESSION['phone'];?>
                            </p>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="roomtype">Room Type</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="roomtype" class="form-control w-80 m-auto" required="required">
                                        <option value="Regular">Regular</option>
                                        <option value="Executive">Executive</option>
                                        <option value="VIP">VIP</option>
                                        <option value="VVIP">VVIP</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="Checkin">Check In</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="date"  class="form-control" name="checkin" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="Checkin">Check Out</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="date" name="checkout" class="form-control" required="required">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>Card Payments</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="card_number">Card Number</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="card_number" class="form-control" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="security_code">Card Security Code</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="security_code" class="form-control" required="required">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="Expiry Month">Expiry Month</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="exp_month" class="form-control w-80 m-auto" required="required">
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="Expiry_Year">Expiry Year</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="exp_year" class="form-control w-80 m-auto" required="required">
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="Name_on_card">Name on the Card</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="name_on_card" class="form-control" required="required">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="hidden" class="form-control w-80 m-auto" name="fullname"
                                value="<?php echo  $_SESSION['fullname'];?>">
                        </div>
                        <div class="col-md-4">

                            <input type="hidden" class="form-control w-80 m-auto" name="email"
                                value="<?php echo  $_SESSION['email'];?>">

                        </div>
                        <div class="col-md-4">

                            <input type="hidden" class="form-control w-80 m-auto" name="phone"
                                value="<?php echo  $_SESSION['phone'];?>">

                        </div>

                    </div>
                    <button name="submit" class="btn btn-primary"
                        style="background:#f9a826; color:#152238; border: none;">Book</button>
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
                                    4 person
                                </div>
                            </div>

                            <div class="text-center my-4"> <a href="book_one.php" class="btn btn-warning">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="images/room3.jpg" class="card-img-top" alt="...">
                        <div class="label-top shadow-sm font-weight-bold">Executive</div>
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span
                                    class="float-start badge rounded-pill bg-success">Kshs25,000</span>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="bi bi-cup-fill"></i>
                                    Breakfast Included
                                </div>
                                <div class="col-md-4">
                                    <i class='fas fa-car'></i>
                                    Pick Up not Available
                                </div>
                                <div class="col-md-4">
                                    <i class="bi bi-person-check-fill"></i>
                                    3 person
                                </div>
                            </div>
                            <div class="d-grid gap-2 my-4"> <a href="book_one.php" class="btn btn-warning">Book Now</a>
                            </div>
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
                                    Breakfast Included
                                </div>
                                <div class="col-md-4">
                                    <i class='fas fa-car'></i>
                                    Pick Up Available
                                </div>
                                <div class="col-md-4">
                                    <i class="bi bi-person-check-fill"></i>
                                    2 person
                                </div>
                            </div>
                            <div class="text-center my-4"> <a href="book_one.php" class="btn btn-warning">Book Now</a>
                            </div>
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
                                    Breakfast Included
                                </div>
                                <div class="col-md-4">
                                    <i class='fas fa-car'></i>
                                    Pick Up Available
                                </div>
                                <div class="col-md-4">
                                    <i class="bi bi-person-check-fill"></i>
                                    1 person
                                </div>
                            </div>
                            <div class="text-center my-4"> <a href="book_one.php" class="btn btn-warning">Book Now</a>
                            </div>

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