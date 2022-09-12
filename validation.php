<?php

include         ("connect.php");


$namePizza          = $_POST['name-pizza'];
$descriptionPizza   = $_POST['description-pizza'];
$pricePizza         = $_POST['price-pizza'];
$quantitypizza      = $_POST['quantitypizza'];
$count = 1;

if(isset($_POST['btnAddCart'])){
    
    
    $query          = mysqli_query($connect, "INSERT INTO myshopping(nomepizza, descriptionpizza,quantitypizza, pricepizza)VALUES('$namePizza','$descriptionPizza','$quantitypizza','$pricePizza')");
    /*$result         = mysqli_fetch_assoc($query);*/

    if(empty($query)){
        echo 'No Sent...';
    }else{
        echo 'Thank you Dear Client...';
        header('refresh:3; url=index.html');
    }

    for($i=0;$i<$count;$i++){
        echo $quantitypizza=$count[$i];
    }


}


?>