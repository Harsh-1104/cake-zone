<?php
include 'connection.php';

$id;
$userid;
$desc;
$rating;
$created;

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {

    $id = uniqid();
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 1250000000) {
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "INSERT INTO `user`(`id`, `name`, `email`, `password`,`phone`,`image`) VALUES ('$id', '$uname', '$email', '$password', '$phone','$img_name')";
                $result = mysqli_query($conn, $sql);

                header("Location: index.php");
            } else {
            }
        }
    } else {
    }
} else {
    // header("Location: ProductinsertPhp.php");
}
