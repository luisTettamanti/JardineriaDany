<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos en PHP</title>
</head>

<body>
    <?php
        class Peliculas
        {
            public $titulo, $genero, $anio;
        }
        
        $pelicula = new Peliculas;
        $pelicula->titulo = 'El Señor de los Anillos';
        $pelicula->genero = 'Acción';
        $pelicula->anio = 2005;
    
        echo $pelicula->titulo . ' ' . $pelicula->genero . ' ' . $pelicula->anio;
        
    ?>
</body>
</html>