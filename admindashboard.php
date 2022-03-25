<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
                <img class="rounded-circle " src="images/kidsfan.jpg" width="40px" height="40px">
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
                        <a class="nav-link active" aria-current="page" href="order.php">
                            <span class="text-light">ORDERS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">
                            <span class="text-light"></span>
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
                                 </ul>
                <i class="fa fa-spinner fa-pulse"></i>
                <i class="fa fa-bell m-2"></i>




                <div class="dropdown">
                    <div class= dropdown-toggle" type="button" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="rounded-circle m-3" src="images/maleavator.png" height="30" width="30">
                    </div>
                    <ul class="dropdown-menu bg-purple w-100" aria-labelledby="dropdownMenu" >
                        <li><a class="dropdown-item" href="registration11.php">
                            <span class="text-light " ><i class="fa fa-user m-2"></i>Profile</span></a>
                            <hr class="shadow-lg">
                        </li>
                        <li><a class="dropdown-item" href="#">
                            <span class="text-light"><i class="fa fa-cog m-2 "></i>Settings</span></a>
                            <hr>
                        </li>


                        <li><a class="dropdown-item" href="#">
                            <span class="text-light"><i class="fa fa-sign-out m-2" aria-hidden="true"></i>LogOut</span></a>
                            <hr>
                        </li>

                    </ul>
                </div>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

        </div>

    </nav>

</header>

    <div class="row">
        <div class="col-12">
            <h2 class="text-center bg-danger p-4 text-white"><i class="fa fa-user m-4"></i>ADMIN DASHBOARD</h2>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success m-4 p-3 float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <span><i class="fa fa-plus m-2"></i>New order</span>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-purple">
                            <form action="handleorder.php" method="post" class="mt-5 mb-5  p-5 shadow bg-gradient">
                                <h3 class="mb-5 ">Place Your Order</h3>


                                <div class="row">

                                    <div class="mb-3 col-md-12">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control rounded-pill" required placeholder="mickeymouse@example.com">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-12" >
                                        <label for="service">Choose service</label>
                                        <select name="service" id="service">
                                            <option value="Laundry">Cooking</option>
                                            <option value="Housekeeping">Housekeeping</option>
                                            <option value="Electrical Repair">Electrical Repair</option>
                                            <option value="Electrical Installation">Electrical Installation</option>
                                            <option value="Baby Sitting">Baby Sitting</option>
                                            <option value="Gardening and Landscaping">Gardening and Landscaping</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label>work hours</label>
                                    <input type="text" name="workhours" class="form-control rounded-pill" required  placeholder="Enter time work is to take " >
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-12"

                                    <label>Gender</label><br>
                                    <input type="radio" name="gender" value="Male" >Male
                                    <input type="radio" name="gender" value="Female" >Female
                                    <input type="radio" name="gender" value="Other" >Other
                                </div>
                                <div class="row flex">
                                    <div class="mb-3 col-md-6 float-end float-end option">
                                        <label for="residence">Residence</label>
                                        <select name="residence" id="residence">
                                            <option value="Nairobi">Nairobi</option>
                                            <option value="Coast">Coast</option>
                                            <option value="RiftValley">RiftValley</option>
                                            <option value="Western">Western</option>
                                            <option value="Nyanza">Nyanza</option>
                                            <option value="Eastern">Eastern</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label>Local Location</label>
                                        <input type="text" name="location" class="form-control rounded-pill" required placeholder="Enter the local location name eg Isinya, Manyani">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label for="message">More info:</label>
                                        <textarea id="message" name="message" placeholder="say something..." rows="2" cols="25"></textarea>
                                    </div>

                                    <div class="mb-3 col-sm-12 mt-5">
                                        <input type="submit" name="submit" class= "rounded-pill btn btn-success  " value="Submit">
                                    </div>
                                </div>

                    </div>
                    </form>
                        </div>
                        <div class="modal-footer bg-success">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><
</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-5 offset-3 ">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item bg-footer">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Services
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body bg-footer">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                <span><i class="fa fa-plus"></i>New</span>
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success">
                                            <h5 class="modal-title" id="staticBackdropLabel">Service Entry</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-purple">
                                            <form action="handleservice.php" method="post" class="mt-5 mb-5  p-5 shadow bg-gradient">
                                                <h3 class="mb-5 ">Create New Service</h3>
                                                <div class="mb-4">
                                                    <label>Service</label>
                                                    <input type="text" name="service" class="form-control rounded-pill" required  placeholder="Enter service name " >
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-12">
                                                        <label>MiniPack perHour(ksh)</label>
                                                        <input type="text" name="cost" class="form-control rounded-pill" required  placeholder="enter amount charged per hour " >
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 mt-3 col-md-12">
                                                        <label>Availability</label><br>
                                                        <input type="radio" name="availability" value="Available" >Available
                                                        <input type="radio" name="availability" value="Unavailable" >Unavailable
                                                        <input type="radio" name="availability" value="comming soon">Comming soon
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <input type="submit" name="create" value="Create" class="btn btn-success rounded-pill col-md-6 float-end">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer bg-success">
                                           <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- second modal-->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success float-end " data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                <span><i class="fa fa-pencil"></i>Edit</span>
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success">
                                            <h5 class="modal-title" id="staticBackdropLabel">Update</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-purple">
                                            <form action="handleservice.php" method="post" class="mt-5 mb-5  p-5 shadow bg-gradient">
                                                <h3 class="mb-5 ">Create New Service</h3>
                                                <div class="mb-4">
                                                    <label>Service</label>
                                                    <input type="text" name="service" class="form-control rounded-pill" required  placeholder="Enter service name " >
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-12">
                                                        <label>MiniPack perHour(ksh)</label>
                                                        <input type="text" name="cost" class="form-control rounded-pill" required  placeholder="enter amount charged per hour " >
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 mt-3 col-md-12">
                                                        <label>Availability</label><br>
                                                        <input type="radio" name="availability" value="Available" >Available
                                                        <input type="radio" name="availability" value="Unavailable" >Unavailable
                                                        <input type="radio" name="availability" value="comming soon">Comming soon
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <input type="submit" name="create" value="Create" class="btn btn-success rounded-pill col-md-6 float-end">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer bg-success">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
                          </div>
            </p>
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
        <div class="col-8">
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Show a second modal and hide this one with the button below.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Hide this modal and show the first with the button below.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>
        </div>

    </div>

</body>
</html>