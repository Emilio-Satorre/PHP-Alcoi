<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Informacion</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    $id=$_GET['id'];
    require_once "conexion.php";
    $stmt = $pdo->prepare('SELECT * FROM piso WHERE id=:id');
    $stmt->execute([':id'=>$id]);
    $piso=$stmt->fetch();
?>
<h3>Informacion del Inmueble</h3>
<table border="2" cellspacing="0">
    <tr>
        <th>Referencia</th>
        <th>Dirección</th>
        <th>Precio</th>
        <th>Descripción</th>
    </tr>
    <tr>
        <td><?= $piso['referencia']; ?></td>
        <td><?= $piso['direccion']; ?></td>
        <td><?= $piso['precio']; ?></td>
        <td><?= $piso['descripcion']; ?></td>
</table>
<br><br>
<form action="index.php" method="POST">
    <input id="boton" type="submit" name="" value="Inicio">
</form>
<br><br>
<?php include "footer.php"; ?>