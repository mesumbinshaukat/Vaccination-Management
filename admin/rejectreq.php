<?php
include('../connection.php');

$get_id = $_GET['id'];

if (true) {
    $update_query_run = mysqli_query($conn ,"UPDATE `book_appointment` SET `request`= 0 WHERE id = '$get_id'");

    
    header('location:vacrequest.php');

}




