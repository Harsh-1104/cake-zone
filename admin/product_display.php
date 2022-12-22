<?php
include 'connection.php';
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
                <h1 class="display-4 text-uppercase text-white">product table</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container mb-5 overflow-auto">
        <a href="product_insert.php" class="btn btn-primary my-5 fs-5 rounded-3"> + Add Product</a>
        <table class="text-center fs-6 fw-bold" cellpadding="10px" cellspacing="20px">
            <thead>
                <?php
                // $sql = "select * from `product`";
                $sql = "select p.id, `name`,`images`,`price`,`discount`,`description`,`type` from `product` p,`category` c where p.`categoryId`=c.`id`;";
                $result = mysqli_query($conn, $sql);

                $result_array = array();
                $data = array();

                while ($row = mysqli_fetch_object($result)) {

                    $result_array = get_object_vars($row);
                    $properties = array_keys($result_array);
                }

                $result2 = mysqli_query($conn, $sql);
                $data = mysqli_fetch_all($result2);

                $i = 1;
                ?>
                <tr>
                    <?php
                    foreach ($properties as $value) {
                    ?>
                        <th><?php echo $value;
                            $i++; ?></th>

                    <?php }
                    ?>
                    <th colspan="2">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $a = 0;
                $id;
                foreach ($data as $row) {
                    $i = 0;
                ?>
                    <tr>
                        <?php foreach ($row as $cell) {;
                            if ($a == 0) {
                                $id = $row[0];
                                $a = $a + 1;
                            } ?>
                            <td>
                                <?php
                                if ($i == 2) {
                                ?>
                                    <img class="border border-2 border-dark hover-zoom w-100 h-100" src="../uploads/<?php echo $cell; ?>" />
                                <?php
                                    $i++;
                                } else if ($i == 4) {
                                    echo $cell . " % ";
                                    $i++;
                                } else if ($i == 3) {
                                    echo $cell . " &#8377 ";
                                    $i++;
                                } else {
                                    echo $cell;
                                    $i++;
                                }
                                ?>
                            </td>
                        <?php }
                        $a = 0; ?>
                        <td>
                            <button style="border:0px;background:none;" class="edit">
                                <a href="product_update.php?updateid=<?php echo $id; ?>" class="text-dark">
                                    <i class="fa-solid fa-pen"></i></a>
                            </button>
                        </td>
                        <td>
                            <button style="border:0px;background:none;" class="remove">
                                <a href="product_delete.php?removeid=<?php echo $id; ?>" class="text-dark">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php
    include 'admin_footer.php';
    ?>


</body>

</html>