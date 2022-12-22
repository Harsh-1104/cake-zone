<?php
include 'connection.php';

$id = "";
$products = "";
$categoryId = "";
$userId = "";
$createdAt = "";
$isPaid = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = substr(uniqid("O"), 0, 8);
    $products = test_input($_POST["prodName"]);
    $category = test_input($_POST["catType"]);
    $user = test_input($_POST["user"]);
    $createdAt =  date('y-m-d h:i:s');
    if (!empty($_POST['isPaid'])) {
        $isPaid = $_POST['isPaid'];
        if ($isPaid == 'Yes') {
            $isPaid = 1;
        } else {
            $isPaid = 0;
        }
    }
    if ($products != "" && $category != "" && $user != "") {
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
                $products = $prod['id'];
            }
        }
        echo $products;


        $sql2 = "select id from `user` where name = '$user'";
        $result2 = mysqli_query($conn, $sql2);

        if ($result2) {
            while ($userid = mysqli_fetch_assoc($result2)) {
                $userId = $userid['id'];
            }
        }
        echo $userId;


        $sql = "insert into `ordertb` (`id`, `products`, `categoryId`, `userId`, `createdAt`, `isPaid`) values('$id', '$products', '$categoryId', '$userId', '$createdAt', '$isPaid')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die(mysqli_error($conn));
        } else {
            header('location:order_display.php');
        }
    } else {
        '<script>alert("All the fields are required so fill all the fields");</script>';
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
                <h1 class="display-4 text-uppercase text-white">Order Insert</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container bg-secondary w-50 border border-dark border-2 mb-5">
        <form method="POST" class="text-center p-2" id="myForm" name="myForm" enctype="multipart/form-data" onsubmit="return valform(); action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h6 id="err"></h6>
            <h6 id="err1"></h6>
            <select name="catType" class="w-75 bg-white" id="tprof" onchange="changeCatId()">
                <option value="">--- Select Category ---</option>
                <?php
                $count = 1;
                $sql = "select * from `category`";
                $result = mysqli_query($conn, $sql);
                $catId;

                if ($result) {
                    while ($data = mysqli_fetch_assoc($result)) {

                        $cat = $data['type'];
                        if ($count == "1") {
                            $catId = $data['id']; ?>
                            <option value="<?php echo $cat; ?>" selected><?php echo $cat; ?></option><?php
                                                                                                        $count = $count + 1;
                                                                                                    } else { ?>
                            <option value="<?php echo $cat; ?>"><?php echo $cat; ?></option><?php
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                            function changeCatId()
                                                                                            {
                                                                                                $catId = '<script>alert(document.getElementsByName("catType")[0].value)</script>';
                                                                                            }
                                                                                            ?>
            </select><br><br>
            <select name="prodName" class="w-75 bg-white" id="tprof">
                <option value="">--- Select Product ---</option>
                <?php

                $sql4 = "select * from `product`";
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
                <option value="">--- Select User ---</option>
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
                <label for="isPaid" class="text-end px-3">is Paid ?</label>&emsp;
                <input type="radio" name="isPaid" value="Yes"> Yes &emsp;&emsp;
                <input type="radio" name="isPaid" value="No" checked> No <br><br>
            </div><br>
            <input type="submit" class="w-25 bg-primary" value="Insert" onclick="valcat()" name="insert" id="btnsbmt"><br><br>
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