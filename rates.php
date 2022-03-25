<?php
session_start();

$username = $_SESSION["username"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rates and order</title>
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
                            <li><a class="dropdown-item text-white" href="#"><i class="fa fa-question fa-1x p-1"></i> FAQ</a></li>
                            <li><a class="dropdown-item text-white" href="#"><i class="fa fa-youtube p-1 "></i>Tutorials</a></li>
                            <li><a class="dropdown-item text-white" href="#"><i class="fa fa-desktop p-1"></i>ICT Support</a></li>
                        </ul>
                    </li>


                </ul>
                <!---message-->
                <!-- Button trigger modal -->
                <span type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <i class="fa fa-envelope"></i>
                </span>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-purple">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1"><i class="fa fa-envelope"></i><h>Messages</h></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body dg-purple">
                                <p>Dear <?php echo $username?></p>
                                <?php

                                include "link.php";


                                $sql = "SELECT * FROM `oders`";

                                $result = mysqli_query($link,$sql);

                                if ($result){

                                    $data = mysqli_num_rows($result);

                                    if ($data>0){
                                        echo "<div>Your request for service</div>";
                                        echo "<div>has been Received. A service provider is soon on way to service your request.Thank you.Enjoy your time</div>";




                                    }else{
                                        echo "<p class='alert alert-primary'>Stated Record Not Found</p>";
                                    }
                                }else{
                                    echo "Error executing query $sql".mysqli_error($link);
                                }
                                ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sucess" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>



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

<div class="container">
    <div class="row">
        <div class="p-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success float-end p-3 shadow-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Order Service(s)
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header bg-purple">
                            <h5 class="modal-title" id="exampleModalLabel">Order Your Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-purple">
                            <div class="container-fluid">
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
                                            <select name="service" id="service" >
                                                <option value="Laundry">Cooking</option>
                                                <option value="Laundry">Laundry</option>
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

                                            <textarea id="message" name="message" placeholder="say something..." rows="2" cols="25">

                                            </textarea>

                                        </div>

                                        <div class="mb-3 col-sm-12 mt-5">
                                            <input type="submit" name="submit" class= "rounded-pill btn btn-success  " value="Submit">

                                        </div>

                                    </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer bg-purple">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 ">
            <p class="text-center">
                At 2shafix ,we are dedicated in service provinsion with your satisfaction in the big picture.

            </p>
            <div >

                <div class="offset-2">
                    <img class="p-2 offset-0 shadow rounded-circle" src="images/cooking1.jpg" height="200" width="200" alt="Loading Image">
                    <p class="text-center">cooking services</p>
                </div>

                <div>
                    <img class="rounded-circle shadow p-2" src="images/housekeeping.jpg" height="200" width="200" alt="Loading Image">
                    <p>Home fixing</p>
                </div>
                <!---
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
                <---!>
            </div>
        </div>
        <div class="col-8 ">

            <div class="accordion" id="accordionExample">
                <div class="accordion-item bg-primary ">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Rates
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="p-4"><strong>This are our rates.</strong></p>
                            <?php

                            include "link.php";


                            $sql = "SELECT * FROM `services`";

                            $result = mysqli_query($link,$sql);

                            if ($result){

                                $data = mysqli_num_rows($result);

                                if ($data>0){


                                    echo "<table class='table  table-hover bg-gradient mt-8'>";
                                    echo "<tr>";
                                    echo "<th class=''>#</th>";
                                    echo "<th>Service</th>";
                                    echo "<th>MiniPack Ksh/hour</th>";
                                    echo "<th>Availability</th>";

                                    echo "</tr>";
                                    while ($row=mysqli_fetch_array($result)){
                                        echo "<tr class='text-yellow'>";
                                        echo "<td>".$row['id']."</td>" ;
                                        echo "<td>".$row['service']."</td>" ;
                                        echo "<td>".$row['cost']."</td>" ;
                                        echo "<td>".$row['availability']."</td>";
                                        echo "</tr>";

                                    }
                                    echo "</table>";

                                }else{
                                    echo "<p class='alert alert-primary'>Stated Record Not Found</p>";
                                }
                            }else{
                                echo "Error executing query $sql".mysqli_error($link);
                            }
                            ?>
                        </div>
                    </div>
                </div>
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
                    <img class="rounded-circle offset-sm-0" src="https://cdn.webshopapp.com/shops/94414/files/52440074/flag-of-ukraine.jpg "width="100px" height="100px">
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

</div>


</script>

</body>
</html>