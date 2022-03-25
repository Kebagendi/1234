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
<div class="row m-2">
    <div class="col-4 offset-sm-4">
        <div class="alert alert-dark ">
            <form action="delete.php" method="post">
                <div class="p-2 text-center">
                    <label class="form-label"> You certain you want to delete this order?</label> <br>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                </div>

                <div class="p-2 text-center">
                    <input type="submit" name="submit" value="YES" class="btn rounded-pill btn-danger col-4 ">
                    <a href="order.php" class="btn btn-success  rounded-pill col-4 ">Not Really</a>
                </div>
            </form>
        </div>

    </div>
</div>
</body>
</html>



<?php

session_start();

// check if user has looged in?

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){

    header("location:login.php");
    exit();
}

include "link.php";



if (isset($_POST["submit"]) and !empty($_POST["id"])){

    $id =$_POST["id"];

    $sql = "DELETE FROM `oders` WHERE id=$id";

    $result = mysqli_query($link,$sql);

    if ($result){

        echo "<div class='row  text-center'>";
        echo "<p class='alert alert-success col-4 offset-4 text-center p-4'>Record deleted Successfully <br>
              <a class='btn btn-danger col-md-4 col-md-4  float-end' href='order.php'>BACK</a></p>";
        echo "</div>";
        echo "<script>window.alert(RECORD HAS BEEN DELETED SUCCESSFULLY)</script>";

    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }



}else{

?>




<?php }?>

