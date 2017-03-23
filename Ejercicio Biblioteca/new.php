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
    if(!empty($_POST['title']) && !empty($_POST['author'])){
        formulario($_POST['title'],$_POST['author'],$_POST['description']);
        header('Location:index.php');
    }
    function formulario($titulo,$autor,$descripcion){
        global $pdo;
        $stmt =$pdo->prepare('INSERT INTO libros (titulo,autor,descripcion) VALUES (:titulo,:autor,:descripcion)');
        $stmt->execute([':titulo'=>$titulo,':autor'=>$autor,':descripcion'=>$descripcion]);
    }
?>
<h3>Insertar nuevo Libro</h3>
  <form action="new.php" method="POST">
      <label>Titulo:</label><input type="text" name="title"><br><br>
      <label>Autor:</label><input type="text" name="author"><br><br>
      <label>Descripcion:</label><textarea name="description" rows="5" cols="40"></textarea><br><br>
      <input id="boton" type="submit" name="" value="Registrar">
  </form>
  <br><br>
  <form action="index.php">
    <input id="boton" type="submit" name="" value="Inicio">
  </form>
</body>
</html>