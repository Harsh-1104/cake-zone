<?php
include "connection.php";
include 'testimonialPhp.php';
$page = 'page';
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="img/titlogo.png" type="image/icon type">
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
                <h1 class="display-4 text-uppercase text-white">Testimonial</h1>
                <a href="index.php">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="testimonial.php">Testimonial</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Testimonial</h2>
                <h1 class="display-4 text-uppercase">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <?php
                $sql = "SELECT * FROM `testimonial`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id']; // column name in the database
                        $name2 = $row['name'];
                        $profession2 = $row['profession'];
                        $desc2 = $row['description'];
                        $img = $row['image'];
                ?>
                        <div class="testimonial-item bg-dark text-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/<?php echo $img; ?>" style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h4 class="text-primary text-uppercase mb-1" id="c1"><?php echo $name2; ?></h4>
                                    <span><?php echo $profession2 ?></span>
                                </div>
                            </div>
                            <p class="mb-0"><?php echo $desc2; ?></p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php
    include 'footer.php';
    ?>
    <!-- Footer End -->


</body>

</html>