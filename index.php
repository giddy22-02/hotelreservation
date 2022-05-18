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
                    <a class="nav-link" href="about.php">About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item dropdown profile-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Login</a>
                        <a class="dropdown-item" href="#">Sign Up</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--========End Navbar======-->
    <!--========Start Home Slider===-->
    <section class="home-slider d-flex justify-content-left" id="slider">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 40rem; background:#152238; color:#f9a826;">
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
    <div class="container">
        <div class="row" style="margin-top: 5rem;">
            <div class="col-md-6">
                <img src="images/logo2.png" alt="Eagle's hotel logo" width="250" height="250">
            </div>
            <div class="col-md-6" style="background-color: #152238; color: #f9a826;">
                <h1>WELCOME TO THE BEST LUXURY HOTEL IN NAIROBI</h1>
                <p>Luxury and comfort that’s what describes Eagle's Hotel. We take pride in introducing ourselves as
                    the best Five-star hotels in Nairobi, Kenya offering serene views with warm hospitality. Located
                    just off Mombasa road, near Nairobi National Park, our hotel enjoys proximity to JKIA (12km), Wilson
                    Airport (6km) and City Centre (10km). Our hotel is a perfect blend of service excellence, quality
                    accommodation and quintessential conference facility. </p>
            </div>
        </div>
    </div>
    <!--========welcome End==========-->
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