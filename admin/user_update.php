<?php
include 'connection.php';

if (isset($_POST['update'])) {
    $id = $_GET['updateid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $createdAt = date('y-m-d h:i:s');

    $sql = "update `user` set `name`='$name', `email`='$email', `password`='$password', `phone`='$phone', `createdAt`='$createdAt' where `user`.`id`='$id'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die(mysqli_error($conn));
    } else {
        header('location:user_display.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="../img/titlogo.png" type="image/icon type">
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
                <h1 class="display-4 text-uppercase text-white">User Update</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>

    </div>
    <!-- Page Header End -->

    <div class="container bg-secondary w-50 border border-primary mb-5">
        <form method="POST" class="text-center p-2" id="myForm" name="myForm" enctype="multipart/form-data" onsubmit="return valform()">
            <?php

            $upid = $_GET['updateid'];

            $sql = "select * from `user` where `user`.`id` = '$upid'";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <h6 id="err"></h6>
                <h6 id="err1"></h6>
                <input class="w-75 bg-white" type="text" placeholder="Enter User Name" name="name" id="tprof" value="<?php echo $row['name'] ?>" onblur="chk_nm()"><br><br>
                <h6 id="err2"></h6>
                <input class="w-75 bg-white" type="email" placeholder="Enter Email" name="email" id="tprof" value="<?php echo $row['email'] ?>" onblur="chk_mail()"><br><br>
                <h6 id="err3"></h6>
                <input class="w-75 bg-white" type="password" placeholder="Enter Password" name="password" id="tprof" value="<?php echo $row['password'] ?>" onblur="chk_pss()"><br><br>
                <h6 id="err4"></h6>
                <input class="w-75 bg-white" type="text" placeholder="Enter Phone No." name="phone" id="tprof" value="<?php echo $row['phone'] ?>" onblur="chk_phn()"><br><br>
            <?php
            } ?>
            <input type="submit" value="Update" name="update" id="btnsbmt"><br><br>
        </form>
    </div>

    <?php
    include 'admin_footer.php';
    ?>

</body>

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

    function chk_mail() {
        var email = document.getElementById("myForm").elements.namedItem("email");
        var err = document.getElementById("err2");

        var patt = /^[a-z0-9._-]+@[a-z]{4,5}\.[a-z]{2,3}$/

        if (email.value == "") {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "*Email is Required";
            email.focus();
            return false;
        } else if (!patt.test(email.value)) {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "*Enter Valid Email";
            email.focus();
            return false;
        } else {
            err.innerHTML = "";
            return true;
        }
    }

    function chk_pss() {
        var password = document.getElementById("myForm").elements.namedItem("password");
        var err = document.getElementById("err3");
        if (password.value == "") {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "*Password is Required";
            password.focus();
            return false;
        } else {
            err.innerHTML = "";
            return true;
        }
    }

    function chk_phn() {
        var phone = document.getElementById("myForm").elements.namedItem("phone");
        var err = document.getElementById("err4");

        patt = /^[6789]{1}[0-9]{9}$/

        if (phone.value == "") {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "*Phone Number is Required";
            phone.focus();
            return false;
        } else if (isNaN(phone.value)) {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "Please Enter Numeric Phone Number";
            phone.focus();
            return false;
        } else if (phone.value.length > 10 || phone.value.length < 10) {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "Phone Number must be of 10 digits.";
            phone.focus();
            return false;
        } else if (!patt.test(phone.value)) {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "Phone Number is not Valid.";
            phone.focus();
            return false;
        } else {
            err.innerHTML = "";
            return true;
        }
    }

    function valform() {
        var err = document.getElementById("err");
        if (chk_nm() === false || chk_mail() === false || chk_phn() === false || chk_pss() === false || chk_date() === false || chk_admin() === false || valfile() === false) {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "*Please Fill Required Fields";
            err.focus();
            return false;
        } else {
            return true;
        }
    }
</script>

</html>