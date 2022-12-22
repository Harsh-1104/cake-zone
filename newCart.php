<?php
require_once("config.php");
include 'cartPhp.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/styleCart.css" type="text/css" rel="stylesheet" />
</head>
<style>
    .button {
        background: #3D4C53;
        margin: auto;
        /* width: 200px; */
        height: 50px;
        overflow: hidden;
        text-align: center;
        transition: .2s;
        cursor: pointer;
        border-radius: 3px;
        box-shadow: 0px 1px 2px rgba(0, 0, 0, .2);
    }

    .btnTwo {
        position: relative;
        /* width: 200px; */
        height: 120px;
        margin-top: -100px;
        padding-top: 2px;
        background: #26A69A;
        left: -250px;
        transition: .3s;
    }

    .btnText {
        color: white;
        transition: .3s;
    }

    .btnText2 {
        margin-top: 63px;
        margin-right: -130px;
        color: #FFF;
    }

    .button:hover .btnTwo {
        /*When hovering over .button change .btnTwo*/
        left: -130px;
    }

    .button:hover .btnText {
        /*When hovering over .button change .btnText*/
        margin-left: 65px;
    }

    .button:active {
        /*Clicked and held*/
        box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.3);
    }
</style>

<body onload="hide()">
    <script>
        function hide() {
            var container = document.getElementsByClassName('container-fluid');
            for (var i = 0; i < container.length; i++) {
                i.visibility = 'hidden';
            }
            var nav = document.getElementsByClassName('navbar');
            for (var i = 0; i < nav.length; i++) {
                i.visibility = 'hidden';
            }
            var modal = document.getElementsByClassName('modal');
            for (var i = 0; i < modal.length; i++) {
                i.visibility = 'hidden';
            }
        }
    </script>

    <?php
    include 'header_nav.php';
    ?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">My Cart</h1>
                <a href="index.php">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="#">my cart</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Cart ---->
    <div id="shopping-cart">
        <!-- <div class="text-center txt-heading fs-1 text-primary font-secondary overflow-hidden pb-2 mb-5">
            Cart List
        </div> -->

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class="btn-outline-success px-3 py-2 border border-success rounded-3" href="menu.php">
                        Add Item
                    </a>
                </div>
                <div class="col text-end">
                    <?php
                    if (isset($_SESSION["cart_item"])) {
                        $total_quantity = 0;
                        $total_price = 0;
                    ?>
                        <a class="btn-outline-danger px-3 py-2 border border-danger rounded-3" href="newCart.php?action=empty">
                            Empty Cart
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>



        <?php
        if (isset($_SESSION["cart_item"])) {
            $total_quantity = 0;
            $total_price = 0;
        ?>

            <table class="tbl-cart fs-5 mt-3" cellpadding="10" cellspacing="1">
                <tbody>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Code</th>
                        <th class="text-center" width=" 5%">Quantity</th>
                        <th class="text-center" width=" 10%">Unit Price</th>
                        <th class="text-center" width=" 10%">Price</th>
                        <th class="text-center" width=" 5%">Remove</th>
                    </tr>
                    <?php
                    foreach ($_SESSION["cart_item"] as $item) {
                        $item_price = $item["quantity"] * $item["price"];
                    ?>
                        <tr>
                            <td><img src="uploads/<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                            <td><?php echo $item["code"]; ?></td>
                            <td class="text-center">
                                <?php echo $item["quantity"]; ?>
                            </td>
                            <td class="text-end"><?php echo "&#x20B9; " . $item["price"]; ?></td>
                            <td class="text-end"><?php echo "&#x20B9; " . number_format($item_price, 2); ?></td>
                            <td class="text-center">
                                <a href="newCart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">
                                    <i class="fa-solid fa-trash-can text-dark fs-5"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                        $total_quantity += $item["quantity"];
                        $count = $total_quantity;
                        $total_price += ($item["price"] * $item["quantity"]);
                    }
                    ?>

                    <tr class="fw-bold text-success">
                        <td class="text-center bg-secondary" colspan="2">Total</td>
                        <td class="text-center bg-secondary"><?php echo $total_quantity; ?></td>
                        <td class="text-end bg-secondary" colspan="2"><strong><?php echo "&#x20B9; " . number_format($total_price, 2); ?></strong></td>
                        <td class="text-center bg-primary ">
                            <a class="text-dark" href="payment.php">Place order</a>
                            <!-- <div class="button">
                                <p class="btnText">Place order</p>
                                <div class="btnTwo">
                                    <p class="btnText2"><i class="fa-solid fa-cart-shopping"></i></p>
                                </div>
                            </div> -->
                        </td>
                    </tr>
                </tbody>
            </table>

        <?php
        } else {
        ?>
            <table class="tbl-cart fs-5 mt-3 " cellpadding="10" cellspacing="1">
                <tbody>
                    <tr>
                        <td colspan="6" class="text-center">
                            <p class="text-center">Your Cart Is Empty !!!</p>
                            <img src="img/empty-cart.gif" />
                            <!-- <video src="img/cartvdo.webm"></video> -->
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </div>

    <?php
    include 'footer.php';
    ?>

</body>

</html>