<?php
include('connection.php');

$get_id = $_GET['id'];

if (true) {
    $update_query_run = mysqli_query($conn ,"UPDATE `book_appointment` SET `vaccinated`= 1 WHERE id = '$get_id'");

    echo "<script> alert('Booking accept')</script>";

    header('location:vacrequest.php');

}




