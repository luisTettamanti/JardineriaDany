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
            
                /*$descripciones[0] = "Fabulas et sunt arbitror, fabulas esse multos a fore, non duis senserit eruditionem, aliqua vidisse sed arbitror. Ullamco ab quid quamquam. Lorem o pariatur. Id o fidelissimae se magna te laboris. Quis mandaremus id incididunt, est ab transferrem. Cillum commodo ut summis velit. Velit singulis incididunt id arbitror si anim consequat ne quamquam ea enim probant, minim deserunt philosophari.";
                $descripciones[1] = "Ita anim sint amet officia quo lorem ad te tamen commodo. In ea quis aute quem. De dolore mandaremus transferrem. Se appellat ubi nostrud iis probant quorum ubi mandaremus familiaritatem te irure praetermissum incurreret irure doctrina, ea tamen a dolor. Ubi excepteur illustriora a expetendis ut veniam pariatur. In ad malis multos eram, non cernantur cohaerescant. Multos mentitum domesticarum, velit quo do aliqua commodo te qui irure relinqueret ita ad irure iudicem relinqueret.";
                $descripciones[2] = "Et nulla concursionibus, magna pariatur instituendarum, summis e aliquip, ipsum ne litteris a multos, non elit voluptatibus aut sed lorem firmissimum, eram an a amet officia, ipsum possumus transferrem. Magna an quamquam, nostrud est lorem, o dolore irure se commodo, veniam do se malis mandaremus. Ne legam arbitrantur, commodo iis vidisse. Tempor ubi quae nostrud, te probant praetermissum, est nam amet aliqua dolor, laboris velit quorum ubi fore, fugiat possumus singulis te litteris quorum irure senserit varias, veniam litteris laboris ad occaecat sint excepteur eiusmod. Nulla fabulas consectetur hic eiusmod duis cupidatat laboris hic quibusdam fugiat litteris incididunt e offendit transferrem ex probant. Nulla quo et sunt officia, culpa qui iis aliqua iudicem. Pariatur quorum fabulas ullamco.";
                $fotos[0]="Imagenes/violetaafricana.jpg";
                $fotos[1]="Imagenes/flores.jpg";
                $fotos[2]="Imagenes/flores2.jpg";
                $estilo[0]='izq';
                $estilo[1]='der';
                $estilo[2]='izq';*/
                include_once "articulos.php";
            
                for ($i=0;$i<=count($fotos)-1;$i++)
                {
                    echo '<article>';
                    if ($estilo[$i]=='izq')
                    {
                        echo '<div id="foto" class="fIzquierda">';
                        echo '<div style="height:200px; width:180px; position:absolute; background-image: url( '.$fotos[$i].'); background-size:cover;"></div>';
                        echo '</div>';
                        echo '<div id="descripcion" class="dDerecha">';
                        echo "<p>$descripciones[$i]</p>"; 
                        echo '</div>';
                    }
                    else
                    {
                        echo '<div id="foto" class="fDerecha">';
                        echo '<div style="height:200px; width:180px; position:relative; background-image: url( '.$fotos[$i].'); background-size:cover; float:right"></div>';
                        echo '</div>';
                        echo '<div id="descripcion" class="dIzquierda">';
                        echo "<p>$descripciones[$i]</p>";
                        echo '</div>';
                     }
                echo '</article>';
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
