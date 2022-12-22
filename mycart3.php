<?php
include("menu.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body onload="hide()">
    <script>
        function hide() {
            var container = document.getElementsByClassName('container-fluid');
            for (var i = 0; i < container.length; i++) {
                i.visibility = 'hidden';
            }
            var nav = document.getElementsByClassName('navbar');
            for (var i = 0; i < nav.length; i++) {
                i.visibility = 'hidden';
            }
            var modal = document.getElementsByClassName('modal');
            for (var i = 0; i < modal.length; i++) {
                i.visibility = 'hidden';
            }
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $total = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;
                                $total = $total + $value['Price'];
                                //print_r($value);
                                $value['Quantity'] = $_GET['q'];
                                echo "
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]</td>
                                    <td><div class='d-flex'>
                                    
                                        <button  name='minusBtn' class='btn btn-sm' onclick='decreaseItem()'>-</button>
                                    
                                    <input class='text-center' type='number' value=$value[Quantity] id='qntty' disabled>
                                    
                                    <button  name='plusBtn' class='btn btn-sm' onclick='addItem()'>+</button>
                                    <script>
                                    var ttl,qn;
                                    function addItem()
                                        {                                           
                                            // var qntty=document.getElementById('qntty');
                                            // alert(qntty.value);
                                            // qntty.value=parseInt(qntty.value)+1;
                                            qn=parseInt(qntty.value)+1;
                                            ttl =  $value[Price]*qn;
                                            alert(ttl);
                                            document.getElementById('totalDisplay').value=ttl;                                           
                                            window.location.href='mycart2.php?t='+ttl+'&q='+qn;  

                                                                             
                                        }
                                    function decreaseItem()
                                    {
                                        var qntty=document.getElementById('qntty');
                                        alert(qntty.value);
                                        qn=parseInt(qntty.value)-1;
                                        qntty.value=parseInt(qntty.value)-1;
                                        
                                        ttl =  $value[Price]*qn;
                                        alert(ttl);
                                        
                                        document.getElementById('totalDisplay').value=ttl; 
                                        window.location.href='mycart2.php?t='+ttl+'&q='+qn;                                          
                                                                                  
                                    }
                                    </script>
                                   </div>
                                    </td>
                                    <td>
                                    
                                    <form action='manage_cart.php' method='POST'>
                                        <button  name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                    
                                    </td>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4"></div>
                <h4>Total :</h4>
                <?php $total = $_GET['t']; ?>
                <h5 class="text-right" id="totalDisplay"><?php echo $total ?></h5><br>
                <form>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cash On Delivery
                        </label>
                    </div><br>
                    <button class="btn btn-primary btn-block">Make Purchase</button>
                </form>
            </div>
        </div>
    </div>
    <script>
    </script>
</body>

</html>