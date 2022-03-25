<?php
include "handleglogin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta charset="UTF-8">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dashstyles.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-7 offset-md-3 ">
            <div class="signup-form  ">
                <form action="handlelogin.php" method="post" class="mt-5 mb-5  p-5 shadow-lg bg-gradient ">
                    <h3 class="mt-2 mb-1 p-4">Login</h3>

                    <div class="mb-3 col-md-12">
                      <label class="">E-Mail Address</label>
                      <input type="email" name="email" class="form-control rounded-pill p-2" required>
                    </div>



                    <div class="row">
                        <div class="mb-3 p-3 col-md-12" >
                         <label class="">Password</label>
                             <div class="float-end">
                                 <a class="col-6" href="">Forgotten Password?</a>
                             </div>

                         <input type="password" name="password" class="form-control rounded-pill p-2" required>
                        </div>
                    </div>
                    <div class=" p-2 col-md-12">
                      <input type="checkbox" name="remember" class="p-8"><label class=" p-2">Remember Me?</label>
                      <hr class="w-40 h-2">
                    </div>

                    <div class="row mb-3 mt-4 p-2 mb-4 ">
                        <input type="submit" class="btn btn-success rounded-pill p-2" name="login" value="Login">
                    </div>
                    <div class="row mb-3 mt-4 p-2 mb-4 ">
                        <button onclick="window.Location='<?php echo $login_url; ?>'" type="button"
                                class="rounded-pill btn  btn-danger p-2 mb-5"> <i class="fa fa-google"></i>
                            Register with Google </button>
                    </div>
                    <div class="text-success">
                        <a href="registration.php" class="offset-4">Create Account</a></p>
                    </div>



                </form>

                            </div>
        </div>
    </div>
</div>
</div>


</body>
</html>