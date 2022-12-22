<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $type = $_POST['type'];

    $sql = "update `category` set `id` = '$id', `type`= '$type' WHERE `id`= '$id' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Data updates successfully";
        header('location:category_display.php');
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
<style>
    body {
        width: 100%;
        height: auto;
    }

    .navbar1 {
        margin: auto;
        width: 35%;
        height: auto;
        border: 2px solid black;
        padding: 10px;
        background-color: #FAF3EB;
    }
</style>


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
                <h1 class="display-4 text-uppercase text-white">Category Update</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>

    <div class="navbar1 my-md-5">
        <form method="POST">
            <?php

            $upid = $_GET['updateid'];
            $sql = "select * from `category` where `id` = '$upid'";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example1">Id</label>
                            <input type="text" id="id" name="id" class="form-control" value="<?php echo $row['id']; ?>" />
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example3">Type</label>
                            <input type="text" id="type" name="type" class="form-control" value="<?php echo $row['type']; ?>" />
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
            <input type="submit" name="submit" id="submit" value="Update" class="btn btn-primary mb-1">
        </form>
    </div>

    <?php
    include 'admin_footer.php';
    ?>

</body>

</html>