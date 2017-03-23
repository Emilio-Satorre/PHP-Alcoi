<?php
    require_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado Pisos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    $stmt=$pdo->prepare('SELECT * FROM piso');
    $stmt->execute();
    $pisos = $stmt->fetchAll();
?>
<h3>Listado de Pisos Disponibles</h3>
<table border="2" cellspacing="0">
    <tr>
        <th>Referencia</th>
        <th>Dirección</th>
        <th>Precio</th>
        <th>Descripción</th>
        <th colspan="3">Acciones</th>
    </tr>
    <?php foreach($pisos as $piso): ?>
    <tr>
        <td><?= $piso['referencia']; ?></td>
        <td><?= $piso['direccion']; ?></td>
        <td><?= $piso['precio']; ?></td>
        <td><?= $piso['descripcion']; ?></td>
        <td><a href="edit.php?id=<?= $piso['id']; ?>">Editar</a></td>
        <td><a href="show.php?id=<?= $piso['id']; ?>">Mostrar</a></td>
        <td><a href="delete.php?id=<?= $piso['id']; ?>">Eliminar</a></td>
    </tr>
    <?php endforeach ?>
</table><br><br>
<form action="new.php" method="POST">
    <input id="boton" type="submit" name="" value="Insertar Piso">
</form>
<br><br>
<?php include "footer.php"; ?>