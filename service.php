<?php
session_start();

$username = $_SESSION["username"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Services</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dashstyles.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<style>
    .swiper {
        width: 100%;
        height: 50%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        position: relative;
    }
    .slide-text{
        color: navy;
        position: absolute;
    }
    .slide-text h2{
        color: #0dcaf0;
        font-size: 60px;
        margin: 0;
    }
    .slide-text p{
        font-size: 17px;
        color: white;

    }
    .slide-text a{
        text-decoration: none;
        font-size: 50px;
        color: #000;
        background-color: darkgreen;
        border-radius: 5px;
        padding: 10px 30px;
        text-transform: uppercase;
        display: inline-block;
        margin-top: 15px;
    }
    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>


<!-- Swiper -->
<div>
    <div>
        <div>
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img class="" src="images/logo.png" width="200">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active ml-3" aria-current="page" href="service.php">
                                        <span class="text-light">HOME</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="dash.php">
                                        <span class="text-light">GET SERVICE</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="rates.php">
                                        <span class="text-light">RATES</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <span class="text-light">CONTACT</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="text-light">HELP</span>
                                    </a>
                                    <ul class="dropdown-menu bg-purple " aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item text-white" href="#"><i class="fa fa-question  m-2"></i> FAQ</a></li>
                                        <li><a class="dropdown-item text-white" href="#"><i class="fa fa-youtube m-2"></i>Tutorials</a></li>
                                        <li><a class="dropdown-item text-white" href="#"><i class="fa fa-desktop m-2"></i>ICT Support</a></li>
                                    </ul>
                                </li>


                            </ul>



                            <div class="dropdown">
                                <div class= dropdown-toggle" type="button" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="rounded-circle m-3" src="images/maleavator.png" height="30" width="30">
                                </div>
                                <ul class="dropdown-menu bg-purple" aria-labelledby="dropdownMenu">
                                    <li><a class="dropdown-item" href="registration11.php">
                                            <span class="text-light"><i class="fa fa-user m-2"></i>Profile</span></a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">
                                            <span class="text-light"><i class="fa fa-cog m-2 "></i>Settings</span></a>
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php">
                                            <span class="text-light"><i class="fa fa-sign-out  m-2"></i>LogOut</span></a>
                                    </li>

                                </ul>
                            </div>
                            <i class="fa fa-spinner fa-pulse"></i>
                            <span>Welcome <?php echo "$username";?></span>


                        </div>
                    </div>
                </nav>

            </header>

        </div>
        <div class="col-4">
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide ">
                    <img src="images/home1.jpg" height= width=>
                    <div class="slide-text">
                        <h2>WELCOME</h2>
                        <p>We are glad to have you here at 2shafix. Trust you me, we never disappoint.Get it all done on a click.</p>
                        <a href="login.php">Get started</a>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <img src="images/home2.jpg" height= width=>
                    <div class="slide-text">
                        <h2>WELCOME</h2>
                        <p>We are glad to have you here at 2shafix. Trust you me, we never disappoint.Get it all done on a click.</p>
                        <a href="login.php">Get started</a>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <img src="images/home3.jpg" height= width=>
                    <div class="slide-text">
                        <h2>WELCOME</h2>
                        <p class="text-success">We are glad to have you here at 2shafix. Trust you me, we never disappoint.Get it all done on a click.</p>
                        <a href="login.php">Get started</a>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <img src="images/home4.jpg" height= width=>
                    <div class="slide-text">
                        <h2>WELCOME</h2>
                        <p>We are glad to have you here at 2shafix. Trust you me, we never disappoint.Get it all done on a click.</p>
                        <a href="login.php">Get started</a>
                    </div>
                </div>

            </div>

        </div>


        </div>
    </div>
</div>
<div class="container">
    <div><h1 class="text-center text-success btn-outline-light p-4"><b>Why Us</b></h1></div>
    <div class="row">
        <div class="col-6">
            <div class="card mb-3 " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="p-2" src="images/quality.png" width="150px" height="150px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-purple">
                            <h5 class="card-title">Quality</h5>
                            <p class="card-text text-white">At 2shafix we are dedicated in providing qujality driven services .
                                quality is our first priority.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/time.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-purple">
                            <h5 class="card-title">Timely Response</h5>
                            <p class="card-text text-white">We aim at servicing your customer needs in the shortest time possible. All the time.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/proff.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-purple">
                            <h5 class="card-title bg-purple">Proffessional experts</h5>
                            <p class="card-text text-white">We have a team driven by great ethics and ethos that dictate a wonderful and wholistic work envirnment.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://thumbs.dreamstime.com/z/black-white-illustration-cash-21298194.jpg" width="150px" height="150px" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-purple">
                            <h5 class="card-title bg-purple">Value for your money</h5>
                            <p class="card-text text-white">We offer cost-friendly rates.We value and care for your financial wellfare and thus offering servics
                                at cost effective rates.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">


    </div>
</div>

<div class=" row bg-footer">
    <h6 class="text-center p-3">Terms and conditions apply</h6>
    <div class="col-4">
        <div class="text-center">
            <h3>Supported by:</h3>
            <div class="row">
                <div class="">
                    <img class="rounded p-4" src="data:image/png;base64,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"width=200px alt="Mastercard">
                </div>
                <div class="">
                    <img class="rounded p-4" src="https://learn.emobilis-lms.org/pluginfile.php/1/theme_moove/logo/1614840836/logo.jpg" width="200px" alt="eMobilis">

                </div>
            </div>



        </div>
    </div>
    <div class="col-4">
        <h3 class="text-white">Contacts</h3>
        <ul class="styleul">
            <li><a href="https://mail.google.com/"><i class="fa fa-envelope-square m-2"></i></a>
                <span class="">Gmail</span>

            </li>
            <li><a href=""> <i class="fa fa-twitter-square m-2"></i></a>
                <span>Twitter</span>
            </li>
            <li><a href=""><i class="fa fa-instagram m-2"></i></a>
                <span>Instagram</span>

            </li>
            <li>
                <a href=""><i class="fa fa-facebook-square m-2"></i></a>
                <span class="">Facebook</span>

            </li>
            <li>
                <a href=""><i class="fa fa-whatsapp m-2"></i></a>
                <span class="">+254713837785</span>

            </li>
            <li>
                <a href=""><i class="fa fa-youtube m-2"></i></a>
                <span class="">Youtube</span>

            </li>

        </ul>
    </div>
    <div class="col-4">
        <h3>Support</h3>
        <div class="p-4" >
            <img class="rounded-circle offset-sm-1" src="https://cdn.webshopapp.com/shops/94414/files/52440074/flag-of-ukraine.jpg "width="100px" height="100px">
            <div class="offset-sm-0 text-light">Together with Ukrain</div>
        </div>

        <a href="service.php"><i class="fa fa-arrow-circle-o-up fa-3x float-end"></i></a>

    </div>
    <footer class="row bg-gradient">

        <div class="text-center p-2">
            <h6 class="text-center grey">&copy; 2Shafix 2022 </h6>
        </div>
    </footer>
    </div>
</div>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        // spaceBetween: 0,
        effect: "coverflow",
        grabCursor: "true",
        centered : "true",
        autoplay:{
            delay: 2800,
            disableOnInteraction: "false,"
        },
        coverflowEffect: {
            rotation:   100,
            stretch: 0,
            depth: 100,
            modifier: 1,
            Shadows: "true",
        },
        spaceBetween: 30,

        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
</script>



<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

</body>
</html>