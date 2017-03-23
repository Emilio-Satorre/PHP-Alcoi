<?php
include "formulario.php";

try{
    $pdo = new PDO(
        'mysql:host=localhost;dbname=clientes;charset=utf8',
        'root',''
        );
    $stmt = $pdo->prepare('SELECT * from usuarios');
    $stmt -> execute();
    $users = $stmt->fetchAll();
    /*$pdo = null;
    $stmt = null;*/
}catch (PDOException $e){
    print "¡Error!: " .$e->getMessage() ."<br/>";
    die();
}
if(!empty($_POST['user'])){
    formulario($_POST['user']);
}
function formulario($user){
    global $pdo;
    $pdo->exec("INSERT INTO usuarios (user) VALUES ('$user')");
}
include "users_view.php";
?>