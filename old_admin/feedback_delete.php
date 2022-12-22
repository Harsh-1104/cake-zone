<html>
<?php
include 'connection.php';
if (isset($_GET['removeid'])) {
    $id = $_GET['removeid'];
    $sql = "delete from `feedback` where `feedback`.`id`= '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "delete successfully";
        header('location:feedback_display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>