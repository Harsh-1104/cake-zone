<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $type = $_POST['type'];

    $sanitized_id = mysqli_real_escape_string($conn, $id);

    $sanitized_type = mysqli_real_escape_string($conn, $type);

    $sql = "INSERT INTO `category` (`id`, `type`) VALUES ('$sanitized_id', '$sanitized_type');";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "Data inserted successfully";
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
        width: 10%;
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
                <h1 class="display-4 text-uppercase text-white">Category Insert</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container mb-5">

        <form method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1">Id</label>
                        <input type="text" id="id" name="id" class="form-control" disable="true" />
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example4">Type</label>
                        <input type="text" id="type" name="type" class="form-control" />
                    </div>
                </div>
            </div>

            <input type="submit" name="submit" id="submit" class="btn btn-primary mb-1">
        </form>
    </div>

    <?php
    include 'admin_footer.php';
    ?>

</body>

</html>