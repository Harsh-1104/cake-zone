<?php
include 'connection.php';

if (isset($_POST['insert']) && isset($_POST['catId']) && isset($_POST['catType'])) {
    $id = $_POST['catId'];
    $type = $_POST['catType'];

    echo $id;
    echo $type;

    $sanitized_id = mysqli_real_escape_string($conn, $id);

    $sanitized_type = mysqli_real_escape_string($conn, $type);

    $sql = "INSERT INTO `category` (`id`, `type`) VALUES ('$sanitized_id', '$sanitized_type');";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:category_display.php');
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
<style>
    body {
        width: 100%;
        height: auto;
    }

    .navbar1 {
        margin: auto;
        width: 10%;
        height: auto;
        border: 2px solid black;
        padding: 10px;
        background-color: #FAF3EB;
    }
</style>


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
                <h1 class="display-4 text-uppercase text-white">Category Insert</h1>
            </div>
        </div>
        <div class="section-title position-relative text-center mx-auto pb-3" style="max-width: 800px;"></div>
    </div>
    <!-- Page Header End -->

    <div class="container mb-5">
        <form method="POST" align="center" style="padding:10px;" id="myForm" onsubmit="return formValidate();" name="myForm">
            <h6 id="Err"></h6>
            <h6 id="pidErr"></h6>
            <input type="text" name="catId" id="tprof" placeholder="*Enter Category Id"><br><br>
            <input type="text" name="catType" id="tprof" placeholder="*Enter Category"><br><br>
            <input type="submit" value="Insert" onclick="chkId()" name="insert" id="btnsbmt"><br><br>
        </form>
    </div>

    <?php
    include 'admin_footer.php';
    ?>
    <script>
        
        function chkId(){
            var id=document.getElementById("myForm").elements.nammedItem("catId");
            var err = document.getElementById("idErr")
            if(id.value == "")
            {
                err.style.color = "red";
                err.innerHTML="Category Id is Required..";
                id.focus();
                return false;
            }
            else{
                err.innerHTML="";
                return true;
            }
        }
        function chkType(){
        var cat=document.getElementById("myForm").elements.nammedItem("catType");
            var err = document.getElementById("catErr");
            if(cat.value == "")
            {
                err.style.color="red";
                err.innerHTML="Category Type is Required..";
                cat.focus();
                return false;
            }
            else{
                err.innerHTML="";  
                return true;
            }
        }
        function formValidate(){
            var err = document.getElementById("Err");

            if(chkId()==false && chkType()==false)
            {
                err.style.color="red";
                err.innerHTML="Please Choose Required Fileds..";
                return false;
            }
            else
            {
                return true;
            }
        }
    </script>
</body>

</html>