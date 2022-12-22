<?php
include 'connection.php';
// require_once 'config.php';


?>

<html>

<head>
    <title>Popup</title>

</head>

<style>
    #popUp {
        position: fixed;
        z-index: 100;
        margin: auto;
        left: 50%;
        top: 40%;
        transform: translate(-50%, -50%);
        overflow: auto;
        text-align: center;
        /* backdrop-filter: blur(10px); */
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0px 25px 20px -15px #202020;
    }

    /******globals****/

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

    .icon-input-btn {
        display: inline-block;
        position: relative;
    }

    .icon-input-btn input[type="submit"] {
        padding-left: 2em;
    }

    .icon-input-btn .fa {
        display: inline-block;
        position: absolute;
        left: 10px;
        top: 40%;
    }
</style>


<body onload="show()">

    <?php
    $index = 1;

    $hello = $_GET['id'];

    $sql = "select * from `product` where id='$hello'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    ?>

    <div class="container border border-3 border-dark w-50 h-50 mt-5 bg-primary pb-5" id="popUp" style=" visibility: hidden;">
        <div class="row w-100 d-block m-auto mt-1">
            <p class="col text-end">
                <i class="fa-solid fa-xmark fs-3 text-dark" onclick="getID()"></i>
            </p>
        </div>
        <div class="row w-100 h-75 d-flex m-auto ">
            <div class="col">
                <img src="uploads/<?= $res['images'] ?>" class="h-100 w-100 border border-2 border-dark">
            </div>
            <div class="col border border-2 border-dark" style="background-color: rgba(255,255,255,0.8); ">
                <h3 class="text-center"><?= $nm = $res['name'];
                                        $res['name'] ?></h3>
                <p class="text-justify text-dark"><?= $res['description'] ?></p>
                <h3 class="text-center">Price : <?= $res['price'] ?> &#8377</h3>

                <div class="action">
                    <form action="menu.php?action=add&pid=<?php echo $res["id"]; ?>" method="POST">
                        <input type="hidden" name="Item_Name" value="<?= $res['name'] ?>">
                        <input type="hidden" name="Price" value="<?= $res['price'] ?>">
                        <input type="hidden" name="productid" value="<?= $res['id'] ?>">
                        <div class="cart-action text-center mt-3">
                            <input class="rounded-start px-3 fs-3 bg-primary" type="button" onclick="removeItem(<?php echo $index ?>)" value="-">
                            <input class="w-25 py-2 text-center" type="text" value="1" class="product-quantity" name="quantity" id=<?php echo $index ?> />
                            <input class="rounded-end px-3 fs-3 bg-primary" type="button" onclick="addItem(<?php echo $index ?>)" value="+"><br>
                            <span class="icon-input-btn mt-1">
                                <i class="fa fa-solid fa-cart-plus fs-5 text-dark"></i>
                                <input type="submit" value='Add to cart' class="ms-1 add-to-cart btn btn-primary mt-2 border border-dark" name="addtocart" />
                            </span>
                        </div><?php $index++ ?>
                    </form>
                    <script>
                        function defaultValue() {
                            document.getElementById("quantity").value = 1;
                        }

                        function addItem(id) {
                            document.getElementById(id).value = parseInt(document.getElementById(id).value) + 1;
                        }

                        function removeItem(id) {
                            if (document.getElementById(id).value > 1) {
                                document.getElementById(id).value = parseInt(document.getElementById(id).value) - 1;
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div style="filter: blur(5px);">
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

        <!-- <ducts Start -->
        <div class="container-fluid about py-5">
            <div class="container">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                    <h2 class="text-primary font-secondary">Menu & Pricing</h2>
                    <h1 class="display-4 text-uppercase">Explore Our Cakes</h1>
                </div>

                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase p-4 mb-5 rounded-pill">
                        <li class="nav-item">
                            <a class="rounded-pill nav-link text-white active" data-bs-toggle="pill" href="#tab-1">Birthday</a>
                        </li>
                        <li class="nav-item">
                            <a class="rounded-pill nav-link text-white" data-bs-toggle="pill" href="#tab-2">Wedding</a>
                        </li>
                        <li class="nav-item">
                            <a class="rounded-pill nav-link text-white" data-bs-toggle="pill" href="#tab-3">Custom</a>
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

        <!-- footer -->
        <?php
        include 'footer.php';
        ?>
    </div>
    <script>
        var x;

        function show() {
            window.onload = function() {
                if (!window.location.hash) {
                    window.location = window.location + '#loaded';
                    window.location.reload();
                }
            }
            document.getElementById('popUp').style.visibility = 'visible';
        }

        function showPop() {
            // alert("hello");
            document.getElementById('popUp').style.visibility = 'hidden';
        }

        function getID() {
            // alert("Close");
            document.getElementById('popUp').style.visibility = 'hidden';
            window.history.go(-1);
        }
    </script>

</body>

</html>