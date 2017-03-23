<?php
try{
$pdoMysql = new PDO('mysql: host=localhost;dbname=clientes;charset=UTF8','root','');
}catch (Exception $e){
    die("No se pudo conectar: " .$e->getMessage());
}

$stmt = $pdoMysql->prepare("INSERT INTO usuarios (user) VALUES (:name)");
$stmt->bindValue(':name','David');
$stmt->execute();
$stmt->bindValue(':name','Lorenzo');
$stmt->execute();
$stmt->bindValue(':name','Gabo');
$stmt->execute();
$stmt->bindValue(':name','Mateo');
$stmt->execute();

$users = $pdoMysql->query('SELECT * from usuarios')->fetchAll();
foreach ($users as $user){
     echo $user['user'];
     echo "<hr>";
}
