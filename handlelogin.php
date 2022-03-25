<?php
include "link.php";

if (isset($_POST['login'])){

    $useremail = $_POST["email"];
    $userpassword = $_POST["password"];

    // compare
    $sql = "SELECT * FROM `users` WHERE email='$useremail'";

    $result = mysqli_query($link,$sql);


    if ($result){

        $data = mysqli_num_rows($result);


        if ($data==1){

            while ($row=mysqli_fetch_array($result)){

                $id = $row['id'];
                $email = $row["email"];
                $password = $row["password"];
                $fullname = $row["fullname"];


                // verify the password
                if (password_verify($userpassword,$password)){

                    session_start();
                    $_SESSION["loggedin"]=true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"]=$fullname;

                    header("location: dash.php");


                }else{
                    echo "Passwords are not matching";
                }

            }


        }else{

            include "main.php";
            echo "<p class='alert-danger p-4 col-md-5 offset-sm-4 text-center mt-lg-5'>The provided email address has not been found</p>";

        }

    }





}