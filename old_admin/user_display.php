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

    <div class="container mb-5">
        <a href="user_insert.php" class="btn btn-primary my-5 fs-5 rounded-3"> + Add User</a>
        <div class="navbar1">
            <table class="navbar2" align="center" cellpadding="20px" cellspacing="20px" font-size="25px" width="100%">
                <thead>
                    <?php
                    $sql = "select id,name, email, phone, image, isAdmin, createdAt from `user`";
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
        </div>
    </div>

    <?php
    include 'admin_footer.php';
    ?>
</body>

</html>