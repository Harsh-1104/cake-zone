<?php
include 'connection.php';
if (isset($_GET['removeid'])) {
    $id = $_GET['removeid'];

    $sql = "delete from `cart` where `cart`.`id` = '$id'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    } else {
        header('location:cart_display.php');
    }
}
