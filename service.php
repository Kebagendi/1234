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
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="rounded-circle imghover" src="images/kidsfan.jpg" width="40px" height="40px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active ml-3" aria-current="page" href="#">
                            <span class="text-light">HOME</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dash.php">
                            <span class="text-light">GET SERVICE</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="orders.php">
                            <span class="text-light">MY ORDERS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
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
                            <li><a class="dropdown-item text-white" href="#"><i class="fa fa-question fa-2x p-2"></i> Frequently Asked Questions</a></li>
                            <li><a class="dropdown-item text-white" href="#">Tutorials</a></li>
                            <li><a class="dropdown-item text-white" href="#">ICT Support</a></li>
                        </ul>
                    </li>


                </ul>
                <i class="fa fa-spinner fa-pulse"></i>



                <div class="dropdown">
                    <div class= dropdown-toggle" type="button" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="rounded-circle m-3" src="images/maleavator.png" height="30" width="30">
                    </div>
                    <ul class="dropdown-menu bg-purple" aria-labelledby="dropdownMenu">
                        <li><a class="dropdown-item" href="#">
                            <span>Settings</span></a>
                            <hr>
                        </li>

                        <li><a class="dropdown-item" href="#">
                            <span>LogOut</span></a>
                            <hr>
                        </li>

                    </ul>
                </div>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </script>

            </div>
        </div>
    </nav>

</header>
<div>
    <a href="login.php">
    <button class="btn btn-success rounded-pill float-end p-2 mb-3 col-10">Log in</button>
    </a>
</div>


<!-- Swiper -->
<div>
    <div>
        <div>

        </div>
        <div class="col-4">
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide "><img src="images/inhouselaundry.jpg" height="  100px" width="  100px"></div>
                <div class="swiper-slide "><img src="images/housekeeping1.jpg" height="  100px" width="  100px"></div>
                <div class="swiper-slide "><img src="images/gardening1.jpg" height="  100px" width="  100px"></div>
                <div class="swiper-slide "> <img src="images/electricinstolation.jpg" height="  100px" width="  100px"></div>
                <div class="swiper-slide "> <img src="images/electronicrepair2.jpg" height="  100px" width="  100px"></div>
                <div class="swiper-slide "> <img src="images/kidspainting.jpg" height="  100px" width="  100px"></div>

            </div>

        </div>


        </div>
    </div>
</div>
<div class=" row bg-dark">
    <div class="col-4">
        <div class="text-center">
            <h3>Supported by:</h3>
            <div class="row">
                <div class="col-6">
                    <img class="rounded p-4" src="data:image/png;base64,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"width=200px alt="Mastercard">
                </div>
                <div class="col-6">
                    <img class="rounded p-4" src="https://learn.emobilis-lms.org/pluginfile.php/1/theme_moove/logo/1614840836/logo.jpg" width="200px" alt="eMobilis">

                </div>
            </div>



        </div>
    </div>
    <div class="col-4">
        <h3 class="text-white">Contacts</h3>
        <ul class="styleul">
            <li><a href="https://mail.google.com/"><i class="fa fa-envelope"></i></a>
                <span class="">Gmail</span>

            </li>
            <li>
                <a href=""><i class="fa fa-twitter"></i></a>
                <span class="">Twitter</span>


            </li>
            <li>
                <a href=""><i class="fa fa-instagram"></i></a>
                <span class="">Instagram</span>

            </li>
            <li>
                <a href=""><i class="fa fa-facebook"></i></a>
                <span class="">Facebook</span>

            </li>
            <li>
                <a href=""><i class="fa fa-phone"></i></a>
                <span class="">+254713837785</span>

            </li>
        </ul>
    </div>
    <div class="col-4">
        <h3>Support</h3>

    </div>
    <footer class="row bg-gradient">

        <div class="text-center p-2">
            <small class="grey">&copy; 2Shafix 2022  </small>
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
        spaceBetween: 0,
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