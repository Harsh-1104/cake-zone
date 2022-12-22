<?php
include 'connection.php';
include 'cartPhp.php';
$page = 'menu';

if (isset($_POST['addtocart'])) {
    $id = uniqid();
    $productId = $_POST['productid'];
    $userId = $_COOKIE['email'];
    $quantity = $_POST['quantity'];

    $sql = "insert into `cart` (`id`, `productId`, `userId`, `quantity`) values('$id', '$productId', '$userId', '$quantity')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    } else {
        header('location:menu.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link href="css/style2.css" rel="stylesheet">
    <script>
        function show(id) {
            <?php
            if ($_COOKIE["email"]) { ?>
                // alert("nice to meet you");
                window.location.href = "popup_final.php?id=" + id;
            <?php
            } else { ?>
                alert("Login Required.");
                window.open('login.php', '_self');
            <?php
            }
            ?>
            // window.open("menu2.php?id=" + id);
        }
    </script>


</head>

<style>
    .cardhov {
        transform: scale(1);
    }

    .cardhov:hover {
        transform: scale(1.04);
        /* border: 3px solid black; */
        box-shadow: 0px 20px 20px -15px #404040;
        z-index: 900;
        cursor: pointer;
    }
</style>

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
                <a href="index.php">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="#">Menu & Pricing</a>
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
                <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase  p-4 mb-5 rounded-pill">
                    <li class="nav-item">
                        <a class="nav-link rounded-pill text-white active" data-bs-toggle="pill" href="#tab-1">Birthday</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-2">Wedding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-3">Custom</a>
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
                                        <div class="d-flex h-100 cardhov">
                                            <div class="flex-shrink-0">
                                                <img class="img-fluid" src="uploads/<?= $images['images'] ?>" alt="" style="width: 150px; height: 85px;">
                                                <h4 class="bg-dark text-primary p-2 m-0">&#x20B9; <?= $images['price'] ?></h4>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center text-start bg-secondary px-4">
                                                <h5 class="text-uppercase"><?= $images['name'] ?></h5>
                                                <span><?= $images['description'] ?></span>
                                                <p class="text-end text-primary ">
                                                    Click here
                                                </p>
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
                                        <div class="d-flex h-100 cardhov">
                                            <div class="flex-shrink-0">
                                                <img class="img-fluid" src="uploads/<?= $images['images'] ?>" alt="" style="width: 150px; height: 85px;">
                                                <h4 class="bg-dark text-primary p-2 m-0">&#x20B9; <?= $images['price'] ?></h4>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center text-start bg-secondary px-4">
                                                <h5 class="text-uppercase"><?= $images['name'] ?></h5>
                                                <span><?= $images['description'] ?></span>
                                                <p class="text-end text-primary ">
                                                    Click here
                                                </p>
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
                                        <div class="d-flex h-100 cardhov">
                                            <div class="flex-shrink-0">
                                                <img class="img-fluid" src="uploads/<?= $images['images'] ?>" alt="" style="width: 150px; height: 85px;">
                                                <h4 class="bg-dark text-primary p-2 m-0">&#x20B9; <?= $images['price'] ?></h4>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center text-start bg-secondary px-4">
                                                <h5 class="text-uppercase"><?= $images['name'] ?></h5>
                                                <span><?= $images['description'] ?></span>
                                                <p class="text-end text-primary ">
                                                    Click here
                                                </p>
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
</body>

</html>