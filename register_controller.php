<?php
//Connection to the database
require_once 'connection.php';

if (isset($_POST["btn_reg"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pnumber = $_POST["pnumber"];
    $county = $_POST["county"];
    $location = $_POST["location"];
    $bloodgroup = $_POST["bloodgroup"];
    $password = $_POST["password"];

//encrypt the password
    $password = md5($password);
//Insert query
    $insert_query = "INSERT INTO `users`(`id`, `name`, `email`, `pnumber`, `county`, `location`, `bloodgroup`, `password`) VALUES (null, '$name','$email','$pnumber','$county','$location','$bloodgroup','$password')";

    $save = mysqli_query($conn, $insert_query);

    if (isset($save)){
        header("location:login.php");
        echo "saving successful ";
    }else{
        echo "saving failed";
    }
}

