<?php
// Hostname , username , password , database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "blooddonor";

//connection to the database
$conn = mysqli_connect($hostname, $username,$password,  $database);

//Check if connect is established /failed
if (!isset($conn)){
    die("connection failed");
}
