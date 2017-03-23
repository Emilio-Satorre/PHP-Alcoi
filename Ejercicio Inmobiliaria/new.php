<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    require_once "conexion.php";
    if(!empty($_POST)){
        insertarPiso($_POST['reference'],$_POST['adress'],$_POST['price'],$_POST['description']);
        header('Location:index.php');
    }
    function insertarPiso($referencia,$direccion,$precio,$descripcion){
        global $pdo;
        $stmt =$pdo->prepare('INSERT INTO piso (referencia,direccion,precio,descripcion) VALUES (:referencia,:direccion,:precio,:descripcion)');
        $stmt->execute([':referencia'=>$referencia,':direccion'=>$direccion,':precio'=>$precio,':descripcion'=>$descripcion]);
    }
?>
<h3>Insertar Piso</h3>
<form action="new.php" method="POST">
    <label>Referencia</label><input type="text" name="reference"><br><br>
    <label>Dirección</label><input type="text" name="adress"><br><br>
    <label>Precio</label><input type="text" name="price"><br><br>
    <label>Descripción</label><textarea rows="5" cols="40" name="description"></textarea><br><br>
    <input id="boton" type="submit" name="" value="Insertar">
</form><br><br>
<form action="index.php" method="POST">
    <input id="boton" type="submit" name="" value="Inicio">
</form>
<br><br>
<?php include "footer.php"; ?>