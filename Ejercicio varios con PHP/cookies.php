    <?php
    if(isset($_COOKIE['contador'])){
        $caducidad = time()+60;
        setcookie('contador',$_COOKIE['contador']+1,$caducidad);
        $mensaje = 'Numero de visitas ' .$_COOKIE['contador'];
    }else{
        setcookie('contador',1,$caducidad);
        $mensaje = "Bienvenido a la pagina web";
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba de cookies</title>
</head>
<body>
    <?php
        echo $mensaje;
    ?>
</body>
</html>