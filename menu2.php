<?php
include 'connection.php';
session_start();
// $nm = 'ght';
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <style>
        #popUp {
            position: fixed;
            z-index: 100;
            margin: auto;
            left: 5%;
            top: 100px;
            overflow: auto;
            background-color: rgb(232, 143, 42, 0.8);
            text-align: center;
            padding: 10px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            /* box-shadow: -10px 7px 20px 5px rgba(10, 10, 10, 0.5); */
        }


        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
            z-index: 100;
        }




        /*****************globals*************/

        body {
            font-family: 'open sans';
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
        }

        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px;
            }
        }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px;
        }

        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%;
        }

        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block;
        }

        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0;
        }

        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0;
        }

        .tab-content {
            overflow: hidden;
        }

        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
        }

        .card {
            margin-top: 50px;
            background: #eee;
            padding: 3em;
            line-height: 1.5em;
        }

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .product-title,
        .price,
        .sizes,
        .colors {
            text-transform: UPPERCASE;
            font-weight: bold;
        }

        .checked,
        .price span {
            color: #ff9f1a;
        }

        .product-title,
        .rating,
        .product-description,
        .price,
        .vote,
        .sizes {
            margin-bottom: 15px;
        }

        .product-title {
            margin-top: 0;
        }

        .size {
            margin-right: 10px;
        }

        .size:first-of-type {
            margin-left: 40px;
        }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px;
        }

        .color:first-of-type {
            margin-left: 20px;
        }

        .add-to-cart,
        .like {
            background: #ff9f1a;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            /* -webkit-transition: background .3s ease;
            transition: background .3s ease; */
        }

        .add-to-cart:hover,
        .like:hover {
            background: #b36800;
            color: #fff;
        }

        .not-available {
            text-align: center;
            line-height: 2em;
        }

        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff;
        }

        .orange {
            background: #ff9f1a;
        }

        .green {
            background: #85ad00;
        }

        .blue {
            background: #0076ad;
        }

        .tooltip-inner {
            padding: 1.3em;
        }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }

            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
    </style>



</head>
<script>
    var x;

    function show() {
        document.getElementById('popUp').style.visibility = 'visible';

    }

    function showPop() {
        // alert("hello");
        document.getElementById('popUp').style.visibility = 'hidden';
    }

    function getID() {
        document.getElementById('popUp').style.visibility = 'hidden';
        // location(menu.php);
        // window.location.href="menu.php";
        // history.go(-1);
        window.history.go(-1);
        // document.cookie="x="+"";
    }
</script>

<body onload="show()">

    <?php
    print_r($_SESSION['cart'])
    ?>
    <div class="container" id="popUp" style="visibility:hidden">
        <span onclick="getID()" class="close" title="Close">&times;</span>
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">

                    <?php

                    $hello = $_GET['id'];

                    $sql = "select * from `product` where id='$hello'";
                    $result = mysqli_query($conn, $sql);
                    $res = mysqli_fetch_assoc($result);
                    ?>
                    <div class="preview col-md-6">

                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="uploads/<?= $res['images'] ?>" style="width: 550px; height: 285px;" /></div>
                        </div>

                        <script>
                            function insert() {
                                <?php
                                // $server = "localhost";
                                // $host = "127.0.0.1";
                                // $username = "root";
                                // $password = "";
                                // $DBname = "ecommerce";

                                // $conn = new mysqli($host, $username, $password, $DBname);

                                if (!$conn) {
                                    echo 'Connection Not Established...';
                                }
                                $nm = $res['name'];
                                $sql = "select id from product where name='$nm'";
                                $result = mysqli_query($conn, $sql);


                                $id = 0;
                                $productId = $result;
                                $userId = $_COOKIE['email'];
                                $quantity = 1;

                                $sql = "insert into `cart` (`id`, `productId`, `userId`, `quantity`) values('$id', '$productId', '$userId', '$quantity')";

                                $result = mysqli_query($conn, $sql);

                                if (!$result) {
                                    die(mysqli_error($conn));
                                } else {
                                    header('location:menu.php');
                                }
                                ?>
                            }
                        </script>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title"><?= $nm = $res['name'];
                                                    $res['name'] ?></h3>


                        <p class="product-description"><?= $res['description'] ?></p>

                        <h4 class="price">current price: <span><?= $res['price'] ?></span></h4>

                        <div class="action">
                            <form action="manage_cart.php" method="POST">
                                <button class="add-to-cart btn btn-default" name="Add_To_Cart" type="submit" onclick="insert()">add to cart</button>
                                <input type="hidden" name="Item_Name" value="<?= $res['name'] ?>">
                                <input type="hidden" name="Price" value="<?= $res['price'] ?>">
                                <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                            </form>

                            <!-- <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="menu.php" class="nav-item nav-link active">Menu & Pricing</a>
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
        <?php
        include 'countVar.php';
        ?>
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
                <h1 class="display-4 text-uppercase text-white">Menu & Pricing</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Menu & Pricing</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Products Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Menu & Pricing</h2>
                <h1 class="display-4 text-uppercase">Explore Our Cakes</h1>
            </div>

            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase border-inner p-4 mb-5">
                    <li class="nav-item">
                        <a class="nav-link text-white active" data-bs-toggle="pill" href="#tab-1">Birthday</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-2">Wedding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-3">Custom</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-3">
                            <?php
                            $sql = "SELECT * FROM  `product` where categoryId='c101' ORDER BY id";
                            $res = mysqli_query($conn,  $sql);

                            if (mysqli_num_rows($res) > 0) {
                                while ($images = mysqli_fetch_assoc($res)) {  ?>

                                    <div class="col-lg-6" onclick="show(this.id)" id=<?= $images['id'] ?>>
                                        <div class="d-flex h-100">
                                            <div class="flex-shrink-0">
                                                <img class="img-fluid" src="uploads/<?= $images['images'] ?>" alt="" style="width: 150px; height: 85px;">
                                                <h4 class="bg-dark text-primary p-2 m-0">&#x20B9; <?= $images['price'] ?></h4>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                                <h5 class="text-uppercase"><?= $images['name'] ?></h5>
                                                <span><?= $images['description'] ?></span>
                                            </div>
                                        </div>
                                    </div>

                            <?php }
                            } ?>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-3">
                            <?php
                            $sql = "SELECT * FROM  `product` where categoryId='c102' ORDER BY id";
                            $res = mysqli_query($conn,  $sql);

                            if (mysqli_num_rows($res) > 0) {
                                while ($images = mysqli_fetch_assoc($res)) {  ?>
                                    <div class="col-lg-6" onclick="show(this.id)" id=<?= $images['id'] ?>>
                                        <div class="d-flex h-100">
                                            <div class="flex-shrink-0">
                                                <img class="img-fluid" src="uploads/<?= $images['images'] ?>" alt="" style="width: 150px; height: 85px;">
                                                <h4 class="bg-dark text-primary p-2 m-0">&#x20B9; <?= $images['price'] ?></h4>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                                <h5 class="text-uppercase"><?= $images['name'] ?></h5>
                                                <span><?= $images['description'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-3">
                            <?php
                            $sql = "SELECT * FROM  `product` where categoryId='c103' ORDER BY id";
                            $res = mysqli_query($conn,  $sql);

                            if (mysqli_num_rows($res) > 0) {
                                while ($images = mysqli_fetch_assoc($res)) {  ?>

                                    <div class="col-lg-6" onclick="show(this.id)" id=<?= $images['id'] ?>>
                                        <div class="d-flex h-100">
                                            <div class="flex-shrink-0">
                                                <img class="img-fluid" src="uploads/<?= $images['images'] ?>" alt="" style="width: 150px; height: 85px;">
                                                <h4 class="bg-dark text-primary p-2 m-0">&#x20B9; <?= $images['price'] ?></h4>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                                <h5 class="text-uppercase"><?= $images['name'] ?></h5>
                                                <span><?= $images['description'] ?></span>
                                            </div>
                                        </div>
                                    </div>

                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->



    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                        <h2 class="text-primary font-secondary">Special Kombo Pack</h2>
                        <h1 class="display-4 text-uppercase text-white">Super Crispy Cakes</h1>
                    </div>
                    <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                    <a href="carthover.php" class="btn btn-primary py-3 px-5 me-3">Order Now</a>
                    <a href="" class="btn btn-dark border-inner py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-img text-secondary" style="margin-top: 135px">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary border-inner p-4">
                        <a href="index.php" class="navbar-brand">
                            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i>CakeZone</h1>
                        </a>
                        <p class="mt-3">Lorem diam sit erat dolor elitr et, diam lorem justo labore amet clita labore stet eos magna sit. Elitr dolor eirmod duo tempor lorem, elitr clita ipsum sea. Nonumy rebum et takimata ea takimata amet gubergren, erat rebum magna lorem stet eos. Diam amet et kasd eos duo dolore no.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Newsletter</h4>
                            <p>Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Cake Zone</a>. All Rights Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- whatsapp -->
    <a href="https://wa.me/919824527094?text=Hello" data-action="share/whatsapp/share" target="_blank" class="floating">
        <i class="bi bi-whatsapp float-button" style="font-size: 40px;"></i>
    </a>

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
    <!-- <script>
            function show(id) {
                alert(id);
                var x=id;
                document.getElementById('popUp').style.visibility = 'visible';
            }
            function showPop() {
                // alert("hello");
                document.getElementById('popUp').style.visibility = 'hidden';
            }
        </script> -->

</body>

</html>