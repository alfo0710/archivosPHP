<?php


//Funcion que multiplica dos numeros.

$num1=2; $num2=45;//SE LE ASIGNO UN VALOR
echo producto($num1,$num2) . "<br>"; //SE EJECUTO EL VALOR ANTES ASIGANDO
//NO IMPORTA SI LAS VARIABLES TIENEN OTRO NOMBRE. LO QUE IMPORTA ES EL NOMBRE DE LA FUNCION


echo producto(6,5); // SE LE ASIGNO UN VALOR Y SE EJECUTO A LA VEZ


// FUNCION QUE SE EJECUTA
function producto ($dato1, $dato2){
    return $dato1*$dato2;
}


//ASIGNACION DE VALORES DE LA FUNCION
sumar_vals(15,30);

//SIN RETORNO
function sumar_vals($d1,$d2){
    echo $d1 + $d2;
}




