<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 4.5</title>
</head>
<body>
<?php
    $open = [
        'l' => [[10.00, 14.00],[16.00, 20.00]],
        'm' => [[10.00, 14.00],[16.00, 20.00]],
        'x' => [[10.00, 14.00],[16.00, 20.00]],
        'j' => [[10.00, 14.00],[16.00, 20.00]],
        'v' => [[10.00, 14.00],[16.00, 20.00]],
        's' => [[10.00, 20.00]],
        'd' => []
    ];

    $day = 'j';
    $time = 11.00;
    $status = "Cerrado";

    foreach ($open[$day] as $openRange){
    if($time>=$openRange[0] && $time<=$openRange[1]){
            $status = "Abierto";
    };
    };
    echo "Esta " .$status;

?>

</body>
</html>