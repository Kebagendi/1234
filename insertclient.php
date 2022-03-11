<?php


$link = mysqli_connect("localhost","root","","2shafix");
include "link.php";

if (isset($_POST["submit"])) {

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $maritalstatus= $_FILES["maritalstatus"];
    $residence = $_FILES["residence"];


    // insert
    $sql = "INSERT INTO `cl` ( `fullname`, `email`, `dob`, `gender`, `maritalstatus`, `residence`)
      VALUES ('$fullname','$email','$dob','$gender','$maritalstatus','$residence')";


    $result = mysqli_query($link, $sql);




    if ($result) {
        echo "<p class='alert alert-success'>Records have been Added</p>";
    } else {

        echo "<p class='alert alert-danger'>Error executing query $sql</p>" . mysqli_error($link);
    }


}

