<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seleccion</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    $id=$_GET['id'];
    require_once "conexion.php";
    $stmt = $pdo->prepare('SELECT * FROM libros WHERE id=:id');
    $stmt->execute([':id'=>$id]);
    $dato=$stmt->fetch();
?>
<h3>Datos del Libro Seleccionado</h3>
<table border="3" cellspacing="0">
    <tr>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Descripcion</th>
    </tr>
    <tr>
        <td><?= $dato['titulo']; ?></td>
        <td><?= $dato['autor']; ?></td>
        <td><?= $dato['descripcion']; ?></td>
    </tr>
</table>
<br><br>
<form action="index.php">
    <input id="boton" type="submit" name="" value="Inicio">
</form>
</body>
</html>