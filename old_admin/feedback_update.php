<?php
include 'connection.php';
$id = $_GET['updateid'];
if (isset($_POST['update'])) {
    $userid = $_POST['userid'];
    $description = $_POST['desc'];
    $rating = $_POST['rating'];
    $sql = "UPDATE `feedback` SET `userid` = '$userid', `description` = '$description', `rating` = '$rating' WHERE `id` = '$id' ";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:feedback_display.php');
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
                <h1 class="display-4 text-uppercase text-white">Feedback Update</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container mb-5">
        <form method="POST" align="center" style="padding:10px;">
            <?php
            include 'connection.php';
            $upid = $_GET['updateid'];

            $sql = "select * from `feedback` where `feedback`.`id` = '$upid'";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <input type="text" placeholder="Enter User Id" name="userid" id="tname" value="<?php echo $row['userid'] ?>"><br><br>
                <textarea placeholder="Enter Description" name="desc" id="tdesc"><?php echo htmlspecialchars($row['description']); ?></textarea><br><br>
                <input type="number" placeholder="Enter Rating" name="rating" id="tprof" value="<?php echo $row['rating'] ?>"><br><br>
                <input type="date" placeholder="Created At" name="created" id="tprof" value="<?php echo $row['createdAt'] ?>"><br><br>
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