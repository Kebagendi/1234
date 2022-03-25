<?php


include "link.php";

if (isset($_POST["submit"])) {


    $email = $_POST["email"];
    $service = $_POST["service"];
    $workhours= $_POST["workhours"];
    $gender= $_POST["gender"];
    $residence= $_POST["residence"];
    $location= $_POST["location"];
    $message= $_POST["message"];

    if($_POST["service"]='Laundry'){
        $charges=$_POST["workhours"]*600 ;
    }elseif ($_POST["service"]='Housekeeping'){
        $charges=$_POST["workhours"]*400;
    }elseif ($_POST["service"]='Electrical Repair'){
        $charges=$_POST["workhours"]*1000;
    }elseif ($_POST["service"]='Electrical Installation'){
        $charges=$_POST["workhours"]*1000;
    }elseif ($_POST["service"]='Baby Sitting'){
        $charges=$_POST["workhours"]*400;
    }elseif ($_POST["service"]='Gardening and Landscaping'){
        $charges=$_POST["workhours"]*600;
    }else ($_POST["service"]='Cooking'){
        $charges=$_POST["workhours"]*500} ;
    }



         $sql = "INSERT INTO `oders`( `email`, `service`, `workhours`, `gender`, `residence`, `location`, `message`,`charges`)
                           VALUES ('$email','$service','$workhours','$gender','$residence','$location','$message','$charges')";



        $result = mysqli_query($link, $sql);

        if ($result) {
            echo "<p class='alert-success'>YOUR ORDER HAS BEEN PLACED SUCCESSFULLY</p>";
            header("location:order.php");

        } else {
            echo "Error executing query" . mysqli_error($link);
        }






    mysqli_close($link);



