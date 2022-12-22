<?php
include 'connection.php';

if (isset($_POST['update'])) {
    $id = $_GET['updateid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $image = $_POST['image'];
    $isAdmin = $_POST['isAdmin'];
    $createdAt = $_POST['createdAt'];

    $sql = "update `user` set `name`='$name', `email`='$email', `password`='$password', `phone`='$phone', `image`='$image', `isAdmin`='$isAdmin', `createdAt`='$createdAt' where `user`.`id`='$id'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die(mysqli_error($conn));
    } else {
        header('location:user_display.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="../img/titlogo.png" type="image/icon type">
</head>

<body>
    <!-- header -->
    <?php
    include 'admin_header_nav.php';
    ?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>

        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">User Update</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>

    </div>
    <!-- Page Header End -->

    <div class="container">
        <form method="POST" align="center" style="padding:10px;">
            <?php

            $upid = $_GET['updateid'];

            $sql = "select * from `user` where `user`.`id` = '$upid'";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <input type="text" placeholder="Enter User Name" name="name" id="tprof" value="<?php echo $row['name'] ?>"><br><br>
                <input type="email" placeholder="Enter Email" name="email" id="tprof" value="<?php echo $row['email'] ?>"><br><br>
                <input type="password" placeholder="Enter Password" name="password" id="tprof" value="<?php echo $row['password'] ?>"><br><br>
                <input type="text" placeholder="Enter Phone No." name="phone" id="tprof" value="<?php echo $row['phone'] ?>"><br><br>
                <input type="file" placeholder="Enter Image" name="image" id="tprof" value="<?php echo $row['image'] ?>"><br><br>
                <input type="text" placeholder="Is Admin? (Yes='1' or No='0')" name="isAdmin" id="tprof" value="<?php echo $row['isAdmin'] ?>"><br><br>
                <input type="date" placeholder="Created At" name="createdAt" id="tprof" value="<?php echo $row['createdAt'] ?>"><br><br>
            <?php
            } ?>
            <input type="submit" value="Update" name="update" id="btnsbmt"><br><br>
        </form>
    </div>

    <?php
    include 'admin_footer.php';
    ?>

</body>

</html>