<?php

$link = mysqli_connect("localhost","root","","2shafix");

//echo"Connection successfully completed";//

if ($link == false){
    die("Error connecting to server".mysqli_connect_error($link));
}
