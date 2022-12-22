<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CakeZone - Cake Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/f1866aebf7.js" crossorigin="anonymous"></script>
</head>

<style>
    body {
        width: 100%;
        height: auto;
    }

    .navbar1 {
        width: 100%;
        height: auto;
    }

    .navbar2 {
        text-align: center;
    }

    .container{
        width: 100%;
    }

    .frm{
        margin-left: auto;
        margin-right: auto;
    }

    tr {
        border: 2px solid #2B2825;
        width: 20px;
    }

    th {
        width: 5%;
        height: auto;
        color: #FFFFFF;
        background-color: #2B2825;
    }

    td {
        background-color: #FAF3EB;
        border: 2px solid #2B2825;
    }

    i {
        background-color: none;
    }
</style>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <div class="col-lg-2 text-left py-3" style="margin-left: 70px;">
            <div class="d-inline-flex align-items-center justify-content-center">
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary font-primary"><i class="fa fa-birthday-cake fs-1 text-white me-3"></i>CakeZone</h1>
                </a>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="menu.php" class="nav-item nav-link">Menu & Pricing</a>
                <a href="team.php" class="nav-item nav-link">Master Chefs</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="service.php" class="dropdown-item">Our Service</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
        <div class="col-lg-1 text-right py-3 mx-n5">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-cart-shopping text-primary display-6"></i>
                </a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">1</a>
                    <a href="#" class="dropdown-item">2</a>
                    <a href="#" class="dropdown-item">3</a>
                    <a href="#" class="dropdown-item">4</a>
                    <a href="#" class="dropdown-item">5</a>
                </div>
            </div>
        </div>
        <div class="rounded-circle col-lg-1 mx-5" style="width: 45px; height: 45px; ">
            <?php
            $sql = "select image from user where id = 1";
            $result = mysqli_query($conn, $sql);

            while ($res = mysqli_fetch_assoc($result)) {
            ?>
                <img src="img/<?= $res['image'] ?>" style="width:100%; height:100%; border-radius: 50%;">
            <?php
            }
            ?>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Reports</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Reports</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container">
        <form name="myForm" method="post" class="frm mx-sm-5">
            <label class="mx-sm-3">From</label>
            <input type="date" id="startDate" name="startDate" class="py-2 px-5 me-sm-5">
            <label class="mx-sm-3">To</label>
            <input type="date" id="endDate" name="endDate" class="py-2 px-5 me-sm-5">
            <input type="submit" value="submit" name="submit" class="btn btn-primary px-sm-4  px-5 py2 my-5 mx-sm-5">
            <input type="button" value="Generate PDF" name="pdf" class="btn btn-primary px-sm-4  px-5 py2 my-5 mx-sm-5">

        </form>
        <div class="navbar1">
            <table class="navbar2 my-sm-5" cellpadding="20px" cellspacing="20px" font-size="25px" width="100%">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>images</th>
                        <th>price</th>
                        <th>discount</th>
                        <th>createdAt</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if (isset($_POST['submit'])) {
                        $startdate = $_POST['startDate'];
                        $enddate = $_POST['endDate'];
                        $sql = "SELECT * from `product` where createdAt BETWEEN '$startdate 12:00:00' AND '$enddate 12:00:00';";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $Id = $row['id'];
                                $name = $row['name'];
                                $images = $row['images'];
                                $price = $row['price'];
                                $discount = $row['discount'];
                                $categoryId = $row['createdAt'];

                                echo '<tr>
                                    <td>' . $name . '</td>
                                    <td><img src="uploads/'.$images.'" height = "100" width = "100"></td>
                                    <td>' . $price . '</td>
                                    <td>' . $discount . '%</td>
                                    <td>' . $categoryId . '</td>
                                </tr>';
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Cake Zone</a>. All Rights Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">Professional IT's</a>
            </p>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>