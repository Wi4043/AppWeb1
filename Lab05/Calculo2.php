<?php
     $precio = $_POST['valor1'];
     $cantidad = $_POST['valor2'];
     $descuento = $precio * 0.07;
     $preciorebajado = $precio * 0.95;
     $importe = $preciorebajado * $cantidad;
     $descuento2 = $importe * 0.07;
     $pago = $importe - $descuento2;
     $caramelos = $cantidad * 2;
     echo "Nuevo precio de la gaseosa: S/ " . $preciorebajado . "<br>";
     echo "Total: S/ " . $importe . "<br>";
     echo "Descuento: S/ " . $descuento2 . "<br>";
     echo "Total a pagar: S/ " . $pago . "<br>";
     echo "Obsequio: " . $caramelos . " caramelos ";
?>