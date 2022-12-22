<?php

$servername = "jpd-do-user-10535667-0.b.db.ondigitalocean.com:25060";
$username = "harsh";
$password = "AVNS_qjENOGjEZ0f-6VI";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
$type = $_POST['type'];

$sql = "INSERT INTO category VALUES ('$id','$type')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully" + $id + $type;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

}


$sql = "select * from `ecommerce`.`category`";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $type = $row['type'];

        echo '<table border = "1">
                <tr>
                    <td>' .  $id  . '</td>
                    <td>' .  $type . '</td>
                    <td>
                    <div id = "delete" onclick = "deletedata()" style = "cursor:pointer;">
                            <i style="color:red; font-size:20px; margin:5px;" class="fa-solid fa-xmark"></i>
                        </div></td>
                </tr></table>';
    }
}
?>

<html>

<head>
    <title>
        Question2
    </title>
    <script src="https://kit.fontawesome.com/1d3e763f80.js" crossorigin="anonymous"></script>

    <style>
        body {
            width: 100%;
            background: rgb(102, 102, 102);
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
        }

        #container {
            margin-left: auto;
            margin-right: auto;
            margin-top: 70px;
            border: 2px solid black;
            border-radius: 10px;
            padding: 5px;
            width: 35%;
            text-align: center;
            background: rgba(0, 204, 255, 0.5);
            font-size: 20px;
            box-shadow: 0px 25px 15px -15px #000000;
        }

        .txtbox {
            margin: 10px;
            height: 35px;
            width: 60%;
            padding-left: 20px;
            padding-right: 15px;
            font-size: 17px;
            border-radius: 5px;
        }

        .btn {
            margin: 20px;
            height: 40px;
            width: 30%;
            font-size: 18px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            background-color: rgba(0, 255, 0, 0.5);
            border-radius: 10px;
            cursor: pointer;
        }

        #bill {
            text-align: center;
            font-size: 22px;
            font-family: Arial, Helvetica, sans-serif;
            width: 65%;
            margin: auto;
            margin-bottom: 10px;
            color: rgb(0, 0, 0);
        }

        hr {
            width: 90%;
            border: 1px solid rgb(0, 0, 0);
        }
    </style>

</head>

<body>
    <div id="container">
        <form action="sample.php" method="post">
            <input class="txtbox" type="number" name="id" id="id" placeholder="ID"><br>
            <input class="txtbox" type="text" name="type" id="type" placeholder="Type"><br>
            <input class="btn" type="button" name="submit" value="Insert">
        </form>
    </div>
</body>

</html>