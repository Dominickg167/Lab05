<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sueldos</title>
</head>
<body>
    <form method="post" action="">
        Ingresar Numero de Hijos: <br> <input type="text" name="num_hijos"> <br>
        Resultado: <br>
        <input type="submit" name="suma" value="calcular">
    </form>
    <?php
    //declaracion de variables
        $hijos = $_POST['num_hijos'];
        $sueldo_basico = 600;
        $comision = 0.075;
        $descuento = 0.11;
        $bonificacion_por_hijo = 50;
        $bonificacion = $hijos * $bonificacion_por_hijo;
        $sueldo_bruto = $sueldo_basico + ($comision * $sueldo_basico);
        $sueldo_neto = $sueldo_bruto * $descuento;
        echo "El Sueldo Basico es : " .$sueldo_basico;
        echo "<br>El sueldo Bruto es: " .$sueldo_bruto;
        echo "<br>El sueldo Neto es: " .$sueldo_bruto - $sueldo_neto;
        echo "<br>La bonificacion es: " .$bonificacion;
    ?>
</body>
</html>
