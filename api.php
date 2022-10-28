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

    <h1>Tienda “Tiki Taka”</h1>
    <p>5.	Un empleado de la tienda “Tiki Taka” realiza N ventas durante el día, se requiere saber cuántas de ellas fueron mayores a $1000, cuántas fueron mayores a $500 pero menores o iguales a $1000, y cuántas fueron menores o iguales a $500. Además, se requiere saber el monto de lo vendido en cada categoría y de forma global. </p>

<?php

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        
        $edad = intval ($_POST['edad']);
        $sexo = intval ($_POST['sexo']);
        $carrera = intval ($_POST['carrera']);

        if($carrera==1){
                
        $estudiantes_de_ingenieria=$estudiantes_de_ingenieria+1;
        $a=$a+$edad;
        
        } if($sexo==1)
            $b=$b+1;
        if($carrera==1&&$sexo==2)
            $c=$c+1;
    }
?>
    <form method="post">
        <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
            <tbody>
                <tr>
                    <td>
                        <label for="edad">Ingresa el valor de edad:</label>
                    </td>
                    <td>
                        <input name="edad" required="required" step="1" type="number" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sexo">Selecciona el valor de sexo:</label>
                    </td>
                    <td>
                        <select name="sexo" required="required">
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="carrera">Selecciona el valor de carrera:</label>
                    </td>
                    <td>
                        <select name="carrera" required="required">
                            <option value="1">Ingenier&iacute;a</option>
                            <option value="2">otra carrera</option>
                         </select>
                    </td>
                </tr>
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