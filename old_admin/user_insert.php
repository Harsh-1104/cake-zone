<?php
include 'connection.php';

$id = "";
$name = "";
$email = "";
$password = "";
$phone = "";
$image = "";
$isAdmin = "";
$createdAt = "";

if (isset($_POST['insert'])) {
    $id = uniqid('user');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $image = $_POST['image'];
    $isAdmin = $_POST['isAdmin'];
    $createdAt = $_POST['createdAt'];

    $sql = "insert into `user` (`id`, `name`, `email`, `password`, `phone`, `image`, `isAdmin`, `createdAt`) values('$id', '$name', '$email', '$password', '$phone', '$imgnewfile', '$isAdmin', '$createdAt')";

    $result = mysqli_query($con, $sql);

    if (!$result) {
        die(mysqli_error($con));
    } else {
        header('location:display.php');
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
                <h1 class="display-4 text-uppercase text-white">User Insert</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <form method="POST" align="center" style="padding:10px;">
            <input type="text" placeholder="Enter User Name" name="name" id="tprof"><br><br>
            <input type="email" placeholder="Enter Email" name="email" id="tprof"><br><br>
            <input type="password" placeholder="Enter Password" name="password" id="tprof"><br><br>
            <input type="text" placeholder="Enter Phone No." name="phone" id="tprof"><br><br>
            <input type="file" placeholder="Enter Image" name="image" id="tprof"><br><br>
            <input type="text" placeholder="Is Admin? (Yes='1' or No='0')" name="isAdmin" id="tprof"><br><br>
            <input type="date" placeholder="Created At" name="createdAt" id="tprof"><br><br>
            <input type="submit" value="Insert" name="insert" id="btnsbmt"><br><br>
        </form>
    </div>

    <!-- footer -->
    <?php
    include 'admin_footer.php';
    ?>

</body>

</html>