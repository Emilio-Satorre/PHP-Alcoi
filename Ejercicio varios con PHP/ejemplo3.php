<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 4.2</title>
</head>
<body>
    <?php
        $numero_multiplicar = 7;
        $numero_inicial = 1;
        $numero_final= 10;

        for($i = $numero_inicial;$i <=$numero_final;$i++){
            echo $numero_multiplicar ."*" .$i ."=" .$numero_multiplicar * $i;
            echo "<br>";
        };
    ?>
</body>
</html>