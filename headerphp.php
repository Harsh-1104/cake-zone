<?php
$email1 = $_COOKIE['email'];
$sql = "SELECT isAdmin FROM `user` WHERE email='$email1';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
} else {
    $admin = $row['isAdmin'];
}
?>

<?php
$user_email = $_COOKIE["email"];
$password = $_COOKIE["pwd"];
$sql = "select image from `user` where email='$user_email' and password='$password'";
$result = mysqli_query($conn, $sql);
while ($res = mysqli_fetch_assoc($result)) {
}
?>