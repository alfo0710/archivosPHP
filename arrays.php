<?php

$cosas = [5,"pepe",false,'c',7.4];

$planetas = ["Venus","Mercurio","Tierra", "Jupiter"];

echo "<br>";
echo $planetas[1]."<br>";
echo $planetas[3]."<br>";
echo "<hr>";

foreach($cosas as $cosa){ // as es una variable auxiliar que se usa para recorrer el array
    echo $cosa;
}


