<?php


session_start();

// check if user has looged in?

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){

    header("location:login.php");
    exit();
}

include "link.php";



if (isset($_POST["update"])) {

    $id = $_POST["id"];
    $up_email = $_POST["email"];
    $up_service = $_POST["service"];
    $up_workhours = $_POST["workhours"];
    $up_gender = $_POST["gender"];
    $up_residence = $_POST["residence"];
    $up_location = $_POST["location"];

    $up_sql ="UPDATE `oders` SET `email`='$up_email',`service`='$up_service',
                   `workhours`='$up_workhours',`gender`='$up_gender',`residence`='$up_residence',`location`='$up_location', WHERE id=$id";



    $up_result=mysqli_query($link,$up_sql);

    if ($up_result){

        echo "<div class='row m-2 text-center'>";
        echo "<p class='alert alert-success'> Order Records have been updated!</p>";
        echo "<a class='btn btn-primary col-md-4' href='order.php'>BACK</a>";
        echo "</div>";


    }else{
        echo "Error executing query $up_sql".mysqli_error($link);
    }



} else {

    if (isset($_GET["id"]) and !empty($_GET["id"])) {

        $id = $_GET["id"];

        $sql = "SELECT * FROM `oders` WHERE id=$id";

        $result = mysqli_query($link, $sql);

        if ($result) {

            $data = mysqli_num_rows($result);

            if ($data == 1) {

                $row = mysqli_fetch_array($result);

                $email = $row['email'];
                $service= $row['service'];
                $workhours= $row['workhours'];
                $gender = $row['gender'];
                $residence = $row['residence'];
                $location = $row['location'];


                ?>
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
                <body>
                <div class="card  col-md-5 offset-sm-4">
                    <div class="card-header bg-purple">
                        Update
                    </div>
                    <div class="card-body bg-purple">
                        <h5 class="card-title">Update orders</h5>
                        <form action="handleorder.php" method="post" enctype="multipart/form-data" class="mt-5 mb-5  p-5 shadow bg-gradient">
                            <h3 class="mb-5 ">Place Your Order</h3>


                            <div class="row">

                                <div class="mb-3 col-md-12">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control rounded-pill" value="<?php echo $email?>">
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
                                <input type="text" name="workhours" class="form-control rounded-pill" value="<?php echo $workhours?>" >
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
                            <input type="text" name="location" class="form-control rounded-pill" value="<?php echo $location?>">
                        </div>


                        <div class="mb-3 col-sm-12 mt-5">
                            <input type="submit" name="update" class= "rounded-pill btn btn-success  " value="Update">

                        </div>

                    </div>

                </div>
                </form>

                        <a href="order.php" class="btn btn-primary">Cancel</a>
                    </div>

                </div>


                </body>
                </html>
                <?php

            } else {
                echo "Order record was found";
            }


        } else {
            echo "error executing query $sql" . mysqli_error($link);
        }


    } else {
        echo "id  not picked";
    }


}


?>