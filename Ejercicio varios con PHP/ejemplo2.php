<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 4.1</title>
</head>
<body>
    <?php
    $open = ['from' => 10.00, 'to' => 20.00];

    $t = 21.00;

    if($open['from'] <= $t && $t < $open['to']){
        echo "Abierto";
    }else{
        echo "Cerrado";
    };
    ?>
</body>
</html>