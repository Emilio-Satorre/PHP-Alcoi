<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=biblioteca;charset=UTF8','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(exception $e){
        die("No se pudo conectar: " .$e->getMessage());
    }
?>
