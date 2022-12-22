<?php
include 'connection.php';

$id = "";
$products = "";
$categoryId = "";
$userId = "";
$createdAt = "";
$isPaid = "";


if (isset($_POST['insert'])) {
    $id = uniqid('o');
    $products = $_POST['products'];
    $categoryId = $_POST['categoryId'];
    $userId = $_POST['userId'];
    $createdAt = $_POST['createdAt'];
    $isPaid = $_POST['isPaid'];

    $sql = "insert into `ordertb` (`id`, `products`, `categoryId`, `userId`, `createdAt`, `isPaid`) values('$id', '$products', '$categoryId', '$userId', '$createdAt', '$isPaid')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    } else {
        header('location:order_display.php');
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
                <h1 class="display-4 text-uppercase text-white">Order Insert</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container mb-5">
        <form method="POST" align="center" style="padding:10px;">
            <input type="text" placeholder="Enter Product Id" name="products" id="tprof"><br><br>
            <input type="text" placeholder="Enter Category Id" name="categoryId" id="tprof"><br><br>
            <input type="text" placeholder="Enter User Id" name="userId" id="tprof"><br><br>
            <input type="date" placeholder="Created At" name="createdAt" id="tprof"><br><br>
            <input type="number" placeholder="Is Paid? (Yes='1' or No='0')" name="isPaid" id="tprof"><br><br>
            <input type="submit" value="Insert" name="insert" id="btnsbmt"><br><br>
        </form>
    </div>
    <?php
    include 'admin_footer.php';
    ?>
</body>

</html>