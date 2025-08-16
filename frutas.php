<?php
/*
$frutas=["Manzana", "Pera", "Banana", "Frutilla", "Melon"];

function contraFrutas($frutas){
    $contador= 0;
    foreach($frutas as $fruta){
        $longitud = strlen($fruta);
        if ($longitud >= 5 && $longitud <= 7){
            $contador++;
        }
    }
    return $contador;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>
</head>
<body>
    <h1>Todas las frutas:</h1>
    <ul>
        <?php foreach($frutas as $fruta): ?>
            <li><?php echo $fruta;?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Cuantas tienen entre 5 y 7 letras:</h1>

    <?php echo contraFrutas($frutas);?>

</body>
</html> */

$frutas=["Manzana🍎", "Pera🍐", "Banana🍌", "Fruta🍓", "Melon🍈"];

//frutas que tegan entre 5 y 7 caracteres mostrarlas en mayusculas con un fondo de color verde
//las que tengan mas, fondo color violeta y en minsuculas

    foreach($frutas as $fruta){
        $longitud = strlen($fruta);

         if ($longitud >= 5 && $longitud <= 7) {
            mostrarVerde($fruta);
        } elseif ($longitud > 7) {
           mostrarVioleta($fruta);
        } else {
        mostrarRojo($fruta);;
    }
    }

   function mostrarVerde($fruta) {
    $fruta_varNueva = strtoupper($fruta);
    echo "<div style='background-color: green; padding: 5px; margin: 5px;'>$fruta_varNueva</div>";
}

function mostrarVioleta($fruta) {
    $fruta_varNueva = strtolower($fruta);
    echo "<div style='background-color: violet; padding: 5px; margin: 5px;'>$fruta_varNueva</div>";
}

function mostrarRojo($fruta) {
    $fruta_varNueva = strtolower($fruta);
    echo "<div style='background-color: red; padding: 5px; margin: 5px;'>$fruta_varNueva</div>";
}







