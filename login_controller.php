<?php

//Connection to the database
require_once 'connection.php';

if (isset($_POST["btn_login"])) {
    //receive the data for the user
    $email = $_POST["email"];
    $password= $_POST["password"];
    $password = md5($password);

//prepare the insert query
    $select_query = "SELECT * FROM `users` WHERE  email='$email' and password='$password'";
    $users = mysqli_query($conn, $select_query);
    $num_of_users = mysqli_num_rows($users);

    if($num_of_users>0){
        session_start();
        $_SESSION["email"] = $email;

        header("location:home.php");
    } else{
echo "error";
    }
}



