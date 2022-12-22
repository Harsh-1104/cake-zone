<?php
include 'connection.php';

$id = "";
$name = "";
$email = "";
$password = "";
$phone = "";
$image = "";
$isAdmin = "";
$createdAt = "";

if (isset($_POST['insert'])) {
    $id = substr(uniqid("U"), 0, 8);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $U_image = $_FILES['image']['name'];
    $createdAt =  date('y-m-d h:i:s');

    if (!empty($_POST['isAdmin'])) {
        $isAdmin = $_POST['isAdmin'];
        if ($isAdmin == 'Yes') {
            $isAdmin = 1;
        } else {
            $isAdmin = 0;
        }
    }

    echo "<script>alert('$isAdmin');</script>";

    $sql = "insert into `user` (`id`, `name`, `email`, `password`, `phone`, `image`, `isAdmin`, `createdAt`) values('$id', '$name', '$email', '$password', '$phone', '$U_image', '$isAdmin', '$createdAt')";

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
                <h1 class="display-4 text-uppercase text-white">User Insert</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->


    <div class="container bg-secondary w-50 border border-dark border-2 mb-5">
        <form method="POST" class="text-center p-2" id="myForm" name="myForm" enctype="multipart/form-data" onsubmit="return valform()">
            <h6 id="err"></h6>
            <h6 id="err1"></h6>
            <input type="text" class="w-75 bg-white" placeholder="Enter User Name" name="name" id="tprof" onblur="chk_nm()"><br><br>
            <h6 id="err2"></h6>
            <input type="email" class="w-75 bg-white" placeholder="Enter Email" name="email" id="tprof" onblur="chk_mail()"><br><br>
            <h6 id="err3"></h6>
            <input type="password" class="w-75 bg-white" placeholder="Enter Password" name="password" id="tprof" onblur="chk_pss()"><br><br>
            <h6 id="err4"></h6>
            <input type="text" class="w-75 bg-white" placeholder="Enter Phone No." name="phone" id="tprof" onblur="chk_phn()"><br><br>
            <h6 id="err7"></h6>
            <input type="file" class="w-75 bg-white" placeholder="Enter Image" name="image" id="tprof"><br><br>
            <h6 id="err5"></h6>
            <div class="w-75 bg-white m-auto text-start border border-dark">
                <label class="text-end px-3" for="isAdmin">isAdmin ?</label>&emsp;
                <input class="border border-dark" type="radio" name="isAdmin" value="Yes"> Yes &emsp;&emsp;
                <input class="border border-dark" type="radio" name="isAdmin" value="No" checked> No <br><br>
            </div><br>
            <h6 id="err6"></h6>
            <input type="date" class="w-75 bg-white" placeholder="Created At" name="createdAt" id="tprof" onblur="chk_date()"><br><br>
            <input type="submit" class="w-25 bg-primary" value="Insert" name="insert" id="btnsbmt"><br><br>
        </form>
    </div>

    <!-- footer -->
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

    function chk_isadmin() {
        var err = document.getElementById("err5");
        err.style.display = "block";
        err.style.color = "red";
        err.innerHTML = "*Admin selection is Required";
        isAdmin.focus();
        return false;
    }

    function chk_date() {
        var date = document.getElementById("myForm").elements.namedItem("createdAt");
        var err = document.getElementById("err6");
        if (!date.value) {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "*Created Date is Required";
            date.focus();
            return false;
        } else {
            err.innerHTML = "";
            return true;
        }
    }

    function valfile() {
        var img = document.getElementById("myForm").elements.namedItem("image");
        var err = document.getElementById("err7");

        if (img.files.length === 0) {
            err.style.display = "block";
            err.style.color = "red";
            err.innerHTML = "*Please Fill Required Fields";
            img.focus();
            return false;
        } else {
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