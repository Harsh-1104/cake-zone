<?php
include 'connection.php';
$name = array();
$profession = array();
$desc = array();
$img = array();
/*$con = new mysqli('localhost','rootprogram','','order_crud');

if(!$con){ 
    die(mysqli_error($con));
}*/
$i = 0;
$sql = "SELECT * FROM `testimonial`";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id']; // column name in the database
        $name2 = $row['name'];
        array_push($name, $name2);
        $profession2 = $row['profession'];
        array_push($profession, $profession2);
        $desc2 = $row['description'];
        array_push($desc, $desc2);
        $img2 = $row['image'];
        array_push($img, $img2);
        /*echo '<tr>
                    <td style="padding:10px;">'.$id.'</td><td style="padding:10px;">'.$name.'</td><td style="padding:10px;">'.$pay.'</td><td style="padding:10px;">'.$quntt.'</td><td style="padding:10px;">'.$mobno.'</td><td style="padding:10px;"><button style="background-color:blue;border-radius:4px"><a href="update.php?updateid='.$id.'" style="color:white;text-decoration:none;">Update</a></button><button style="background-color:red;border-radius:4px;margin-left:7px"><a style="color:white;text-decoration:none;" href="delete.php?deleteid='.$id.'">Delete</a></button>
                    </tr>';*/

        $doc = new DomDocument;

        // We need to validate our document before referring to the id
        //$doc->validateOnParse = true;
        //$doc->Load('book.xml');

        //echo "The element whose id is 'php-basics' is: " . $doc->getElementById('c1')->innerHTML . "\n";
        //$doc->getElementById('c1')->= $name;

        // here $id is a variable name which we have defined in this file
    }
}
