<?php
include('connection.php');
if (isset($_POST['update'])) {
    $id = $_GET['updateid'];
    $name = $_POST['tname'];
    $prof = $_POST['prof'];
    $desc = $_POST['desc'];

    $sql = "update `testimonial` set `name`='$name', `profession`='$prof', `description`='$desc' where `testimonial`.`id`='$id'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die(mysqli_error($conn));
    } else {
        header('location:testimonial_insert_delete_display.php');
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
                <h1 class="display-4 text-uppercase text-white">Testimonial update</h1>
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

            $sql = "select * from `testimonial` where `testimonial`.`id` = '$upid'";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <input type="text" placeholder="Enter Name" name="tname" id="tname" value="<?php echo $row['name'] ?>"><br><br>
                <input type="text" placeholder="Enter Profession" name="prof" id="tprof" value="<?php echo $row['profession'] ?>"><br><br>
                <textarea placeholder="Enter Description" name="desc" id="tdesc"><?php echo htmlspecialchars($row['description']); ?></textarea><br><br>
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