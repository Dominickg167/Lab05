<?php
    $cantidad_gaseosas = $_POST['gaseosa'];
    $precio_gaseosas = 10;
    $descuento_gaseosas = 0.05;
    $descuento_especial = 0.07;
    $nuevo_precio = $precio_gaseosas - ($precio_gaseosas * $descuento_gaseosas);
    echo "La cantidad de gaseosas es : " .$cantidad_gaseosas;
    echo "<br>Nuevo precio de la Gaseosa : " .$nuevo_precio;
    echo "<br>Importe de la compra : " .$cantidad_gaseosas * $nuevo_precio;
    echo "<br>Importe del descuento : " .$descuento_especial;
    echo "<br>Importe a pagar : " .($cantidad_gaseosas * $nuevo_precio)-(($cantidad_gaseosas * $nuevo_precio) * $descuento_especial);
    echo "<br>Obsequio : " ."dos caramelos";
?>
