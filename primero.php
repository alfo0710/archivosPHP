<?php
//Funciona habilitando el apache
 $dato1="Bienvenida a php..."; // variable tipo String (no se la definimos, se define sola)
 $dato2=5;
 $dato3='p';
 $dato4=true;

echo "<h1 style= 'color:brown'>$dato1</h1>";
echo "<h4>Variables:</h4>";
echo "<li>$dato2<br></li>";
echo "<li>$dato3<br></li>";
echo "<li>$dato4<br></li>";

var_dump($dato4);
echo "<br>";
var_dump($dato1);
echo "<br>";
var_dump($dato3);

// . es para concatenar
//Para ejecutar escribir en el navegador
//localhost/nombrecarpeta/nombrearchivo

//Ejercico
//Dadas dos variables informar cual es mas grande o bien si son iguales

$num1 = 61;
$num2 = 65;

if ($num1 > $num2 ) {
    echo "<br>";
  echo "<p>El numero $num1 es mayor que el numero $num2</p>";
} elseif ($num2 > $num1) {
    echo "<br>";
  echo "<p>El numero $num2 es mayor que el numero $num1</p>";
} else {
    echo "<br>";
  echo "<p>Son numeros iguales</p>";
}


$user_var="UsuarioJuan";
$admin_var="Admin";
$privilegio=false;


if ($privilegio) {
   echo "<p style='color:green;' >Tenes permiso sos: $admin_var</p>" ;
} else {
    echo "<p style='color:red;'> No tenes permiso sos: $user_var</p>";
}

$ternario = $privilegio ? "<p style='color:green;' >Tenes permiso sos: $admin_var</p>" : "<p style='color:red;'> No tenes permiso sos: $user_var</p>";
echo $ternario;