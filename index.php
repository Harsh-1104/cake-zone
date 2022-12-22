<?php
include 'connection.php';
include 'testimonialPhp.php';
session_start();

$page = 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="img/titlogo.png" type="image/icon type">
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

    <link href="css/style2.css" rel="stylesheet">
</head>

<style>
    body {
        width: 100%;
    }

    input {
        display: block;
        padding: 5px;
        width: 100%;
        /* border-radius: 13px; */
        background-color: rgba(255, 255, 255, 0.7);
        color: black;
    }

    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
    }

    .btnSignUp {
        cursor: pointer;
        font-size: 20px;
        padding: 10px;
        font-weight: bolder;
        border-radius: 13px;
        color: #000;
        background: linear-gradient(-45deg, #ffdcb5, #FFF, #ffdcb5);
    }

    .btnSignUp:hover {
        cursor: pointer;
        background: linear-gradient(-45deg, #fff, #ffdcb5, #ffff);
        font-weight: bolder;
        color: #000;
    }

    .cardhov {
        transform: scale(1);
    }

    .cardhov:hover {
        transform: scale(1.04);
        /* border: 3px solid black; */
        box-shadow: 0px 25px 20px -15px #404040;
        z-index: 9000;
        cursor: pointer;
    }
</style>

<body>

    <!-- header -->
    <?php
    include 'header_nav.php';
    ?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="font-secondary text-primary mb-4">Super Crispy</h1>
                    <h1 class="display-1 text-uppercase text-white mb-4">CakeZone</h1>
                    <h1 class="text-uppercase text-white">The Best Cake In London</h1>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="" class="btn btn-primary py-3 px-5 me-5">Read More</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/FPE0BK8jkLI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3">
                <!--style="max-width: 600px;"-->
                <h2 class="text-primary font-secondary">About Us</h2>
                <h1 class="display-4 text-uppercase">Welcome To CakeZone</h1>
            </div>
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <h4 class="mb-4">Tempor erat elitr rebum clita. Diam dolor diam ipsum erat lorem sed stet labore lorem sit clita duo</h4>
                    <p class="mb-5">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et tempor sit. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet magna</p>
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary mb-4 rounded-circle" style="width: 90px; height: 90px;">
                                <i class="fa fa-heartbeat fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">100% Healthy</h4>
                            <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary mb-4 rounded-circle" style="width: 90px; height: 90px;">
                                <i class="fa fa-award fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">Award Winning</h4>
                            <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-img py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary d-flex align-items-center justify-content-center mb-3 rounded-circle" style="width: 60px; height: 60px;">
                            <i class="fa fa-star text-white fs-3"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Our Experience</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">9356</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary d-flex align-items-center justify-content-center mb-3 rounded-circle" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-white fs-3"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Cake Specialist</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">4659</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary d-flex align-items-center justify-content-center mb-3 rounded-circle" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white fs-1"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Complete Project</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">3215</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary d-flex align-items-center justify-content-center mb-3 rounded-circle" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot text-white fs-2"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Happy Clients</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">3099</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


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



    <!-- Service Start -->
    <div class="container-fluid service position-relative px-5 mt-5" style="margin-bottom: 135px;">
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


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Team Members</h2>
                <h1 class="display-4 text-uppercase">Our Master Chefs</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">Charli John</h4>
                            <p class="text-white m-0">Head Cook</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">Tom din</h4>
                            <p class="text-white m-0">Ass. cook</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">dayna jois</h4>
                            <p class="text-white m-0">Ass. cook</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                        <h2 class="text-primary font-secondary">Special Kombo Pack</h2>
                        <h1 class="display-4 text-uppercase text-white">Super Crispy Cakes</h1>
                    </div>
                    <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed
                        et.
                    </p>
                    <a href="carthover.php" class="btn btn-primary py-3 px-5 me-3">Order Now</a>
                    <a href="" class="btn btn-dark border-inner py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Testimonial</h2>
                <h1 class="display-4 text-uppercase">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <?php
                $sql = "SELECT * FROM `testimonial`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id']; // column name in the database
                        $name2 = $row['name'];
                        $profession2 = $row['profession'];
                        $desc2 = $row['description'];
                        $img = $row['image'];
                ?>
                        <div class="testimonial-item bg-dark text-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/<?php echo $img; ?>" style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h4 class="text-primary text-uppercase mb-1" id="c1"><?php echo $name2; ?></h4>
                                    <span><?php echo $profession2 ?></span>
                                </div>
                            </div>
                            <p class="mb-0"><?php echo $desc2; ?></p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php
    include 'footer.php';
    ?>
    <!-- Footer End -->

</body>

</html>