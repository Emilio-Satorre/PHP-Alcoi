<?php
    require_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado Libros</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        $stmt = $pdo->prepare('SELECT * FROM libros');
        $stmt->execute();
        $libros = $stmt->fetchAll();
    ?>
<h3>Listado de Libros de la base de datos</h3>
<table border="3" cellspacing="0">
    <tr>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Descripcion</th>
        <th colspan="3">Acciones</th>
    </tr>
    <?php foreach ($libros as $libro): ?>
        <tr>
            <td><?= $libro['titulo'] ?></td>
            <td><?= $libro['autor'] ?></td>
            <td><?= $libro['descripcion'] ?></td>
            <td><a href="edit.php?id=<?=$libro['id']; ?>">Editar</a></td>
            <td><a href="show.php?id=<?=$libro['id']; ?>">Mostrar</a></td>
            <td><a href="delete.php?id=<?=$libro['id']; ?>">Eliminar</a></td>
        </tr>
    <?php endforeach ?>
</table>
<br>
<br>
<form action="new.php">
    <input id="boton" type="submit" name="" value="Insertar">
</form>

</body>
</html>