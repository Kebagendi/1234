<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta charset="UTF-8">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
                <form action="" class="mt-5 mb-5  p-5 shadow-lg bg-gradient ">
                    <h3 class="mt-2 mb-4 p-4">Login</h3>

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
                    <input type="Password" name="psw" class="form-control rounded-pill p-2" required>
                  </div>
                  </div>
                  <div class=" p-2 col-md-12">
                      <input type="checkbox" name="remember" class="p-8"><label class=" p-2">Remember Me?</label>
                      <hr class="w-40 h-2">
                  </div>

                    <div class="row mb-3 p-3  ">

                            <a href="login.php"><button class="btn btn-outline-success p-2  rounded-pill  col-10">Login</button>
                            </a>
                        </div>
                </form>
                  <div class="text-success">
                     <p class=" text-center mt-4 p-3">Do not have account? <a href="registration.php">Create one</a>
                </p>
            </div>
        </div>
    </div>
</div>
</div>


</body>
</html>