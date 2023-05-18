<?php
include('connection.php');

$get_id = $_GET['id'];

if (true) {
    $update_query_run = mysqli_query($conn ,"UPDATE `book_appointment` SET `vaccinated`= 1 WHERE b_id = '$get_id'");

    echo "<script> alert('Child is Vaccinated')</script>";

    header('location:updatechild.php');

}




