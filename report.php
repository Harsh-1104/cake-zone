<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>

<body>

  <h1>Reports : </h1>

  <form name="myForm" method="post">
    Choose date from :
    <input type="date" id="startDate" name="startDate"> to :
    <input type="date" id="endDate" name="endDate">
    <input type="submit" value="submit" name="submit" onclick="showData()">

  </form>
  <!-- <div id="d1"></div> -->
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th></th>

        <th scope="col">name</th>
        <th scope="col">images</th>
        <th scope="col">price</th>
        <th scope="col">discount</th>
        <th scope="col">createdAt</th>

      </tr>
    </thead>
    <tbody>
      <?php


      if (isset($_POST['submit'])) {
        $startdate = $_POST['startDate'];
        $enddate = $_POST['endDate'];
        $sql = "SELECT * from `product` where createdAt BETWEEN '$startdate 12:00:00' AND '$enddate 12:00:00';";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $Id = $row['id'];
            $name = $row['name'];
            $images = $row['images'];
            $price = $row['price'];
            $discount = $row['discount'];

            $categoryId = $row['createdAt'];


            echo '<tr>
       <td></td>
       <td></td>
        <td>' . $name . '</td>
        <td>' . $images . '</td>
        <td>' . $price . '</td>
        <td>' . $discount . '</td>
        
        <td>' . $categoryId . '</td>
  </tr>';
          }
        }
      }
      ?>



    </tbody>
  </table>
  <script>
    function showData() {
      document.getElementById("d1").innerHTML = document.myForm.startDate.value + document.myForm.endDate.value;
    }
  </script>

</body>

</html>