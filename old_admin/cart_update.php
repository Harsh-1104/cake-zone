<?php
include 'connection.php';

if (isset($_POST['update'])) {
    $id = $_GET['updateid'];
    $prodId = $_POST['productId'];
    $userId = $_POST['userId'];
    $quantity = $_POST['quantity'];

    $sql = "update `cart` set `productId`='$prodId', `userId`='$userId', `quantity`='$quantity' where `cart`.`id`='$id'";
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
                <h1 class="display-4 text-uppercase text-white">cart update</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <form method="POST" align="center" style="padding:10px;">
            <?php
            include 'connection.php';
            $upid = $_GET['updateid'];

            $sql = "select * from `cart` where `cart`.`id` = '$upid'";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <input type="text" placeholder="Enter Id" name="id" id="tname" value="<?php echo $row['id'] ?>"><br><br>
                <input type="text" placeholder="Enter Product Id" name="productId" id="tprof" value="<?php echo $row['productId'] ?>"><br><br>
                <input type="text" placeholder="Enter User Id" name="userId" id="tprof" value="<?php echo $row['userId'] ?>"><br><br>
                <input type="number" placeholder="Enter Quantity" name="quantity" id="tprof" value="<?php echo $row['quantity'] ?>"><br><br>
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