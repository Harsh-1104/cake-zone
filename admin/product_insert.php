<?php

include 'connection.php';

if (isset($_POST['insert']) && isset($_POST['cat_id'])) {
    $id = substr(uniqid("prod"), 0, 8);
    $name = $_POST['name'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $desc = $_POST['desc'];
    $catid = $_POST['cat_id'];
    $feedid = $_POST['feedid'];

    if (!empty($_POST['isShown'])) {
        $isShown = $_POST['isShown'];
        if ($isShown == 'Yes') {
            $isShown = 1;
        } else {
            $isShown = 0;
        }
    }

    $sql = "select id from `category` where type = '$catid'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($cid = mysqli_fetch_assoc($result)) {
            $cateid = $cid['id'];
        }
    }
    echo $cateid;

    $sql2 = "INSERT INTO `product` (`id`, `name`, `images`, `price`, `discount`, `description`, `categoryId`, `feedbackId`, `isShown`) VALUES 
        ('$id', '$name', '$image', '$price', '$discount', '$desc', '$cateid', '$feedid', '$isShown');";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        header('location:product_display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="../img/titlogo.png" type="image/icon type">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
                <h1 class="display-4 text-uppercase text-white">product insert</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container bg-secondary w-50 border border-dark border-2 mb-5">
        <form method="POST" class="text-center p-2" id="myForm" enctype="multipart/form-data" onsubmit="return valform()">
            <h6 id="err"></h6>
            <h6 id="err1"></h6>
            <input type="text" class="w-75 bg-white" placeholder="Enter name" name="name" id="tprof" onblur="chk_nm()"><br><br>

            <input type="file" class="w-75 bg-white" placeholder="Enter Image" name="image" id="tprof"><br><br>

            <h6 id="err3"></h6>
            <input type="text" class="w-75 bg-white" placeholder="Enter Price" name="price" id="tprof" onblur="chk_price()"><br><br>

            <h6 id="err4"></h6>
            <input type="text" class="w-75 bg-white" placeholder="Discount" name="discount" id="tprof" onblur="val_dis()"><br><br>

            <input type="text" class="w-75 bg-white" placeholder="Description" name="desc" id="tprof"><br><br>

            <h6 id="err2"></h6>
            <select name="cat_id" id="tprof" class="w-75 bg-white">
                <option value="---Select Category---">---Select Category---</option>
                <?php
                $sql2 = "select type from `category`";
                $result2 = mysqli_query($conn, $sql2);

                if ($result2) {
                    while ($obj2 = mysqli_fetch_assoc($result2)) {
                        $type = $obj2['type']; ?>
                        <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                <?php }
                }
                ?>
            </select><br><br>

            <input type="text" class="w-75 bg-white" placeholder="Enter Feedback Id" name="feedid" id="tprof"><br><br>
            <div class="w-75 bg-white m-auto text-start border border-dark pt-2 -pb-5">
                <label class="text-end px-3" for="isShown">is Shown ?</label>&emsp;
                <input type="radio" name="isShown" value="Yes" checked> Yes &emsp;&emsp;
                <input type="radio" name="isShown" value="No"> No <br><br>
            </div><br><br>
            <input type="submit" value="Insert" onclick="valcat()" name="insert" id="btnsbmt"><br><br>
        </form>
    </div>

    <?php
    include 'admin_footer.php';
    ?>

    <script>
        function chk_nm() {
            var nm = document.getElementById("myForm").elements.namedItem("name");
            var err = document.getElementById("err1");
            if (nm.value == "") {
                err.style.display = "block";
                err.style.color = "red";
                err.innerHTML = "*Name is Required";
                nm.focus();
                return false;
            } else {
                err.innerHTML = "";
                return true;
            }
        }

        function chk_price() {
            var price = document.getElementById("myForm").elements.namedItem("price");
            var err = document.getElementById("err3");

            if (price.value == "") {
                err.style.display = "block";
                err.style.color = "red";
                err.innerHTML = "*Price is Required";
                price.focus();
                return false;
            } else if (isNaN(price.value)) {
                err.style.display = "block";
                err.style.color = "red";
                err.innerHTML = "Please Enter Numeric Price";
                price.focus();
                return false;
            } else {
                err.innerHTML = "";
                return true;
            }
        }

        function val_dis() {
            var discount = document.getElementById("myForm").elements.namedItem("discount");
            var err = docoment.getElementById("err4");
            alert(discount.value);
            if (discount.value == "") {
                err.style.display = "block";
                err.style.color = "red";
                err.innerHTML = "Discount must be less than 100";
                discount.focus();
                return false;
            } else {
                err.innerHTML = "";
                return true;
            }
        }

        function valcat() {
            var cattype = document.getElementById("myForm").elements.namedItem("cat_id");
            var err = document.getElementById("err2");

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

            if (chk_nm() == false || chk_price() == false || valcat() == false) {
                err.style.display = "block";
                err.style.color = "red";
                err.innerHTML = "Please fill Required Field";
                return false;
            } else {
                err.innerHTML = "";
                return true;
            }
        }
    </script>
</body>

</html>