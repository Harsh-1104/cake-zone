<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
        body {
            /* background-image: url('img/hero.jpg'); */
            background: linear-gradient(rgba(43, 40, 37, 0.7), rgba(43, 40, 37, .7)), url(img/offer.jpg) center no-repeat;
            /* background-size: cover; */
            /* background-repeat: no-repeat; */
            /* height: 100%; */
            font-family: 'Numans', sans-serif;
        }

        .container {
            /* margin-top: -70px; */
            /* height: 100%; */
            align-content: center;
        }

        .card {
            /* height: 460px; */
            margin-top: -20px;
            margin-left: 17%;
            width: 70%;
            background-color: rgba(0, 0, 0, 0.7) !important;
            border: 3px solid #E88F2A;
            padding-left: 5%;
            padding-right: 5%;
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

<body>

    <!-- header -->
    <?php
    include 'header_nav.php';
    ?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Edit Profile</h1>
                <a href="index.php">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="userEdit.php">Edit Profile</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <?php
    $id = $_COOKIE['id'];
    $get_customer = "select * from user where `id`='$id'";
    $run_customer = mysqli_query($conn, $get_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_name = $row_customer['name'];
    $customer_email = $row_customer['email'];
    $customer_country = $row_customer['password'];
    $customer_city = $row_customer['phone'];
    $customer_contact = $row_customer['image'];


    ?>

    <!--- form -->
    <div class="container">
        <div class="d-flex h-100">
            <div class="card">
                <div class="card-header" style="text-align: right;">
                    <div style="margin-right: 4%;display:flex;">
                        <div>
                            <h1>Personal info</h1>
                        </div>
                        <div>
                            <img src="img/<?php echo $customer_contact; ?>" width="100" height="100" class="img-responsive" style="border-radius:100% ;">
                            <form method="post" enctype="multipart/form-data">
                                <label for="files" style="background-color: white; border-radius:100%;padding:5px;position:relative;top:-30px;left:0px"><i class="fa-solid fa-camera"></i><input type="file" id="files" name="c_image" class="form-control" style="display: none;"></label>
                        </div>
                    </div>
                    <div class="form-group" style="position:relative;top:-10%;">
                        <div class="text-right">
                            <!-- text-center Starts -->
                            <button name="updateImg" class="btn btn-primary">
                                Edit Profile Picture
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" name="myForm" enctype="multipart/form-data">
                        <h3> <label style="color:white ;"> Name: </label></h3>
                        <div id="d1" style="color:#E88F2A;"></div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="c_name" class="form-control" required value="<?php echo $customer_name; ?>">
                        </div> <br>
                        <h3> <label style="color:white ;"> Email: </label></h3>
                        <div id="d2" style="color:#E88F2A;"></div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></i></span>
                            </div>
                            <input type="text" name="c_email" class="form-control" required value="<?php echo $customer_email; ?>">
                        </div> <br>
                        <h3> <label style="color:white ;"> Password: </label></h3>
                        <div id="d2" style="color:#E88F2A;"></div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="text" name="c_country" class="form-control" required value="<?php echo $customer_country; ?>">
                        </div> <br>
                        <h3> <label style="color:white ;"> Contact: </label></h3>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-square-phone"></i></span>
                            </div>
                            <input type="text" name="c_city" class="form-control" required value="<?php echo $customer_city; ?>">
                        </div> <br>
                        <div class="form-group">
                            <div class="text-center">
                                <!-- text-center Starts -->
                                <button name="update" class="btn btn-primary">
                                    <h3> Save Changes</h3>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function timepass() {
            document.cookie = "email =" + "";
            document.cookie = "pwd =" + "";
            document.cookie = "id =" + "";
            localStorage.clear();
            location.reload();
        }
    </script>
    <?php

    if (isset($_POST['update'])) {

        // $update_id = $customer_id;

        $c_name = $_POST['c_name'];

        $c_email = $_POST['c_email'];

        $c_country = $_POST['c_country'];

        $c_city = $_POST['c_city'];

        $c_image = $_FILES['c_image']['name'];

        // $c_image_tmp = $_FILES['c_image']['tmp_name'];

        // move_uploaded_file($c_image_tmp,"customer_images/$c_image");

        $update_customer = "update user set name='$c_name',email='$c_email',password='$c_country',phone='$c_city',image='$c_image' where id='$id'";

        $run_customer = mysqli_query($conn, $update_customer);

        if ($run_customer) {

            echo "<script>alert('Your account has been updated please login again')</script>";
            echo "<script> document.cookie = 'email =' +'';
            document.cookie = 'pwd =' + '';
            document.cookie = 'id =' + '';</script>";
            echo "<script>window.open('login.php','_self')</script>";
        }
    }

    if (isset($_POST['updateImg'])) {

        $c_image = $_FILES['c_image']['name'];

        // $c_image_tmp = $_FILES['c_image']['tmp_name'];

        // move_uploaded_file($c_image_tmp,"customer_images/$c_image");

        $update_customer = "update user set image='$c_image' where id='$id'";

        $run_customer = mysqli_query($conn, $update_customer);

        if ($run_customer) {

            echo "<script>window.open('userEdit.php','_self')</script>";
            // echo "<script>window.location.reload()</script>";
        }
    }
    ?>
    <?php
    include 'footer.php';
    ?>
</body>

</html>