<?php


include "link.php";

if (isset($_POST["signup"])) {

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];


    // Validate

    if (strlen($password) < 6) {
        $passError = "Password must have more than 6 characters";
        echo $passError;
    } else {
        $storepassword = password_hash($password, PASSWORD_DEFAULT);
    }

    if ($confirmpassword != $password) {
        $conPassErr = "Passwords do not Match!";
        echo $confirmpassword;
    }


    if (empty($passError) and empty($conPassErr)) {

        $sql = "INSERT INTO `users`( `fullname`, `email`, `password`) 
        VALUES ('$fullname','$email','$storepassword')";

        $result = mysqli_query($link, $sql);

        if ($result) {
            echo "You have been registered";
            header("location:login.php");

        } else {
            echo "Error executing query" . mysqli_error($link);
        }


    }


    mysqli_close($link);


}