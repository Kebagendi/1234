<?php


include "link.php";

if (isset($_POST["create"])) {


    $service = $_POST["service"];
    $cost = $_POST["cost"];
    $availability = $_POST["availability"];


    $sql = "INSERT INTO `services`(`service`, `cost`, `availability`)
                    VALUES ('$service','$cost','$availability')";


    $result = mysqli_query($link, $sql);

    if ($result) {
        echo "<p class='alert-success'>YOUR SERVICE HAS BEEN CREATED SUCCESSFULLY</p>";
        header("location:admindashboard.php");

    } else {
        echo "Error executing query" . mysqli_error($link);
    }
    mysqli_close($link);
}




