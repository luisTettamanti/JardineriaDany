<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="adivinador.php" method="get">
        <fieldset>
            <legend>Adivinador</legend>
            <?php
            if (isset($_GET['secreto'])) {
                $secreto = $_GET['secreto'];
                if (isset($_GET['prueba'])) {
                    if ($_GET['prueba']==$secreto) {
                        $mensaje = 'Acertaste...!';
                    } else {
                        $mensaje = 'Fallaste...!';
                    }
                }
            } else {
                $secreto = '';
                $mensaje = '';
            }
echo "<p>Ingrese un número</p><pre>";
echo "$mensaje</br>";
echo "Número secreto <input type='password' name='secreto' value='$secreto'/><br/>";
echo "        Prueba <input type='text' name='prueba'/><br/>";
            ?>
            </pre>
        </fieldset>
        <br/><input type="submit" value="Jugar"/>
    </form>    
</body>
</html>