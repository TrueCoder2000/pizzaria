<?php
include ('connect.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style11.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Actulizar</title>
</head>
<body>
   
<?php

if(isset($_GET['id'])){
    $id         = $_GET['id'];
    $result     = mysqli_query($connect, "SELECT * FROM myshopping WHERE Id='$id' ");
    foreach($result as $linha){
?>
<main class="div-products">

        <div class="div-text-pizza">
            <h3>PIZZA</h3>
        </div>

        <div class="div-pizza">

            <form class="div-pizza-magherita" action="validation.php" action="try.php" method="post">

                <div class="div-image-pizza">
                    <img src="image/magherita.jpg">
                </div>

                <div class="div-name-pizza">
                    <!--<p name="name-pizza" class="name-pizza">MARGHERITA</p>-->
                    <input type="text" name="name-pizza" class="name-pizza" value="<?php echo $linha['name-pizza'] ?>" readonly>
                </div>

                <div class="div-description-pizza">
                    <!--<h4 name="description-pizza" class="description-pizza">Tomato sauce, mozarella & oregano</h4>-->
                    <input type="text" name="description-pizza" class="description-pizza" value="<?php echo $linha['description-pizza'] ?>" readonly>
                </div>

                <div class="div-price-pizza">
                    <!--<h4 name="price-pizza" class="price-pizza">$18</h4>-->
                    <input type="text"  name="price-pizza" class="price-pizza"  value="<?php echo $linha['price-pizza'] ?>" readonly>
                </div>

                <div class="div-icremento">
                    <input type="text" value="<?php echo $linha['quantitypizza'] ?>" class="quantity" name="quantitypizza" readonly style="color: white;">
                </div>

                <div class="div-button-pizza">
                    <button name="actualizar" class="btnAddCart" <?php echo $Id ?>>ADD CART</button>
                </div>

            </form>

        </div>
</main>
        <?php } }?>
</body>
</html>