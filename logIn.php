<?php
include 'connection.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from `user` where email='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
    $pass = $row['password'];
    $id = $row['id'];
    if (!$result) {
        die(mysqli_error($conn));
    } else {
        if ($email === $username && $pass === $password) {
            header('location:index.php');
            setcookie("email", $email, time() + 2 * 24 * 60 * 60);
            setcookie("id", $id, time() + 2 * 24 * 60 * 60);
            setcookie("pwd", $pass, time() + 2 * 24 * 60 * 60);
        } else {
            header('location:login.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        html,
        body {
            /* background-image: url('img/hero.jpg'); */
            background: linear-gradient(rgba(43, 40, 37, 0.7), rgba(43, 40, 37, .7)), url(img/offer.jpg) center no-repeat;
            /* background-size: cover; */
            /* background-repeat: no-repeat; */
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        .container {
            /* margin-top: -70px; */
            /* height: 100%; */
            align-content: center;
        }

        .card {
            height: 460px;
            margin-top: 50px;
            width: 35%;
            background-color: rgba(0, 0, 0, 0.7) !important;
            border: 3px solid #E88F2A;
        }

        .social_icon span {
            font-size: 60px;
            margin-top: 30px;
            margin-left: 10px;
            color: #FFC312;
            border: 2px solid red;
        }

        .social_icon span:hover {
            color: white;
            cursor: pointer;
        }

        .card-header h1 {
            color: white;
        }

        .social_icon {
            position: absolute;
            right: 20px;
            top: -65px;
        }

        .input-group-prepend span {
            width: 50px;
            background-color: #E88F2A;
            color: black;
            border: 0 !important;
            height: 50px;
        }

        input:focus {
            outline: 0 0 0 0 !important;
            box-shadow: 0 0 0 0 !important;
        }

        .remember {
            color: white;
        }

        .remember input {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn {
            color: black;
            background-color: #E88F2A;
            width: 100px;
        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .links {
            color: white;
        }

        .links a {
            margin-left: 4px;
        }
    </style>
</head>

<body onload="checkCookie()">
    <?php
    include 'header_nav.php';
    ?>

    <div class="container">
        <div class="d-flex h-100">
            <div class="card">
                <div class="card-header">
                    <h1>Sign In</h1>
                    <!-- <div class="d-flex justify-content-end social_icon">
                        <span style="color:#E88F2A"><i class="fab fa-facebook-square"></i></span>
                        <span style="color:#E88F2A"><i class="fab fa-google-plus-square"></i></span>
                        <span style="color:#E88F2A"><i class="fab fa-twitter-square"></i></span>
                    </div> -->
                </div> <br>
                <div class="card-body">
                    <form method="post" name="myForm">
                        <div id="d1" style="color:#E88F2A;"></div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Email" onblur="chkUName();">
                        </div> <br>
                        <div id="d2" style="color:#E88F2A;"></div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password" onblur="chkPWD();">
                        </div> <br>
                        <div class="row align-items-center remember">
                            <input type="checkbox" id="chkd">Remember Me
                        </div> <br>
                        <div class="form-group">
                            <input type="submit" name="login" value="Login" class="btn btn-primary float-right login_btn">
                        </div>
                    </form>
                </div>
                <div>
                    <div class="d-flex justify-content-center links" style="margin-top: -40px;">
                        Don't have an account?<a href="signup.php">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var email = document.myForm.username;
        email.focus();
        var pwd = document.myForm.password;

        function chkUName() {
            emailptrn = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+.[a-z]$/;
            if (email.value == "") {
                document.getElementById("d1").innerHTML = "Please enter your email..!!";
                email.focus();
            } else if (email.value.match(emailptrn)) {
                document.getElementById("d1").innerHTML = "";
                pwd.focus();
            } else {
                document.getElementById("d1").innerHTML = "Please enter valid email..!!";
                email.focus();
            }
        }

        function chkPWD() {
            if (pwd.value == "") {
                document.getElementById("d2").innerHTML = "Please enter your password..!!";
            } else {
                document.getElementById("d2").innerHTML = "";
            }
        }

        function storeData() {
            chk = document.getElementById("chkd");
            if (chk.checked == true) {
                // document.cookie = "email=" + document.myForm.username.value;
                localStorage.setItem("email", document.myForm.username.value);
                localStorage.setItem("password", document.myForm.password.value);
                document.cookie = "email =" + localStorage.getItem('email');
                document.cookie = "pwd =" + localStorage.getItem('password');
            }
        }


        function checkCookie() {
            var user = getCookie("userName");
            // getCookie("UserName")
            // alert(user);
            if (user == "" || user == "null") {

                document.getElementById("username").value = "";
            } else {
                document.getElementById("username").value = user;
            }
        }

        function getCookie(name) {
            // alert("hello");
            var cookieName = name + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            // alert(decodedCookie);
            // if (user != "" || user != null) {
            var username = decodedCookie.split("=")[1];
            var username = username.split(";")[0];
            // alert(username);
            return username;
            // }
        }
    </script>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>
</body>

</html>