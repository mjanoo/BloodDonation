<?php

//Connection to the database
require_once 'connection.php';

if (isset($_POST["btn_hlogin"])) {
    //receive the data for the user
    $email = $_POST["email"];
    $password= $_POST["password"];
    $password = md5($password);

//prepare the insert query
    $select_query = "SELECT * FROM `hospital` WHERE  h_email='$email' and h_password='$password'";
    
    $result=mysqli_query($conn,$select_query) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        echo "Wrong email or password. Please try again.";        
    }else{   
        $row=mysqli_fetch_array($result);
        $_SESSION["email"] = $email;
       header("location:hospital_home.php");
    } 
}



