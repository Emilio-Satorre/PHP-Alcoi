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
    $stmt = $pdo->prepare('DELETE FROM piso WHERE id=:id');
    $stmt->execute([':id'=>$id]);

    echo "La entrada se ha eliminado correctamente";

?>
<br><br>
<form action="index.php" method="POST">
    <input id="boton" type="submit" name="" value="Inicio">
</form>
<br><br>
<?php include "footer.php"; ?>
