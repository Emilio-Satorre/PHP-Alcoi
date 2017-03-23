<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 1 - Funciones</title>
</head>
<body>
    <?php
    $nombres=['Matew','Gabo','Jaime','Lorenzo','Mateo'];
        function Sorteo($nombres){
        $final = count($nombres);
        $result = rand(0,$final-1);
            foreach($nombres as $key => $value ){
                if($key == $result){
                    echo "$value ha ganado el sorteo";
                    echo "<br>";
                }else{
                    echo "$value ha perdido";
                    echo "<br>";
                };
            };
        };
        Sorteo($nombres);
    ?>
</body>
</html>