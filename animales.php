<?php
//implementar un jason de animales con sus iconos correspondientes y mostrarlos
//en una cuadricula

$animales=["pez"=> "🐟",
           "perro"=>"🐶", 
           "gato" => "🐈‍⬛", 
           "tortuga" =>"🐢", 
           "pollo"=>"🐤",
           "elefante"=>"🐘",
           "delfin"=>"🐬",
           "sapo"=>"🐸",
           "mono"=>"🐒"
        ];

header("Content-Type: aplication/json");
echo json_encode($animales);
?>