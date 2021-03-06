<?php
    // Archivo de articulos para JardineriaDany.

    // Sin objetos (con 3 arrays).
    /*$descripciones[0] = "Fabulas et sunt arbitror, fabulas esse multos a fore, non duis senserit eruditionem, aliqua vidisse sed arbitror. Ullamco ab quid quamquam. Lorem o pariatur. Id o fidelissimae se magna te laboris. Quis mandaremus id incididunt, est ab transferrem. Cillum commodo ut summis velit. Velit singulis incididunt id arbitror si anim consequat ne quamquam ea enim probant, minim deserunt philosophari.";
    $descripciones[1] = "Ita anim sint amet officia quo lorem ad te tamen commodo. In ea quis aute quem. De dolore mandaremus transferrem. Se appellat ubi nostrud iis probant quorum ubi mandaremus familiaritatem te irure praetermissum incurreret irure doctrina, ea tamen a dolor. Ubi excepteur illustriora a expetendis ut veniam pariatur. In ad malis multos eram, non cernantur cohaerescant. Multos mentitum domesticarum, velit quo do aliqua commodo te qui irure relinqueret ita ad irure iudicem relinqueret.";
    $descripciones[2] = "Et nulla concursionibus, magna pariatur instituendarum, summis e aliquip, ipsum ne litteris a multos, non elit voluptatibus aut sed lorem firmissimum, eram an a amet officia, ipsum possumus transferrem. Magna an quamquam, nostrud est lorem, o dolore irure se commodo, veniam do se malis mandaremus. Ne legam arbitrantur, commodo iis vidisse. Tempor ubi quae nostrud, te probant praetermissum, est nam amet aliqua dolor, laboris velit quorum ubi fore, fugiat possumus singulis te litteris quorum irure senserit varias, veniam litteris laboris ad occaecat sint excepteur eiusmod. Nulla fabulas consectetur hic eiusmod duis cupidatat laboris hic quibusdam fugiat litteris incididunt e offendit transferrem ex probant. Nulla quo et sunt officia, culpa qui iis aliqua iudicem. Pariatur quorum fabulas ullamco.";
    $descripciones[3] = "Veniam exercitation excepteur lorem possumus. E voluptate in possumus, qui eram noster dolore ingeniis. Quorum deserunt praesentibus. Ut vidisse coniunctione, fore firmissimum officia enim doctrina. Ad lorem concursionibus ad commodo se occaecat, eram litteris te tempor e a nisi eram o probant eu laborum coniunctione in offendit quo pariatur est doctrina ab minim nostrud e praesentibus ne nam appellat a senserit. Quae quibusdam id ipsum irure, occaecat veniam vidisse non singulis noster an proident imitarentur ea arbitror quem fabulas commodo. Ut aute fabulas voluptate, fore tempor relinqueret se veniam laborum id appellat ab eu laborum exercitation, o ab sunt tempor ut eu fugiat deserunt ingeniis qui irure ea in legam quibusdam sed est quis varias sunt possumus.";
    $fotos[0]="Imagenes/violetaafricana.jpg";
    $fotos[1]="Imagenes/flores.jpg";
    $fotos[2]="Imagenes/flores2.jpg";
    $fotos[3]="Imagenes/flores3.jpg";
    $estilo[0]='izq';
    $estilo[1]='der';
    $estilo[2]='izq';
    $estilo[3]='der';*/

    // Con objetos.
    $listaArticulos = array();

    class Articulos
    {
        public $id, $titulo, $descripcion, $foto, $estilo;
    }

    $articulo = new Articulos;
    $articulo->id = 0;
    $articulo->titulo = "Fabulas et sunt arbitror";
    $articulo->descripcion = "Fabulas et sunt arbitror, fabulas esse multos a fore, non duis senserit eruditionem, aliqua vidisse sed arbitror. Ullamco ab quid quamquam. Lorem o pariatur. Id o fidelissimae se magna te laboris. Quis mandaremus id incididunt, est ab transferrem. Cillum commodo ut summis velit. Velit singulis incididunt id arbitror si anim consequat ne quamquam ea enim probant, minim deserunt philosophari.";
    $articulo->foto = "Imagenes/violetaafricana.jpg";
    $articulo->estilo = 'izq';
    $listaArticulos[0] = $articulo;

    $articulo = new Articulos;
    $articulo->id = 1;
    $articulo->titulo = "Ita anim sint amet officia";
    $articulo->descripcion = "Ita anim sint amet officia quo lorem ad te tamen commodo. In ea quis aute quem. De dolore mandaremus transferrem. Se appellat ubi nostrud iis probant quorum ubi mandaremus familiaritatem te irure praetermissum incurreret irure doctrina, ea tamen a dolor. Ubi excepteur illustriora a expetendis ut veniam pariatur. In ad malis multos eram, non cernantur cohaerescant. Multos mentitum domesticarum, velit quo do aliqua commodo te qui irure relinqueret ita ad irure iudicem relinqueret.";
    $articulo->foto = "Imagenes/flores.jpg";
    $articulo->estilo = 'der';
    $listaArticulos[1] = $articulo;                

    $articulo = new Articulos;
    $articulo->id = 2;
    $articulo->titulo = "Et nulla concursionibus";
    $articulo->descripcion = "Et nulla concursionibus, magna pariatur instituendarum, summis e aliquip, ipsum ne litteris a multos, non elit voluptatibus aut sed lorem firmissimum, eram an a amet officia, ipsum possumus transferrem. Magna an quamquam, nostrud est lorem, o dolore irure se commodo, veniam do se malis mandaremus. Ne legam arbitrantur, commodo iis vidisse. Tempor ubi quae nostrud, te probant praetermissum, est nam amet aliqua dolor, laboris velit quorum ubi fore, fugiat possumus singulis te litteris quorum irure senserit.";
    $articulo->foto = "Imagenes/flores2.jpg";
    $articulo->estilo = 'izq';
    $listaArticulos[2] = $articulo; 

    $articulo = new Articulos;
    $articulo->id = 3;
    $articulo->titulo = "Ea minim te multos nam";
    $articulo->descripcion = "Ea minim te multos nam iis elit sunt sunt vidisse, expetendis dolore illum  nescius varias se ad eram relinqueret. Culpa quibusdam excepteur, quis offendit ita sempiternum o si lorem ea noster an eiusmod quem laboris consequat. An dolore appellat firmissimum, ea cernantur ea quibusdam ad ut ad praetermissum, noster consequat graviterque. Sunt cupidatat relinqueret ubi dolore eiusmod cupidatat ab cupidatat esse mandaremus litteris, se nam aliqua commodo.";
    $articulo->foto = "Imagenes/flores3.jpg";
    $articulo->estilo = 'der';
    $listaArticulos[3] = $articulo; 
?>