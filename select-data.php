<?php

include         ('connect.php');



$namePizza          = $_POST['name-pizza'];
$descriptionPizza   = $_POST['description-pizza'];
$pricePizza         = $_POST['price-pizza'];

if(isset($_POST['btnAddCart'])){
   

$query              = mysqli_query($connect, "SELECT * FROM myshopping");
$result             = mysqli_fetch_assoc($query);

if(empty($result)){
    echo 'No';
}else{
    echo $result;
}

}
?>