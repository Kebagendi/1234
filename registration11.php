<?php
include "link.php";
if(isset($_POST["Submit"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $maritalstatus = $_POST["maritalstatus"];
    $residence = $_POST["residence"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];


    $sql ="INSERT INTO `cl`(`fullname`, `email`, `dob`, `gender`, `maritalstatus`, `residence`, `password`, `confirmpassword`)
    VALUES ('$fullname','$email','$dob','   $gender','$maritalstatus','$residence','','$password','$confirmpassword')";

    $result =mysqli_query($link, $sql);

}else{
    echo "Please fill in the form";
}

?>



<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dashstyles.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>

</head>
<div class="container ">
    <div class="row">
        <div class="col-md-7 offset-md-3 ">
            <div class="signup-form ">
                <form action="handleregistration.php" method="post" class="mt-5 mb-5  p-5 shadow bg-gradient">
                    <h3 class="mb-5 ">Create Your Account</h3>


                    <div class="row">
                        <div class="mb-3 col-md-6" >
                            <label>Full Name</label>
                            <input type="text" name="fullname" class="form-control rounded-pill" required placeholder="Enter Full Name">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control rounded-pill" required placeholder="mickeymouse@example.com">
                        </div>

                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6" >
                            <label>dob</label>
                            <input type="date" name="dob" class="form-control rounded-pill" required placeholder="dd/mm/yyyy">
                        </div>
                        <div class="mb-3 col-md-6 float-end">
                            <label>Gender</label><br>
                            <input type="radio" name="gender" value="Male" >Male<br>
                            <input type="radio" name="gender" value="Female" >Female<br>
                            <input type="radio" name="gender" value="Other" >Other<br>
                        </div>
                        <div class="row flex">
                            <div class="mb-3 col-md-6 flex-column" >
                                <label for="maritalstatus">Marital Status</label>
                                <select name="maritalstatus" id="maritalstatus">
                                    <option value="single">Single</option>
                                    <option value="maried">Maried</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="seperated">Seperated</option>
                                </select>
                            </div>
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
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control rounded-pill" required  placeholder="Enter your Password " >
                    </div>

                    <div class="mb-3 col-md-12">
                        <label>Confirm Password</label>
                        <input type="Password" name="confirmpassword" class="form-control rounded-pill" required placeholder="Confirm your Password">
                    </div>
                    <div class="mb-3 col-sm-12 mt-5">
                        <input type="submit" name="signup" class= "rounded-pill btn btn-success  " value="Sign Up">

                    </div>
                    <div class="col-sm-12">

                        <a href="">
                            <button class=" btn btn-danger   p-2 rounded-pill"><i class="fa fa-google text-light "></i><span class="text-light align-middle">SignUp with Google</span></button>
                        </a>
                        <hr>
                    </div>
                </form>
            </div>
        </div>
        <p class="text-success text-center "> If you have an account,please <a href="login.php">login Now</a>
        </p>
    </div>
</div>

</body>
</html>

</body>
</html>