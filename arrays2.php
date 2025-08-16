<?php
$meses=["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php foreach($meses as $mes): ?>
            <li><?php echo $mes; ?></li>
        <?php endforeach; ?>
    </ul>

    <?php echo count($meses); ?>

</body>
</html>