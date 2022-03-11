<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dashstyles.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>



</head>
<body >
<!--nav bar--->
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
                        <a class="nav-link active" aria-current="page" href="#">
                            <span class="text-light">GET SERVICE</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
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



<div class="container-fluid">
    <div class="row">
        <div class="col-3 ">
            <p class="text-center">
                At 2shafix ,we are dedicated in service provinsion with your satisfaction in the big picture.

            </p>
            <div >

                <div class="offset-2">
                    <img class="p-2 offset-1 shadow" src="images/cooking1.jpg" height="200" width="200" alt="Loading Image">
                    <p class="text-center">cooking services</p>
                </div>

                <div>
                    <img class="rounded-circle shadow p-2" src="images/housekeeping.jpg" height="200" width="200" alt="Loading Image">
                    <p>Home fixing</p>
                </div>
                <div>
                    <img class="rounded-circle p-2" src="images/inhouselaundry.jpg" height="200" width="200" alt="Loading Image">
                    <p>inhouse laundry</p>
                </div>
                <div>
                    <img class="rounded-circle p-2" src="images/electricinstolation.jpg" height="200" width="200" alt="Loading Image">
                    <p>Electrical installation</p>
                </div>
                <div>
                    <img class="rounded-circle p-2" src="images/kidsfan.jpg" height="200" width="200" alt="Loading Image">
                    <p>KidsCare</p>
                </div>



            </div>
        </div>
        <div class= "col-8">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/outsidecatering.jpg" height="800"  class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/outdoorlaundry.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/housekeeping.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row ">
                <div class="col-4">
                    <div class="card mt-5 bg-purple" >
                        <img src="images/gardening1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Gardening</p>
                            <form action="">
                                <button class="btn btn-success">get service</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mt-5 bg-purple" >
                        <img src="images/electronicrepair2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Electronic Repair</p>
                            <form action="">
                                <button class="btn btn-success">get service</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mt-5 bg-purple" >
                        <img src="images/inhouselaundry.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Inhouse Laundry</p>
                            <form action="">
                                <button class="btn btn-success">get service</button>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <div class=" row bg-dark">
        <div class="col-4">
            <div class="text-center">
                <h3>Supported by:</h3>
                <img src="https://learn.emobilis-lms.org/pluginfile.php/1/theme_moove/logo/1614840836/logo.jpg" alt="eMobilis Logo">

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


</body>
</html>