<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Superficies</title>
</head>

<body>
    <?php
        if (isset($_GET['figura'])) {
            $figura = $_GET['figura'];
            switch ($figura) {
                case 'Triangulo':
                    if (isset($_GET['base']) && isset($_GET['altura'])) {
                        $base = $_GET['base'];
                        $altura = $_GET['altura'];
                        $superficie = $base * $altura / 2;
                    } else {
                        $base = 0;
                        $altura = 0;
                        $superficie = 0;                    
                    }
                    break;
                case 'Cuadrado':
                    if (isset($_GET['lado'])) {
                        $lado = $_GET['lado'];
                        $superficie = pow($lado, 2);                   
                    } else {
                        $lado = 0;
                        $superficie = 0;                    
                    }
                    break;
                case 'Circulo':
                    if (isset($_GET['radio'])) {
                        $radio = $_GET['radio'];
                        $superficie = pow((pi() * $radio), 2);
                    } else {
                        $radio = 0;
                        $superficie = 0;                    
                    }
                    break;                    
            }
        } else {
            $figura = '';            
        }
    ?>
    <form method="get">
        <fieldset>
            <legend>Figuras Geométricas</legend>
            <select name="figura">
                <option value="Triangulo">Triangulo</option>
                <option value="Cuadrado">Cuadrado</option>
                <option value="Circulo">Circulo</option>
            </select>
            <input type="submit" value="Seleccionar"/>
        </fieldset>
    </form>
    <form method="get">
        <fieldset>
            <?php
                echo "<legend>$figura</legend>";
                echo "<input type='hidden' name='figura' value='$figura'/>";
                switch ($figura) {
                    case 'Triangulo':
                        echo "<pre>base:       <input type=number name='base' value='$base'/></pre>";
                        echo "<pre>altura:     <input type='number' name='altura' value='$altura'/></pre>";
                        echo "<pre>superficie: <input type='number' name='superficie' value='$superficie'/></pre>";
                        echo '<input type="submit" value="calcular"/>';
                        break;
                    case 'Cuadrado':
                        echo "<pre>lado:       <input type=number name='lado' value='$lado'/></pre>";
                        echo "<pre>superficie: <input type='number' name='superficie' value='$superficie'/></pre>";
                        echo '<input type="submit" value="calcular"/>';
                        break;
                    case 'Circulo':
                        echo "<pre>radio:      <input type=number name='radio' value='$radio'/></pre>";
                        echo "<pre>superficie: <input type='number' name='superficie' value='$superficie'/></pre>";
                        echo '<input type="submit" value="calcular"/>';
                        break;
                    }
            ?>
        </fieldset>
    </form>
</body>
</html>