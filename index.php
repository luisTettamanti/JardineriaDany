<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="paginaCSS.css"/>
    <title></title>
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
           <?php
                $descripciones = array();
                $fotos = array();
                $estilo = array();

                include_once "articulos.php";
            
                for ($i=0;$i<=count($fotos)-1;$i++)
                {
                    echo '<article><form action="detalle.php" target="blank">';
                    echo "<input type='hidden' name='indice' value=$i>";
                    if ($estilo[$i]=='izq')
                    {
                        echo '<div id="foto" class="fIzquierda">';
                        echo '<div style="height:200px; width:180px; position:absolute; background-image: url( '.$fotos[$i].'); background-size:cover;"></div>';
                        echo '</div>';
                        echo '<div id="descripcion" class="dDerecha">';
                        echo "<p>$descripciones[$i]</p>";
                        echo '<input type="submit" value="..."/>';
                        echo '</div>';
                    }
                    else
                    {
                        echo '<div id="foto" class="fDerecha">';
                        echo '<div style="height:200px; width:180px; position:relative; background-image: url( '.$fotos[$i].'); background-size:cover; float:right"></div>';
                        echo '</div>';
                        echo '<div id="descripcion" class="dIzquierda">';
                        echo "<p>$descripciones[$i]</p>";
                        echo '<input type="submit" value="..."/>';
                        echo '</div>';
                     }
                echo '</form></article>';
                }
             ?>

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
