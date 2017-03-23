<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<?php
    if(!empty($errors)){
        foreach ($errors as $error){
            echo "$error <br>";
        }
    }
?>
    <form action="" method="POST">
        <label for = "username">Nombre:</label>
        <input type="text" name="username" required value="<?= $_POST['username'] ?? ''; ?>">
        <label for = "password">Clave:</label>
        <input type="password" name="password" required>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>