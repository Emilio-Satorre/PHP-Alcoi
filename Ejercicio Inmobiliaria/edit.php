<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Piso</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    require_once "conexion.php";
    $id=$_GET['id'];
        if(!empty($_POST)){
            $stmt = $pdo->prepare('UPDATE piso SET referencia=:referencia,direccion=:direccion,precio=:precio,descripcion=:descripcion WHERE id=:id');
            $stmt->execute([':referencia'=>$_POST['reference'],':direccion'=>$_POST['adress'],':precio'=>$_POST['price'],':descripcion'=>$_POST['description'],':id'=>$id]);
            header('location:index.php');
        }

    $stmt = $pdo->prepare('SELECT * FROM piso WHERE id=:id');
    $stmt->execute([':id'=>$id]);
    $piso=$stmt->fetch();
?>
<h3>Editar Piso</h3>
<form action="edit.php?id=<?= $id; ?>" method="POST">
<label>Referencia</label><input type="text" name="reference" value="<?= $piso['referencia']; ?>"><br><br>
<label>Dirección</label><input type="text" name="adress" value="<?= $piso['direccion']; ?>"><br><br>
<label>Precio</label><input type="text" name="price" value="<?= $piso['precio']; ?>"><br><br>
<label>Descripcion</label><textarea rows="5" cols="40" name="description"><?= $piso['descripcion']; ?></textarea><br><br>
<input id="boton" type="submit" name="" value="Aplicar cambios"><br><br>
</form><br><br>
<form action="index.php" method="POST">
    <input id="boton" type="submit" name="" value="Inicio">
</form>
<br><br>
<?php include "footer.php"; ?>