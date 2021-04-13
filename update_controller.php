<?php
require_once 'connection.php';

if (isset($_POST["btn_update"])) {
    $updated_county= $_POST["county"];
    $updated_location = $_POST["location"];
    $updated_pnumber = $_POST["pnumber"];
    $id = $_POST["id"];

    $update_query = "UPDATE `users` SET `county`='$updated_county',`pnumber`='$updated_pnumber',`county`='$updated_county',`location`='$updated_location' WHERE `id`='$id'";
    $update = mysqli_query($conn, $update_query);

    if (isset($update)) {
        //redirect back to products.php
        header("location:profile.php");
    } else {
        die("update failed");
    }
}