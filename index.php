<?php
include('partials/connection.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/style.css">


    <title>Landing Page</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="img/logo1.jpeg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <!-- <button class="btn btn-primary ms-lg-3">Join Us</button> -->
                <input type="button" class="btn btn-primary ms-lg-3" onclick="location.href='user_login.php';" value="User" />

                <input type="button" class="btn btn-primary ms-lg-3" onclick="location.href='admin_login.php';" value="Admin" />
            </div>
        </div>
    </nav><!-- //NAVBAR ENDS HERE-->

    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white">Manage Certificates efficiently</h1>
                    <p class="text-white my-3">We provide easy provision, manage, and storage for Certificate details to our users.</p>
                    <a href="#" class="btn me-2 btn-primary">Get Started</a>
                    <a href="#" class="btn btn-outline-light">Contact Us</a>
                </div>
            </div>
        </div>
    </div><!-- //HERO -->

    <!-- SERVICES -->
    <section id="services">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">SERIVCES</h6>
                    <h1>Our Services</h1>
                    <p>We are a Certificate Management Comapany where our users can store and validate their important certificate as well as manage them efficiently</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect bounceInUp">
                        <div class="iconbox">
                            <i class='bx bxs-check-shield'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Authentication</h5>
                        <p>Document will be bearing an unique identification to ensure privacy.  </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-comment-detail'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Easy Access</h5>
                        <p>Accesing Certifictes are easy with easy login and download facility.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-cog'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Maintainance</h5>
                        <p>Provide easy updation, deletion document and raising query facility. </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- SERVICES -->

    <!-- FEATURES -->
    <section class="row w-100 py-0 bg-light" id="features">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h6 class="text-primary">WHY TO CHOOES US</h6>
                        <h1>Best solution for your business</h1>
                        <p>We are a Certificate Management Comapany where our users can store and validate their important certificate as well as manage them efficiently</p>

                        <div class="feature d-flex mt-5">
                            <div class="iconbox me-3">
                                <i class='bx bxs-comment-edit'></i>
                            </div>
                            <div>
                                <h5>Easy Access</h5>
                                <p>Provide easy login and download facility. </p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class='bx bxs-user-circle'></i>
                            </div>
                            <div>
                                <h5>Certificate Maintainance</h5>
                                <p>Provide easy maintainence facility to maintain records.</p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class='bx bxs-download'></i>
                            </div>
                            <div>
                                <h5>Secure</h5>
                                <p>Document will be having an unique identification for security. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- FEATURES -->

    <!-- TEAM -->
    <section id="team">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">TEAM</h6>
                    <h1>Meet Our Crew Members</h1>
                    <p>Who are the real people behind all the smoke and mirrors?.</p>
                </div>
            </div>
            <div class="row text-center g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/shashikant.jfif" alt="">
                        <h5 class="mb-0 mt-4">Shashikant Solanki</h5>
                        <p>Full Stack Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/garv.jpg" alt="">
                        <h5 class="mb-0 mt-4">Garv Pratap Singh</h5>
                        <p>Full Stack Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/gunjan.png" alt="">
                        <h5 class="mb-0 mt-4">Gunjan</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/ashutosh.jpg" alt="">
                        <h5 class="mb-0 mt-4">Ashutosh Sharma</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            
            <div class="row text-center g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/amit.jpeg" alt="">
                        <h5 class="mb-0 mt-4">Amit kapoor</h5>
                        <p>Full Stack Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/anjali.jpeg" alt="">
                        <h5 class="mb-0 mt-4">Anjali</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/annie.jpg" alt="">
                        <h5 class="mb-0 mt-4">Ananya Madaan</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section><!-- TEAM -->

    <!-- BLOG -->
    <section id="blog" class="bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">ABOUT US</h6>
                    <h1>Who Are We?</h1>
                    <p> We at iSecure are working on providing the organization Certificates to their students where they can issue certificates for their employee and students can view and validate them. </p>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga -->
                        <!-- in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p> -->
                </div>
            </div>
        </div>
    </section><!-- BLOG -->

    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">CONTACT</h6>
                    <h1>Get In Touch</h1>
                    <p>Want to have a conversation with our development for any queries related to this project, Please enter your details below.</p>
                </div>
            </div>

            <form action="" class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Enter E-mail">
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="Enter Subject">
                </div>
                <div class="col-md-10">
                    <textarea name="" id="" cols="30" rows="5" class="form-control"
                        placeholder="Enter Message"></textarea>
                </div>
                <div class="col-md-10 d-grid">
                    <a href="mailto:shashikantsolanki042@gmail.com"> Send email </a>
                    <button class="btn btn-primary">Contact</button>
                </div>
            </form>

        </div>
    </section><!-- CONTACT -->

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <img class="logo" src="img/logo1.jpeg" alt="">
                    </div>
                    <div class="col-lg-2">
                        <h5 class="text-white">Brand</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <!-- <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li> -->
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="text-white">More</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Warranty</a></li>
                            <li><a href="#">Shipment</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="text-white">Contact</h5>
                        <ul class="list-unstyled">
                            <li>Address: Noida Sector - 125</li>
                            <li>Email: shashikantsolanki041@gmail.com</li>
                            <li>Phone: (+91) 9818037464</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">© 2022 copyright all right reserved | Designed with <i
                            class="bx bx-heart text-danger"></i> by
                            <a>Shashikant Solanki</a></p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/shashikant.solanki.581"><i class='bx bxl-facebook'></i></a>
                            <a href="https://twitter.com/cyborg9303"><i class='bx bxl-twitter'></i></a>
                            <a href="https://www.instagram.com/cyborg9303/"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>