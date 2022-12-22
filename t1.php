<?php
include 'connection.php';
include 'countVar.php';
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
            padding: 20px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: -10px 7px 20px 5px rgba(10, 10, 10, 0.5);
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
            -webkit-transition: background .3s ease;
            transition: background .3s ease;
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
    <script>
        function show(id) {
            window.location.href = "t2.php?id=" + id;
            // window.open("menu2.php?id=" + id);
        }
    </script>


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
                <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill p-4 mb-5">
                    <li class="nav-item">
                        <a class="nav-link text-white active rounded-pill" data-bs-toggle="pill" href="#tab-1">Birthday</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white rounded-pill" data-bs-toggle="pill" href="#tab-2">Wedding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white rounded-pill" data-bs-toggle="pill" href="#tab-3">Custom</a>
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
                                            <div class="d-flex flex-column justify-content-center text-start bg-secondary px-4">
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
                                    <div class="col-lg-6">
                                        <div class="d-flex h-100">
                                            <div class="flex-shrink-0">
                                                <img class="img-fluid" src="uploads/<?= $images['images'] ?>" alt="" style="width: 150px; height: 85px;">
                                                <h4 class="bg-dark text-primary p-2 m-0">&#x20B9; <?= $images['price'] ?></h4>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center text-start bg-secondary px-4">
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

                                    <div class="col-lg-6">
                                        <div class="d-flex h-100">
                                            <div class="flex-shrink-0">
                                                <img class="img-fluid" src="uploads/<?= $images['images'] ?>" alt="" style="width: 150px; height: 85px;">
                                                <h4 class="bg-dark text-primary p-2 m-0">&#x20B9; <?= $images['price'] ?></h4>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center text-start bg-secondary px-4">
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
    <?php
    include 'footer.php';
    ?>
    <!-- Footer End -->

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