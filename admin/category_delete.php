<?php
include 'connection.php';

if (isset($_GET['removeid'])) {
    $id = $_GET['removeid'];
    $sql = "delete from `category` where id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "delete successfully";
        header('location:category_display.php');
    } else {
        die(mysqli_error($conn));
    }
}
