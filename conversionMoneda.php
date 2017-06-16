<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Monedas</title>
</head>

<body>
            <?php
                $cotizacion = 14.75;
                if (isset($_GET['dolares']) || isset($_GET['pesos'])) {
                    if ($_GET['pesos'] > 0) {
                        $pesos = 0;
                        $dolares = $_GET['pesos'] / $cotizacion;
                        $mensajePesos = $_GET['pesos'];
                        $mensajeDolares = $dolares;
                    } else {
                        $dolares = 0;
                        $pesos = $_GET['dolares'] * $cotizacion;
                        $mensajeDolares = $_GET['dolares'];
                        $mensajePesos = $pesos;
                    }
                } else {
                    $pesos = 0;
                    $dolares = 0;
                    $mensajePesos = '';
                    $mensajeDolares = '';
                }

                echo "<form method='get' action='conversionMoneda.php'><pre>";
                echo "<fieldset>";
                echo "<legend>Conversión de Monedas</legend>";
                echo "Cotización     <input type='number' name='cotizacion' value='$cotizacion' disabled/><br/>";
                echo "Pesos          <input type='text' name='pesos' value='$pesos'/> $mensajePesos<br/>";
                echo "Dólares        <input type='text' name='dolares' value='$dolares'/> $mensajeDolares<br/></pre>";
            ?>
        </fieldset>
        <input type="submit" value='calcular'/>
        </form>
</body>
</html>
