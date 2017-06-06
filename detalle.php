<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Artículo</title>
</head>

<body>
    <?php
        include_once "articulos.php";
        $art = new Articulos;
        $indice = $_GET['indice'];
        $art = $listaArticulos[$indice];
        echo "$art->descripcion";
    ?>
</body>
</html>
<link rel="stylesheet" href="paginaCSS.css">