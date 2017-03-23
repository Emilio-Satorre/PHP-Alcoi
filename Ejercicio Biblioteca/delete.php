<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    $id=$_GET['id'];
    require_once "conexion.php";
    $stmt = $pdo->prepare('DELETE FROM libros WHERE id=:id');
    $stmt->execute([':id'=>$id]);

    echo "Se ha eliminado correctamente la entrada del registro";

?>
<br><br>
<form action="index.php">
    <input type="submit" name="" value="Inicio">
</form>

</body>
</html>