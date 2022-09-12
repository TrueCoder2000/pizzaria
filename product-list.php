<?php 

include             ('connect.php');


if($_GET['id']){
    $id = $_GET['id'];
    $delete     = mysqli_query($connect, "DELETE FROM myshopping WHERE id='$id'");

    if($delete){
        echo 'This Product was deleting...';
    }else{
        echo 'Error.......';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Product-list</title>
    <style>
        .div-container-my-shopping{
            width: 100%;
            height: 937px;
            display: flex;
            justify-content: center;
            align-items: center;
          
        }

        .div-my-shopping{
            width: 30%;
            height: 600px;
            margin: auto auto;
            display: block;
        }

        .div-head-shopping{
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: right;
            background-color: orange;
          
        }

        .div-cart-product{
            width: 30%;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
        }


        .div-cart-product a{
            text-decoration: none;
        }

        .div-cart-product i{
            color: white;
            font-size: 30px;
        }

        .div-body-product{
            width: 100%;
            height: 400px;
            background-color:white;
        }

        .div-text-shopping{
            width: 100%;
            height: 20px;
            display: flex;
            justify-content: left;
            align-items: center;
        }

        .div-text-shopping h5{
            color: black;
            font-family: Arial, Helvetica, sans-serif;
        }

        table{
            width: 100%;
            position: relative;
            top: 20px;
        }

        table tr{
            text-align: center;
        }

        table th{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        .div-footer-shopping{
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        .btn-checkout{
            width: 20%;
            height: 30px;
            border: none;
            background-color: orange;
            
        }

        .btn-checkout a{
            text-decoration: none;
            color: black;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }

        .btn-checkout a i{
            text-decoration: none;
            background-color: transparent;
        }
    </style>
</head>
<body>
    <div class="div-container-my-shopping">

        <div class="div-my-shopping">
            <div class="div-head-shopping">

                <div class="div-cart-product">
                   <a href="#"><i class="fa fa-shopping-cart"></i></a>
                     <!--<p class="quantity">0</p>-->
                </div>

            </div>

            <div class="div-body-product">
                <div class="div-text-shopping">
                    <h5>MY SHOPPING (0)</h5>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product(s)</th>
                            <th>Description</th>
                            <!--<th>Quantity</th>-->
                            <th>Price($)</th>
                            <!--<th>Edit</th>-->
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php
                        $query      = mysqli_query($connect, "SELECT * FROM myshopping"); 
                        WHILE ($linha=mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td><?php echo $linha['Id']; ?></td>
                            <td><?php echo $linha['nomepizza']; ?></td>
                            <td><?php echo $linha['descriptionpizza']; ?></td>
                            <!--<td><?php echo $linha['quantitypizza']; ?></td>-->
                            <td><?php echo $linha['pricepizza']; ?></td>
                            <td><!--<a href="actualizar.php?id=<?php echo $linha['Id']; ?>">Edit</a>--><a href="?id=<?php echo $linha['Id']; ?>"><i class="fa fa-times"></i></a></td>
                            

                        </tr>

                        <?php }?>
                    </tbody>
                </table>

                <div class="div-footer-shopping">
                    <h3>Total:$<?php 
                        $query          = mysqli_query($connect, "SELECT SUM(pricepizza) as 'sumpricepizza' from myshopping");
                        $result         = mysqli_fetch_array($query);

                        echo $result['sumpricepizza'];
                    ?></h3>
                    <button name="btn-checkout" class="btn-checkout"><a href="index.html">CHECKOUT</a></button>
                </div>
            </div>

        </div>
       </div> 
    </div>
</body>
</html>