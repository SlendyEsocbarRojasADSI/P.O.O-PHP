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

    <h1>Algoritmo de pago mensual</h1>
    <p>4.	Una persona adquirió un producto para pagar en 20 meses. El primer mes pagó $10, el segundo $20, el tercero $40 y así sucesivamente. Realice un algoritmo para determinar cuánto debe pagar mensualmente y el total de lo que pagó después de los 20 meses. (Investigación código DATE o DATATIME javaScricpt).</p>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    if($i==1)
        $pago=10;
    else
        $pago=$pago*2;
    $total=$total+$pago;
    echo 'Valor de pago: ' . $pago . "<br/>\n";
}
 
?>

    <form method="post">
        <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
            <tbody>
                <tr align="center">
                    <td colspan="2" rowspan="1">
                        <input value="Procesar" type="submit" />
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

</body>
</html>