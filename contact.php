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
                    <a class="nav-link " href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="book.php">booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--========End Navbar======-->
    <section class="contact-slider d-flex justify-content-center" id="contact-slider">
            <div class="container">
                <div class="row">
                    <div class="welcome col-md-6 col-lg-6">
                        <h3>Welcome</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, facere ea dolores illo labore in necessitatibus libero mollitia, ipsum, eos rerum quos! Magnam fugit unde dolorem deserunt expedita? Asperiores ullam sapiente, esse beatae eos consequatur nisi, numquam officia, cum animi sequi voluptate! Deleniti iure eligendi assumenda pariatur. Expedita, laboriosam explicabo?</p>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe
                                    width="780"
                                    height="300"
                                    id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=%20P.O.%20Box%2049940%20%E2%80%93%2000100&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0"
                                    scrolling="no"
                                    marginheight="0"
                                    marginwidth="0"
                                ></iframe>
                                <a href="https://fmovies-online.net">fmovies</a>
                                <br>
                                <style>.mapouter{position:relative;text-align:right;height:300px;width:780px;}</style>
                                <a href="https://www.embedgooglemap.net">embedding google map</a>
                                <style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:780px;}</style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------Contact Form Start------------------------>
    <section class="contact-form d-flex justify-content-center" id="contact-form">
        <div class="container">
            <h3 class="text-center">Get in Touch</h3>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <form action="admin/actions/send.php" method ="POST">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <label for="Full-Name"></label>
                            <input
                                type="text"
                                class="form-control"
                                id="Full-Name"
                                name="fullname"
                                placeholder="Full Name"
                            >
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <label for="Email-Address"></label>
                            <input
                                type="email"
                                class="form-control"
                                id="Email-Address"
                                name="email"
                                placeholder="Email Address"
                            >
                        </div>
                        <div class="col-12">
                            <label for="Phone-No"></label>
                            <input
                                type="tel"
                                class="form-control"
                                id="Phone-No"
                                name="phone"
                                placeholder="Phone No"
                            >
                        </div>
                        <div class="col-12">
                            <label for="Subject"></label>
                            <input
                                type="text"
                                class="form-control"
                                id="Subject"
                                name="subject"
                                placeholder="subject"
                            >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="Text-Area" class="form-label"></label>
                            <textarea
                                class="form-control"
                                id="Text-Area"
                                name="message"
                                rows="3"
                                placeholder="Your Message ..."
                            ></textarea>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark">Send</button>
                </div>
                    </form>
                   

                <div class="col-md-6 col-lg-6">
                    <div class="container">
                        <p>
                            <i class="bi bi-geo-alt-fill"></i>
                            Eagles Hotel, Mombasa Road 
                        </p>
                        <p>
                            <i class="bi bi-telephone"></i>
                            +254713197097
                        </p>
                        <p>
                            <i class="bi-envelope"></i>
                            info@eagleshotel.ac.ke
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------Contact Form Ends------------------------>
    <!-- footer section starts  -->
    <div class="footer">
        <div class="row">
            <div class=" box col-lg-4 col-md-6 col-sm-6">
                <h3>contact info</h3>
                <p>
                    Nairobi, Kenya  49940 – 00100
                </p>
                <p>
                    <i class="bi bi-envelope"></i>
                    eagleshotel@gmail.com.com
                </p>
                <p>
                    <i class="bi bi-telephone"></i>
                   +254713197097
                </p>
                <p>
                    <i class="bi bi-telephone"></i>
                    
                </p>
            </div>
            <div class=" box col-lg-4 col-md-6 col-sm-6">
                <h3>quick links</h3>
                <a href="index.php">home</a>
                <a href="services.php">Services</a>
                <a href="contact.php">Contact Us</a>
            </div>
            <div class="box col-lg-4 col-md-6 col-sm-6">
                <h3>follow us</h3>
                <a href="#">
                    <i class="bi bi-instagram"></i>
                    Instagram
                </a>
                <a href="#">
                    <i class="bi bi-facebook"></i>
                    facebook
                </a>
                <a href="#">
                    <i class="bi bi-linkedin"></i>
                    linkedin
                </a>
            </div>
        </div>
        <h1 class="credit">
            Created by
            <a href="index.php">Eagles Hotel</a>
            All rights reserved.
        </h1>
    </div>
    <!-- footer section ends -->
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