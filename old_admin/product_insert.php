<?php

include 'connection.php';

if (isset($_POST['insert'])) {
    $id = uniqid('prod');
    $name = $_POST['name'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $desc = $_POST['desc'];
    $catid = $_POST['catid'];
    $feedid = $_POST['feedid'];
    $isShown = $_POST['isShown'];
    // $created=$_POST['created'];
    $sql = "INSERT INTO `product` (`id`, `name`, `images`, `price`, `discount`, `description`, `categoryId`, `feedbackId`, `isShown`) VALUES 
        ('$id', '$name', '$image', '$price', '$discount', '$desc', '$catid', '$feedid', '$isShown');";
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
                <h1 class="display-4 text-uppercase text-white">product insert</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <form method="POST" align="center" style="padding:10px;">
            <!-- <select name="prodname" id="tprof">
                <option value="--- Select Product Name ---"> --- Select Product Name --- </option>
                <option value="Birthday Cake1"> Birthday Cake1 </option>
                <option value="--- Select Product Name ---"> --- Select Product Name --- </option>
                <option value="--- Select Product Name ---"> --- Select Product Name --- </option>
            </select> -->
            <input type="text" placeholder="Enter name" name="name" id="tprof"><br><br>
            <input type="file" placeholder="Enter Image" name="image" id="tprof"><br><br>
            <input type="text" placeholder="Enter Price" name="price" id="tprof"><br><br>
            <input type="text" placeholder="Discount" name="discount" id="tprof"><br><br>
            <input type="text" placeholder="Description" name="desc" id="tprof"><br><br>
            <input type="text" placeholder="Enter Category Id" name="catid" id="tprof"><br><br>
            <input type="text" placeholder="Enter Feedback Id" name="feedid" id="tprof"><br><br>
            <input type="text" placeholder="is Shown (Yes='1' or No='0')" name="isShown" id="tprof"><br><br>
            <input type="submit" value="Insert" name="insert" id="btnsbmt"><br><br>
        </form>
    </div>

    <?php
    include 'admin_footer.php';
    ?>

</body>

</html>