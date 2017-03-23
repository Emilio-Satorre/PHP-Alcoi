<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conexion a base de datos</title>
</head>
<body>
<ul>
<?php foreach ($users as $user): ?>
    <li><?= $user['user'] ?></li>
<?php endforeach ?>
</ul>

</body>
</html>