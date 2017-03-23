<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conversion divisas</title>
</head>
<body>
    <?php
        function conversion($number,$from,$to){
            if('EUR' == $from){
                if('USD' == $to){
                    $valor = $number * 1.05735;
                    echo "El numero " .$valor ."€ equivale a: ";
                    printf("$ %.2f",$valor);
                }elseif('GBP' == $to){
                    $valor = $number * 0.848837349;
                    echo "El numero " .$valor ." € equivale a: ";
                    printf("£ %.2f",$valor);
                };
            };
            if('USD' == $from){
                if('EUR' == $to){
                    $valor = $number * 0.945760628;
                    echo "El numero $ " .$valor ." equivale a: ";
                    printf("%.2f €",$valor);
                }elseif('GBP' == $to){
                    $valor = $number * 0.802796945;
                    echo "El numero $ " .$valor ." equivale a: ";
                    printf("£ %.2f",$valor);
                };
            };
            if('GBP' == $from){
                if('EUR' == $to){
                    $valor = $number * 1.178082;
                    echo "El numero £ " .$valor ."  equivale a: ";
                    printf("%.2f €",$valor);
                }elseif('USD' == $to){
                    $valor = $number * 1.245645;
                    echo "El numero £ " .$valor ."  equivale a: ";
                    printf("$ %.2f",$valor);
                };
            };
        };
        conversion(10,'EUR','USD');
    ?>
</body>
</html>