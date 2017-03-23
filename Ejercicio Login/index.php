<?php
    session_start();

    function validateForm(){
        $errors = [];
        if(strlen(trim($_POST['username']))<6){
            $errors[]='El nombre de usuario debe tener, al menos, 6 caracteres.';
        }
        if(strlen(trim($_POST['password']))<6){
            $errors[]='La contraseña debe tener, al menos, 6 caracteres.';
        }
        return $errors;
    }
    function tryLogin($user,$pass){
        $register_username = 'usuario';
        $register_password = '$2y$10$IOJyiUltm2j31kFeUICx1.Vg2pl3L6GNV9x2Ijp8S6J/3mYloUr0a';
        if($user === $register_username && password_verify($pass,$register_password)){
            $_SESSION['username'] = $user;
        }
    }
    if(!empty($_POST)){
        $errors = validateForm();
        if(empty($errors)){
            tryLogin($_POST['username'],$_POST['password']);
        }
    }
    if(!empty($_SESSION['username'])){
        include 'welcome.php';
    }else{
        if(!empty($_POST)){
            $errors[] = 'Nombre de usuario o clave incorrecta';
        }
        include 'form.php';
    }