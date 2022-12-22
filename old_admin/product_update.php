<?php
include "connection.php";

if (isset($_POST['update'])) {
    $id = $_POST['updateid'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $desc = $_POST['desc'];
    $catid = $_POST['catid'];
    $feedid = $_POST['feedid'];
    $isShown = $_POST['isShown'];
    $sql = "UPDATE `product` SET `name`= '$name', `images`='$image',`price`='$price',`discount`='$discount', `description`='$desc', `categoryId`='$catid',`feedbackId`='$feedid',`isShown`='$isShown' WHERE `id`='$id' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:product_display.php');
    } else {
        die(mysqli_error($conn));
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
                <h1 class="display-4 text-uppercase text-white">product update</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>

    <!-- Page Header End -->
    <div class="container mb-5">
        <form method="POST" align="center" style="padding:10px;">
            <?php
            $upid = $_GET['updateid'];

            $sql = "select * from `product` where `id` = '$upid'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <input type="text" placeholder="Enter name" name="name" id="tprof" value="<?php echo $row['name'] ?>"><br><br>
                <input type="file" placeholder="Enter Image" name="image" id="tprof" value="<?php echo $row['images'] ?>"><br><br>
                <input type="text" placeholder="Enter Price" name="price" id="tprof" value="<?php echo $row['price'] ?>"><br><br>
                <input type="text" placeholder="Discount" name="discount" id="tprof" value="<?php echo $row['discount'] ?>"><br><br>
                <input type="text" placeholder="Description" name="desc" id="tprof" value="<?php echo $row['description'] ?>"><br><br>
                <input type="text" placeholder="Enter Category Id" name="catid" id="tprof" value="<?php echo $row['categoryId'] ?>"><br><br>
                <input type="text" placeholder="Enter Feedback Id" name="feedid" id="tprof" value="<?php echo $row['feedbackId'] ?>"><br><br>
                <input type="text" placeholder="is Shown (Yes='1' or No='0')" name="isShown" id="tprof" value="<?php echo $row['isShown'] ?>"><br><br>
            <?php
            }
            ?>
            <input type="submit" name="update" id="btnsbmt" value="Update" width="550px"><br>
        </form>
    </div>


    <!-- footer -->
    <?php
    include 'admin_footer.php';
    ?>
</body>

</html>