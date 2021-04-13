<?php
if (isset($_GET["my_id"])){
    require_once 'connection.php';
    $received_id =  $_GET["my_id"];


    //prepare the delete query
    $delete_query = "DELETE FROM `users` WHERE id='$received_id'";
    $delete = mysqli_query($conn, $delete_query);

    if (isset($delete)){
        //redirect back to products.php
        header("location:logout.php");
    }else{
        die("deletion failed");
    }
}