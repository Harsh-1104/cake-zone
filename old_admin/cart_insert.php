<?php
include 'connection.php';

$id = "";
$prodId = "";
$userId = "";

if (isset($_POST['insert'])) {
    $id = uniqid('c');
    $prodId = $_POST['productId'];
    $userId = $_POST['userId'];
    $quantity = $_POST['quantity'];

    $sql = "insert into `cart` (`id`, `productId`, `userId`, `quantity`) values('$id', '$prodId', '$userId', '$quantity')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    } else {
        header('location:cart_display.php');
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
                <h1 class="display-4 text-uppercase text-white">cart insert</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container mb-5">
        <form method="POST" align="center" style="padding:10px;">
            <input type="text" placeholder="Enter Product Id" name="productId" id="tprof"><br><br>
            <input type="text" placeholder="Enter User Id" name="userId" id="tprof"><br><br>
            <input type="number" placeholder="Enter Quantity" name="quantity" id="tprof"><br><br>
            <input type="submit" value="Insert" name="insert" id="btnsbmt"><br><br>
        </form>
    </div>

    <?php
    include 'admin_footer.php';
    ?>

</body>

</html>