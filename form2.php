<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
</head>

<body>
    <?php
        echo '<p>El nombre del cliente es: '.$_POST['nombre'].'</p>';
        echo '<p>y su email es: '.$_POST['email'].'</p>';
    ?>
</body>
</html>
