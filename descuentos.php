<?php
// Implementar un algoritmo que dado el precio de un producto muestre 
// con un descuento del 10% si este cuesta entre 2000 y 3500 pesos, un 15% si cuesta 
//mas de 3500, en caso contrario no aplicar ningún descuento e informar 
//"No aplica descuento"


echo "<br><br><br>";

$precioProducto =4000;

if ($precioProducto >2000 && $precioProducto <3500) {
  $descuento1 = (10/100);
  $preciofinal1 = $precioProducto - $descuento1;
  echo "<p style='color:green;'>El precio a pagar con un descuento es: $preciofinal1 </p> "; 
} elseif ($precioProducto >= 3500) {
   $descuento2 = (15/100);
  $preciofinal2 = $precioProducto - $descuento2;
  echo "<p style='color:blue;'>El precio final a pagar con un descuento del 15% es: $preciofinal2 </p> ";
} else {
  echo "<p style='color:red;'>No aplica ningun descuento,el precio final es: $precioProducto</p>";
}

//HECHO CON FUNCIONES
