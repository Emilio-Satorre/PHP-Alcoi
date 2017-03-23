<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>funciones - ejemplo 2</title>
</head>
<body>
    <?php
        function IsPrime($number){
            $cont=0;
            if($number < 3){
                return true;
            }
            if($number%2==0){
                $cont++;
                return false;
            }
            for ($i=3; $i < sqrt($number) ; $i+=2) {
                $cont++;
                if($number % $i == 0){
                    echo $cont ." ";
                    return false;
                }
                return true;
            };
        };
        function TellIfPrime($number){
            if (IsPrime($number) == true){
                echo "El numero " .$number ." es Primo";
            }else{
                echo "El numero " .$number ." no es Primo";
            };
            echo "<br>";
        };
        TellIfPrime(25);
    ?>
</body>
</html>