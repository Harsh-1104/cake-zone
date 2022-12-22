<?php
include 'connection.php';

if (isset($_POST['update'])) {
    $id = $_GET['updateid'];
    $products = $_POST['prodName'];
    $category = $_POST['catType'];
    $userId = $_POST['user'];
    $createdAt =  date('y-m-d h:i:s');

    if (!empty($_POST['isPaid'])) {
        $isPaid = $_POST['isPaid'];
        if ($isPaid == 'Yes') {
            $isPaid = 1;
        } else {
            $isPaid = 0;
        }
    }

    $sql1 = "select id from `category` where type = '$category'";
    $result1 = mysqli_query($conn, $sql1);

    if ($result1) {
        while ($catid = mysqli_fetch_assoc($result1)) {
            $categoryId = $catid['id'];
        }
    }
    echo $categoryId;


    $sql5 = "select id from `product` where name = '$products'";
    $result5 = mysqli_query($conn, $sql5);

    if ($result5) {
        while ($prod = mysqli_fetch_assoc($result5)) {
            $productId = $prod['id'];
        }
    }
    echo $productId;


    $sql2 = "select id from `user` where name = '$user'";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        while ($userid = mysqli_fetch_assoc($result2)) {
            $userId = $userid['id'];
        }
    }
    echo $userId;


    $sql = "update `ordertb` set `products`='$productId', `categoryId`='$categoryId', `userId`='$userId', `createdAt`='$createdAt', `isPaid`='$isPaid' where `ordertb`.`id`='$id'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die(mysqli_error($conn));
    } else {
        header('location:order_display.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="../img/titlogo.png" type="image/icon type">
    <style>
        #err1,
        #err2,
        #err3,
        #err4,
        #err5,
        #err6 {
            display: none;
            text-align: center;
        }

        #admn {
            width: 75%;
            text-align: center;
        }
    </style>
</head>

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
                <h1 class="display-4 text-uppercase text-white">order update</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container bg-secondary w-50 border border-dark border-2 mb-5">
        <form method="POST" class="text-center p-2" id="myForm" name="myForm" enctype="multipart/form-data" onsubmit="return valform()">
            <h6 id="err"></h6>
            <h6 id="err1"></h6>
            <?php
            include 'connection.php';
            $upid = $_GET['updateid'];

            $sql = "select * from `ordertb` where `ordertb`.`id` = '$upid'";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <select name="catType" class="w-75 bg-white" id="tprof">
                    <option value="--- Select Category ---">--- Select Category ---</option>
                    <?php
                    $sql = "select type from `category`";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($data = mysqli_fetch_array($result)) { ?>
                            <option value="<?php print_r($data[0]) ?>"><?php print_r($data[0]) ?></option>
                    <?php }
                    }
                    ?>
                </select><br><br>
                <select name="prodName" class="w-75 bg-white" id="tprof">
                    <option value="--- Select Product ---">--- Select Product ---</option>
                    <?php
                    $sql4 = "select name from `product`";
                    $result4 = mysqli_query($conn, $sql4);

                    if ($result4) {
                        while ($prodname = mysqli_fetch_assoc($result4)) {
                            $name = $prodname['name']; ?>
                            <option value="<?php echo $name ?>"><?php echo $name ?></option>
                    <?php }
                    }
                    ?>
                </select><br><br>
                <select name="user" class="w-75 bg-white" id="tprof">
                    <option value="--- Choose User ---">--- Choose User ---</option>
                    <?php
                    $sql3 = "select name from `user`";
                    $result3 = mysqli_query($conn, $sql3);

                    if ($result3) {
                        while ($data = mysqli_fetch_assoc($result3)) {
                            $user = $data['name']; ?>
                            <option value="<?php echo $user; ?>"><?php echo $user; ?></option>
                    <?php }
                    }
                    ?>
                </select><br><br>
                <div class="w-75 bg-white m-auto text-start border border-dark">
                    <label class="text-end px-3" for="isPaid">is Paid ?</label>&emsp;
                    <input type="radio" name="isPaid" value="Yes"> Yes &emsp;&emsp;
                    <input type="radio" name="isPaid" value="No"> No <br><br>
                </div><br>
            <?php
            } ?>
            <input type="submit" value="Update" name="update" id="btnsbmt" onclick="valcat()"><br><br>
        </form>
    </div>

    <?php
    include 'admin_footer.php';
    ?>

</body>

<script>
    function valcat() {
        var cattype = document.getElementById("myForm").elements.namedItem("catType");
        var err = document.getElementById("err1");

        if (cattype.selectedIndex == 0) {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "*Category is Required";
            cattype.focus();
            return false;
        } else {
            err.innerHTML = "";
            return true;
        }
    }

    function valform() {
        var err = document.getElementById("err");
        if (valcat() == false) {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "*Please fill Required Fields";
            return false;
        }
    }
</script>

</html>