<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    //$order_id=$_POST['id']; // post method -> name of the input field
    $name = $_POST['tname'];
    $prof = $_POST['tprof'];
    $desc = $_POST['tdesc'];
    $id = uniqid('t');
    $sql = "insert into `testimonial` (id,name,profession,description) values('$id','$name','$prof','$desc')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "Data inserted successfully";
        header('location:testimonial_insert_delete_display.php');
    } else {
        die(mysqli_error($conn));
    }
}

if (isset($_GET['removeid'])) {
    $id = $_GET['removeid'];
    $sql = "delete from `testimonial` where id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:testimonial_insert_delete_display.php');
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
                <h1 class="display-4 text-uppercase text-white">Testimonial Table</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container mb-5">
        <form method="post" align="center" style="padding:10px;">
            <input type="text" placeholder="Enter Name" name="tname" id="tname"><br><br>
            <input type="text" placeholder="Enter Profession" name="tprof" id="tprof"><br><br>
            <textarea placeholder="Enter Description" name="tdesc" id="tdesc"></textarea><br><br>
            <input type="submit" value="Submit Review" name="submit" id="btnsbmt"><br><br>
        </form>
    </div><br><br>
    <div class="container mb-5">
        <div class="navbar1" align="center">
            <table class="navbar2" align="center" cellpadding="15px" cellspacing="20px" font-size="50px">
                <thead>
                    <?php
                    $sql = "select * from `testimonial`";
                    $result = mysqli_query($conn, $sql);

                    $result_array = array();
                    $data = array();

                    while ($row = mysqli_fetch_object($result)) {

                        $result_array = get_object_vars($row);
                        $properties = array_keys($result_array);
                    }

                    $result2 = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_all($result2);

                    $i = 1; ?>
                    <tr>
                        <?php
                        foreach ($properties as $value) {
                        ?>
                            <th><?php echo $value;
                                $i++; ?></th>

                        <?php }
                        ?>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 0;
                    $id;
                    foreach ($data as $row) { ?>
                        <tr>
                            <?php foreach ($row as $cell) {;
                                if ($a == 0) {
                                    $id = $row[0];
                                    $a = $a + 1;
                                } ?>
                                <td><?php echo $cell; ?></td>
                            <?php }
                            $a = 0; ?>
                            <td><button style="border:0px;background:none;" class="edit"><a href="testimonial_update.php?updateid=<?php echo $id; ?>" class="text-dark"><i class="fa-solid fa-pen"></i></a></button></td>
                            <td><button style="border:0px;background:none;" class="remove"><a href="testimonial_insert_delete_display.php?removeid=<?php echo $id; ?>" class="text-dark"><i class="fa-solid fa-trash-can"></i></a></button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    include 'admin_footer.php';
    ?>
</body>

</html>