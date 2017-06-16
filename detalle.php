<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Artículo</title>
</head>

<body>
    <div id="wrapper">
    <header>
        <div id="titulo">
            <a href="index.php">Jardinería Dany</a>   
        </div>
        <div id="subtitulo">
            El arte de la jardinería hogareña
        </div>
        <nav>
            <ul>
                <li>Plantas</li>
                <li>Paisajismo</li>
                <li>Floricultura</li>
                <li>Contacto</li>
            </ul>
        </nav>
    </header>
       <section>
            <div id="artDetalle">
                <?php
                    include_once "articulos.php";
                    $art = new Articulos;
                    $indice = $_GET['indice'];
                    $art = $listaArticulos[$indice];
                    echo '<div style="height:200px; width:auto; position:relative; background-image: url( '.$art->foto.'); background-size:cover; background-position:center;"></div>';
                    echo "<h3>$art->titulo</h3>";
                    echo "$art->descripcion<br/>";
                ?>
            </div>
        </section>
        <footer>
            <div id="textoFooter">
                <p>Contacto:</p>
                <P>Av. Mitre 456 - Mina Clavero</p>
                <p>Córdoba - Argentina</p>
                <p>jardineriaDany@elPotro.com.jp</p>
            </div>
            <div id="redesFooter">
                <a href="http://www.facebook.com" target="_blank"><img src="Imagenes/Facebook.png"/></a> 
                <a href="http://www.twitter.com" target="_blank"><img src="Imagenes/Twitter.png"/></a>
                <a href="http://www.youtube.com" target="_blank"> <img src="Imagenes/YouTube.png"/></a>
                <a href="http://www.linkedin.com" target="_blank"><img src="Imagenes/Linkedin.png"/></a>
            </div>
        </footer>
    </div>
</body>
</html>
<link rel="stylesheet" href="estilos.css">