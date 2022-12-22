<?php
include 'connection.php';

$id;
$userid;
$desc;
$rating;
$created;
//$i=0;
// function display()
// {
//   $sql = "SELECT * FROM `feedback`";
//   $result = mysqli_query($conn, $sql);

//   if ($result) {
//     while ($row = mysqli_fetch_assoc($result)) {
//       $id = $row['id'];
//       $userid = $row['userid'];
//       $desc = $row['description'];
//       $rating = $row['rating'];
//       $created = $row['createdAt'];
//     }
//   }
// }


if (isset($_POST['submit'])) {
  $id = uniqid('f');
  $userid = $_POST['userid'];
  $description = $_POST['desc'];
  $rating = $_POST['rating'];
  // $created=$_POST['created'];
  $sql = "INSERT INTO `feedback`(`id`, `userid`, `description`, `rating`) VALUES 
        ('$id', '$userid', '$description', '$rating')";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "Data inserted successfully";
    header('location:feedback.php');
  } else {
    die(mysqli_error($conn));
  }
}
