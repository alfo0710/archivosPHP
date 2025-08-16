<?php
//Escribe un programa en php que realice una 
//solicitud fetch a un json php y que contenga colores.


$colores=["rojo"=> "💓", "azul"=>"💙", "naranja" => "💜", "verde" =>"💚", "amarillo"=>"💛"];

header("Content-Type: aplication/json");
echo json_encode($colores);
?>



