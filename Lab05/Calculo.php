<?php
     $totalV = $_POST['valor1'];
     $hijos = $_POST['valor2'];
     $bonificacion = $hijos * 50;
     $comision = $totalV * 0.075;
     $sueldoBasico = 600;
     $sueldoB1 = $sueldoBasico + $comision + $bonificacion;
     $descuento = $sueldoB1 * 0.11;
     $sueldoN = $sueldoB1 - $descuento;
     echo "Bonificación: S/ " . $bonificacion . "<br>";
     echo "Comisión: S/ " . $comision . "<br>";
     echo "Sueldo bruto: S/ " . $sueldoB1 . "<br>";
     echo "Descuento: S/ " . $descuento . "<br>";
     echo "El sueldo que le corresponde es: ".$sueldoN;
?>
    