<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="../img/titlogo.png" type="image/icon type">

    <!-- <script src="https://kit.fontawesome.com/e458335416.js" crossorigin="anonymous"></script> -->
</head>

<body>
    <!-- header -->
    <?php
    include 'admin_header_nav.php';
    ?>


    <!-- Page Header Start -->
    <div class="container-fluid bg-img p-5 mb-5">
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Admin Access</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>

    <!-- Page Header End -->

    <!-- Admin Page Start -->

    <div class="container overflow-auto w-75">
        <table class="navbar2 text-center mt-2 mb-5" cellpadding="20px" cellspacing="20px">
            <thead>
                <tr>
                    <th>USER</th>
                    <th>PRODUCT</th>
                    <th>ORDER</th>
                    <th>CART</th>
                    <th>CATEGORY</th>
                    <th>TESTIMONIAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="user_display.php"><i class="fa-solid fa-table-cells fs-2"></i></a>
                    </td>
                    <td>
                        <a href="product_display.php"><i class="fa-solid fa-table-cells fs-2"></i></a>
                    </td>
                    <td>
                        <a href="order_display.php"><i class="fa-solid fa-table-cells fs-2"></i></a>
                    </td>
                    <td>
                        <a href="cart_display.php"><i class="fa-solid fa-table-cells fs-2"></i></a>
                    </td>
                    <td>
                        <a href="category_display.php"><i class="fa-solid fa-table-cells fs-2"></i></a>
                    </td>
                    <td>
                        <a href="testimonial_insert_delete_display.php"><i class="fa-solid fa-table-cells fs-2"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div><br>

    <!-- footer -->
    <?php
    include 'admin_footer.php';
    ?>

</body>

</html>