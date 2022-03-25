<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
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
            <div class="signup-form ">
                <form action="handleregistration.php" method="post" class="mt-5 mb-5  p-5 shadow-lg bg-gradient">
                    <h3 class="mt-2 mb-4 p-4">Sign Up</h3>
                    <div class="mb-3 col-md-12">
                        <label class="">Full Name</label>
                        <input type="text" name="fullname" class="form-control rounded-pill p-2" required>
                    </div>

                    <div class="mb-3 col-md-12">
                        <label class="">E-Mail Address</label>
                        <input type="email" name="email" class="form-control rounded-pill p-2" required>
                    </div>
                    <div class="row">
                        <div class="mb-3 p-3 col-md-12" >
                            <label class="">Password</label>
                            <input type="password" name="password" class="form-control rounded-pill p-2" required>
                        </div>
                    </div>
                    <div class=" col-md-12">
                        <label class="">Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control rounded-pill p-2 mb-3" required>
                        <hr>
                    </div>
                    <div class="row mb-3 mt-4 ">
                        <input type="submit" class="btn btn-success rounded-pill p-2" name="signup" value="SignUp">

                    </div>
                    <hr>
                    <div class="row ">

                    </div>
                </form>
                <div class="text-success">
                    <p class=" text-center mt-4 p-3">Got an account? <a href="login.php">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>