<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Índice Masa Corporal</title>
</head>

<body>
            <?php
                if (isset($_GET['peso'])) {
                    $indice = $_GET['peso'] / pow($_GET['altura'] / 100, 2);
                    $peso = $_GET['peso'];
                    $altura = $_GET['altura'];
                    if ($indice <= 18.5) {
                        $resultado = 'Bajo Peso (<=18.5)';
                    } elseif ($indice > 18.5 && $indice <= 24.99) {
                        $resultado = 'Peso Normal (18.5-24.99)';
                    } elseif ($indice >=25 && $indice <= 30) {
                        $resultado = 'Sobrepeso (25-30)';
                    } elseif ($indice >= 30) {
                        $resultado = 'Obesidad (>30)';
                    }
                } else {
                    $indice = 0;
                    $peso = 0;
                    $altura = 0;
                    $resultado='';
                }
    
                echo "<form method='get' action='masaCorporal.php'><pre>";
                echo "<fieldset>";
                echo "<legend>Índice Masa Corporal</legend>";
                echo "Indice         <input type='number' name='indice' value=$indice disabled/> $resultado<br/>";
                echo "Peso (en kg.)  <input type='number' name='peso' value=$peso/><br/>";
                echo "Altura (en cm.)<input type='number' name='altura' value=$altura/><br/>";
            ?>
        </fieldset></pre>
        <input type="submit" value='calcular'/>
        </form>
</body>
</html>
