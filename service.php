<?php
include 'connection.php';
$page = 'page';
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="img/titlogo.png" type="image/icon type">
</head>

<body>
    <!-- header -->
    <?php
    include 'header_nav.php';
    ?>


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Services</h1>
                <a href="index.php">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="service.php">Services</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-fluid service position-relative px-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">Birthday Cake</h4>
                        <p>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo amet tempor amet kasd lorem dolor ipsum</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">Wedding Cake</h4>
                        <p>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo amet tempor amet kasd lorem dolor ipsum</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">Custom Cake</h4>
                        <p>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo amet tempor amet kasd lorem dolor ipsum</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 text-center">
                    <h1 class="text-uppercase text-light mb-4">30% Discount For This Summer</h1>
                    <a href="carthover.php" class="btn btn-primary py-3 px-5">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->

    <!-- Footer Start -->
    <?php
    include 'footer.php';
    ?>
    <!-- Footer End -->
</body>

</html>