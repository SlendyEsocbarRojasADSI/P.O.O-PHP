<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Punto_02</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>

<body>

    <h1>Ejemplo de factura</h1>
    <p>2.	De la galería de productos, el usuario introducirá el código y el número de unidades del producto que desea comprar. El programa determinará el total a pagar, como una factura.</p>

    <div class="contenedor">
        <div class="principal">
            <div class="imagen">
                <img src="https://demonslayermerch.store/wp-content/uploads/2021/11/Demon-Slayer-logo.png" alt="">
            </div>
            <h1>Facturacion</h1>
            <?php echo '<h3>'."Fecha:" .$fecha= date("Y-m-d").'</h3>;'?>
            <form class="" action="api.php" method="post">
                <div class="datos">
                    Nombre <input type="text" name="nombre" value="">
                    Identificacion <input type="number" name="Id" value="">
                    <br><br>
                    Producto 1: <input type="text" name="p1">
                    Cantidad: <input type="text" name="c1">
                    Valor unitario: <input type="text" name="v1">
                    <br><br>
                    Producto 2: <input type="text" name="p2">
                    Cantidad: <input type="text" name="c2">
                    Valor unitario: <input type="text" name="v2">
                    <br><br>
                    Producto 3: <input type="text" name="p3">
                    Cantidad: <input type="text" name="c3">
                    Valor unitario: <input type="text" name="v3">
                    <br><br>
                    Producto 4: <input type="text" name="p4">
                    Cantidad: <input type="text" name="c4">
                    Valor unitario: <input type="text" name="v4">
                    <br><br>
                    Producto 5: <input type="text" name="p5">
                    Cantidad: <input type="text" name="c5">
                    Valor unitario: <input type="text" name="v5">
                    <input type="submit" value="Generar">
                    <?php
                        $nombre= $_POST['nombre'];
                        $id= $_POST['Id'];

                        $pro1= $_POST['p1'];
                        $cant1= $_POST['c1'];
                        $val1= $_POST['v1'];
                        $pro2= $_POST['p2'];
                        $cant2= $_POST['c2'];
                        $val2= $_POST['v2'];
                        $pro3= $_POST['p3'];
                        $cant3= $_POST['c3'];
                        $val3= $_POST['v3'];
                        $pro4= $_POST['p4'];
                        $cant4= $_POST['c4'];
                        $val4= $_POST['v4'];
                        $pro5= $_POST['p5'];
                        $cant5= $_POST['c5'];
                        $val5= $_POST['v5'];

                        $productos= array($pro1, $pro2, $pro3, $pro4, $pro5);
                        $cantidad= array($cant1, $cant2, $cant3,  $cant4, $cant5);
                        $valor= array($val1, $val2, $val3, $val4, $val5);

                        $pretotal1= $cant1*$val1;
                        $pretotal2= $cant2*$val2;
                        $pretotal3= $cant3*$val3;
                        $pretotal4= $cant4*$val4;
                        $pretotal5= $cant5*$val5;

                        $valortotal= array($pretotal1, $pretotal2, $pretotal3, $pretotal4, $pretotal5);
                        $suma= array_sum($valortotal);

                        $iva= $suma*0.19;
                        $valorpagar= $suma+$iva;
                    ?>

                    <div>
                        <hr color="palevioletred">
                    <center>
                        <h2>Detalle de compra</h2>
                        <table>
                            <tr>
                                <td><b>Productos</b></td>
                                <td><b>Cantidad</b></td>
                                <td><b>Precio unitario</b></td>
                                <td><b>Precio total</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    foreach ($productos as $pro){
                                        echo $pro.'<br>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    foreach ($cantidad as $can){
                                        echo $can.'<br>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    foreach ($valor as $valoru){
                                        echo $valoru.'<br>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    foreach ($valortotal as $valort){
                                        echo $valort.'<br>';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?php echo 'Total compra: $'.$suma .'<br>' .'Iva: $'.$iva .'<br>' .'Total a pagar: $'.$valorpagar;
                                ?></td>
                            </tr>
                        </table>
                </div>
            </form>
        </div>
    </div>
</body>
</html>