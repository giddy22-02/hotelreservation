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
                    <a class="nav-link" href="book.php">Book Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--========End Navbar======-->
    <!--========Start Home Slider===-->
    <section class="home-slider d-flex justify-content-left" id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 20rem; background:#152238; color:#f9a826;">
                        <div class="card-body">
                            <h2 class="card-title">Welcome to Eagle's Hotel</h2>
                            <p class="card-text">Where Quality is a priority.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========End  Home Slider=====-->
    <!--========Welcome Start========-->
    <div>
        <div class="row" style="margin: 2rem;">
            <div class="col-md-6 text-center">
                <img src="images/logo2.png" alt="Eagle's hotel logo" width="250" height="250">
            </div>
            <div class="col-md-6" style="color: #152238;">
                <h1>WELCOME TO THE BEST LUXURY HOTEL IN NAIROBI</h1>
                <p>Luxury and comfort that’s what describes Eagle's Hotel. We take pride in introducing ourselves as
                    the best Five-star hotels in Nairobi, Kenya offering serene views with warm hospitality. Located
                    just off Mombasa road, near Nairobi National Park, our hotel enjoys proximity to JKIA (12km), Wilson
                    Airport (6km) and City Centre (10km). Our hotel is a perfect blend of service excellence, quality
                    accommodation and quintessential conference facility. </p>
            </div>
        </div>
    </div>
    <div>
        <div class="row" style="margin:2rem;">
            <div class="col-md-5" style="color:#152238;">
                <h1>STAYING AT EAGLE'S HOTEL</h1>
                <p>Enjoy a perfect luxury stay in Nairobi with breath-taking views of the Nairobi National Park. Our
                    guest rooms and suites exude an air of eminence with lavish comforts, generous amenities and
                    designer furnishings. </p>
                <h5>Amenities</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p><i class="bi bi-wifi"></i> Free Wi-Fi</p>
                        <p><i class="bi bi-hypnotize"></i> Air-conditioned</p>
                        <p><i class="bi bi-briefcase-fill"></i> Swimming pool</p>
                        <p><i class="bi bi-briefcase-fill"></i> Business center</p>
                        <p><i class="bi bi-wifi"></i> Fitness center</p>
                    </div>
                    <div class="col-md-6">
                        <p><i class="bi bi-hourglass-top"></i> Bar/Loundge</p>
                        <p><i class="bi bi-people-fill"></i> Family-Friends</p>
                        <p><i class="bi bi-briefcase-fill"></i> Swimming pool</p>
                        <p><i class="bi bi-briefcase-fill"></i> Business center</p>
                        <p><i class="bi bi-wifi"></i> Fitness center</p>
                    </div>
                </div>
            </div>

            <div class="col-md-7" style="width:40rem">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
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
        </div>
    </div>
    <div>
        <div class="row" style="margin:2rem;">
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/conference1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/conference2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/conference3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/conference4.jpg" alt="Third slide">
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
            <div class="col-md-4" style="color:#152238;">
                <h1>BUSINESS AT EAGLE"S HOTEL</h1>
                <p>Looking for a perfect venue for meetings and conference facilities in Nairobi, Kenya? With our wide
                    choice of event venues and well-planned spaces, big and small, we can host sales meets,
                    convocations, conferences and destination weddings. While having some free time during the meeting
                    you can experience the views of the city and the Nairobi National Park. </p>
            </div>
        </div>
    </div>
    <!--========welcome End==========-->
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
</body>

</html>