<?php
include 'connection.php'
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
                <h1 class="display-4 text-uppercase text-white">User Table</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container mb-5 overflow-auto">
        <a href="user_insert.php" class="btn btn-primary my-5 fs-5 rounded-3"> + Add User</a>
        <table class="text-center" cellpadding="10px" cellspacing="20px">
            <thead>
                <?php
                $sql = "select * from `user`";
                $result = mysqli_query($conn, $sql);

                $result_array = array();
                $data = array();

                while ($row = mysqli_fetch_object($result)) {

                    $result_array = get_object_vars($row);
                    $properties = array_keys($result_array);
                }

                $result2 = mysqli_query($conn, $sql);
                $data = mysqli_fetch_all($result2);

                $i = 2; ?>
                <tr>
                    <?php
                    foreach ($properties as $value) {
                        if ($i > 1) {
                    ?>
                            <th><?php echo $value; ?></th>

                    <?php }
                        $i++;
                    }
                    ?>
                    <th colspan="2">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $a = 0;
                $i = 2;
                $id;
                // $img = 0;
                foreach ($data as $row) {
                    $img = 0;
                ?>
                    <tr>
                        <?php foreach ($row as $cell) {
                            if ($a == 0) {
                                $id = $row[0];
                                $a = $a + 1;
                            }

                        ?>
                            <td>
                                <?php
                                if ($img == 5) {
                                    if ($cell == "") {
                                ?>
                                        <img class="rounded-circle border border-2 border-dark hover-zoom" src="../img/defaultprofile.png" height="100" width="100" />
                                    <?php
                                    } else {
                                    ?>
                                        <img class="rounded-circle border border-2 border-dark hover-zoom" src="../img/<?php echo $cell; ?>" height="100" width="100" />
                                <?php
                                    }
                                    $img++;
                                } else if ($img == 6) {
                                    if ($cell == 1) {
                                        echo 'Admin';
                                    } else {
                                        echo 'User';
                                    }
                                    $img++;
                                } else {
                                    echo $cell;
                                    $img++;
                                }
                                ?>
                            </td>
                        <?php }
                        $a = 0; ?>
                        <td>
                            <button style="border:0px;background:none;" class="edit">
                                <a href="user_update.php?updateid=<?php echo $id; ?>" class="text-dark">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            </button>
                        </td>
                        <td>
                            <button style="border:0px;background:none;" class="remove">
                                <a href="user_delete.php?removeid=<?php echo $id; ?>" class="text-dark">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- </div> -->
    </div>

    <?php
    include 'admin_footer.php';
    ?>
</body>

</html>