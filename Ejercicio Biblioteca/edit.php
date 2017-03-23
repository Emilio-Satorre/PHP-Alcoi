<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edicion</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        require_once "conexion.php";
        $id=$_GET['id'];

        if(!empty($_POST)){
            $stmt = $pdo->prepare('UPDATE libros SET titulo=:title,autor=:author,descripcion=:description WHERE id=:id');
            $stmt->execute([':title'=>$_POST['title'],':author'=>$_POST['author'],':description'=>$_POST['description'],':id'=>$id]);
            header('location:index.php');
        }

        $stmt =$pdo->prepare('SELECT * FROM libros WHERE id=:id');
        $stmt->execute([':id'=>$id]);
        $valor=$stmt->fetch();
    ?>
<h3>Insertar Cambios</h3>
<form action="edit.php?id=<?= $id; ?>" method="POST">
<label>Titulo: </label><input type="text" name="title" value="<?= $valor['titulo']; ?>">
<label>Autor: </label><input type="text" name="author" value="<?= $valor['autor']; ?>">
<label>Descripcion: </label><textarea name="description" rows="5" cols="40" value="<?= $valor['descripcion']; ?>"></textarea><br><br>
<input id="boton" type="submit" name="" value="Aplicar"><br><br>
</form>
<form action="index.php">
    <input id="boton" type="submit" value="Inicio">
</form>
</body>
</html>