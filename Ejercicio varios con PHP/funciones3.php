<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>convertidor moneda</title>
</head>
<body>
    <?php
        $number_dolar = 20;
        $number_euro = 10;
        if($number_dolar<0){
            echo "Introduce un valor valido de dolares";
            echo "<br>";
        }else{
            echo "el valor de $ " .$number_dolar ." es de: ";
            dolar_to_euro($number_dolar);
            echo "<br>";
        };
        if($number_euro<0){
            echo "Introduce un valor valido de euros";
            echo "<br>";
        }else{
            echo "El valor de " .$number_euro ." € es de: ";
            euro_to_dolar($number_euro);
        };
        function dolar_to_euro($number_dolar){
            $valor = $number_dolar * 0.942320559;
            printf("%.2f €", $valor);
        };
        function euro_to_dolar($number_euro){
            $valor = $number_euro * 1.06121;
            printf("$ %.2f", $valor);
        };

    ?>
</body>
</html>