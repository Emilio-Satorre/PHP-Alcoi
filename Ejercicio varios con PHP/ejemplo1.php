<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>caso 3.1</title>
</head>
<body>
    <?php
        $people=[
            ['name' => 'Juan', 'age' => 14],
            ['name' => 'Paco', 'age' => 16]
        ];

        $edad1 = $people[0]['age'];
        $edad2 = $people[1]['age'];

        $compara = $edad1 <=> $edad2;

        switch ($compara){
        case "-1":
            $dif = $edad2 - $edad1;
            echo "La diferencia es $dif. La edad de Paco es mayor";
            break;
        case "0":
            echo "Juan y Paco, tienen la misma edad";
            break;
        case "1":
            $dif = $edad1 - $edad2;
            echo "La diferencia es $dif. La edad de Juan es mayor";
            break;
        };
    ?>
</body>
</html>