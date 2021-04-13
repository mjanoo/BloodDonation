<?php
//Connection to the database
require_once 'connection.php';

if (isset($_POST["btn_rreg"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pnumber = $_POST["pnumber"];
    $county = $_POST["county"];
    $location = $_POST["location"];
    $password = $_POST["password"];

//encrypt the password
    $password = md5($password);
//Insert query
    $insert_query = "INSERT INTO `hospital`(`h_id`, `h_name`, `h_email`, `h_pnumber`, `h_county`, `h_location`,`h_password`) VALUES (null, '$name','$email','$pnumber','$county','$location','$password')";

    $save = mysqli_query($conn, $insert_query);

    if (isset($save)){
        header("location:login.php");
        echo "saving successful ";
    }else{
        echo "saving failed";
    }
}

