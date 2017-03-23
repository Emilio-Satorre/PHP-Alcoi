<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cancion tonta</title>
</head>
<body>
<?php
    $bot_ini=99;
    for($bottle=$bot_ini;$bottle>=2;$bottle--){
    echo $bottle ."botellas de cerveza en la pared,";
    echo "<br>";
    echo $bottle ."botellas de cerveza.";
    echo "<br>";
    echo "Coge una y pásala,";
    echo "<br>";
    echo $bottle-1 ."botellas de cerveza en la pared.";
    echo "<br>";
    echo "<br>";
};
    echo "1 botella de cerveza en la pared,";
    echo "<br>";
    echo "1 botella de cerveza.";
    echo "<br>";
    echo "Coge una y pásala,";
    echo "<br>";
    echo "0 botellas de cerveza en la pared.";
    echo "<br>";
    echo "<br>";

    echo "No quedan botellas de cerveza en la pared.";
    echo "<br>";
    echo "No quedan botellas de cerveza.";
    echo "<br>";
    echo "Ir a la tienda y comprar alguna más....";
    echo "<br>";
    echo $bot_ini ." botellas de cerveza.";
    echo "<br>";
?>
</body>
</html>