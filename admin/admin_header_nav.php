<?php
include_once 'connection.php';
// session_start();
?>


<html>

<head>
    <meta charset="utf-8">
    <title>CakeZone - Cake Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" href="../img/titlelogo.png" type="image/icon type">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style2.css" rel="stylesheet">

    <!-- font awasome -->
    <script src="https://kit.fontawesome.com/57c76d83b9.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <div class="col-lg-2 text-left py-3" style="margin-left: 70px;">
            <div class="d-inline-flex align-items-center justify-content-center">
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary font-primary">
                        <!-- <i class="fa fa-birthday-cake fs-1 text-white me-3"></i> -->
                        <i class="fa-solid fa-cake-candles fs-1 text-white me-3"></i>
                        <!-- <img src="img/logo_gif.gif" width="70" height="70" class="rounded-pill" /> CakeZone -->
                        CakeZone
                    </h1>
                </a>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="../index.php" class="nav-item nav-link <?php if ($page == 'home') {
                                                                    echo "active";
                                                                } ?>">Home</a>
                <a href="../about.php" class="nav-item nav-link <?php if ($page == 'about') {
                                                                    echo "active";
                                                                } ?>">About Us</a>
                <a href="../menu.php" class="nav-item nav-link <?php if ($page == 'menu') {
                                                                    echo "active";
                                                                } ?>">Menu & Pricing</a>
                <a href="../team.php" class="nav-item nav-link <?php if ($page == 'team') {
                                                                    echo "active";
                                                                } ?>">Master Chefs</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-item nav-link dropdown-toggle <?php if ($page == 'page') {
                                                                                echo "active";
                                                                            } ?>" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="../service.php" class="dropdown-item">Our Service</a>
                        <a href="../testimonial.php" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="../contact.php" class="nav-item nav-link <?php if ($page == 'contact') {
                                                                        echo "active";
                                                                    } ?>">Contact Us</a>
            </div>
        </div>

        <a href="admin.php" class="btn btn-primary px-4 rounded-2 fs-5 me-5">
            Admin<i class="fa-solid fa-lock ms-2 text-black fs-5"></i>
        </a>

        <!-- profile logo -->
        <!-- <div class="nav-item dropdown">
            <a data-bs-toggle="dropdown">
                <div id="u1" style="display: block; margin-top:40px;">
                    <div class="rounded-circle col-lg-1 mx-5" style="width: 45px; height: 45px; background-color: #FFF;">
                        <i class="fa-solid fa-user m-2" style="font-size: 30px; color: #000; cursor: pointer;"></i>
                    </div>
                </div>

                <div id="u2" style="display: block;">
                    <div class="rounded-circle col-lg-1 mx-5" style="width: 45px; height: 45px; cursor: pointer;">
                        <?php
                        if ($_COOKIE["email"]) {
                            $user_email = $_COOKIE["email"];
                            $password = $_COOKIE["pwd"];

                            // $sql = "select image from user where email ='$user_email' and password='$password'";
                            $sql = "select image from `user` where email='$user_email' and password='$password'";
                            $result = mysqli_query($conn, $sql);


                            while ($res = mysqli_fetch_assoc($result)) {
                        ?>
                                <img src="../img/<?= $res['image'] ?>" style="width:100%; height:100%; border-radius: 50%;">

                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>

                <script>
                    var co = document.cookie.split('%')[0].split(";")[0].split("=")[1];
                    if (co == "") {
                        document.getElementById("u1").style.display = "block";
                    } else {
                        document.getElementById("u2").style.display = "block";
                        document.getElementById("u1").style.display = "none";
                    }
                </script>
            </a>
            <div class="dropdown-menu">
                <a href="../login.php" class="dropdown-item">Log-in</a>
                <a href="../login.php" class="dropdown-item" onclick="timepass()">Log-out</a>
                <script>
                    function timepass() {
                        // document.cookie = "email =" + "";
                        // document.cookie = "pwd =" + "";
                        localStorage.clear();
                        location.reload();
                    }
                </script>
            </div>
        </div> -->
    </nav>

    <!-- whatsapp -->
    <a href="https://wa.me/919824527094?text=Hello" data-action="share/whatsapp/share" target="_blank" class="floating">
        <i class="bi bi-whatsapp float-button fs-1"></i>
    </a>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-2 px-3 mb-3 fs-5 back-to-top rounded-circle"><i class="fa-solid fa-angles-up"></i></a>

</body>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/waypoints/waypoints.min.js"></script>
<script src="../lib/counterup/counterup.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="../js/main.js"></script>

</html>