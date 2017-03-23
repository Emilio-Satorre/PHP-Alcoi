<?php
$pdo = new PDO('mysql: host=localhost;dbname=clientes;charset=UTF8','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
$pdo->beginTransaction();

$pdo->exec("insert into usuarios (user)
values ('Jorge')");
$pdo->exec("insert into usuarios (user)
values ('Manolo')");
$pdo->commit();

} catch (Exception $e) {
 $pdo->rollBack();
 echo "Ocurrió un fallo: " . $e->getMessage();
}
$users = $pdo->query('SELECT * from usuarios')->fetchAll();
foreach ($users as $user){
     echo $user['user'];
     echo "<hr>";
}