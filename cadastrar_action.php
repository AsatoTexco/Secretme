<?php
require 'config.php';

session_start();
ob_start();

$email = filter_input(INPUT_POST,'email');
$nome = filter_input(INPUT_POST,'nome');
$senha = filter_input(INPUT_POST,'senha');

if(isset($email)  and isset($senha) and ($nome)){

    $sql = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $sql->bindValue(":email",$email);
    $sql->execute();
    
    if($sql->rowCount() > 0){


        $_SESSION['msg'] = "<p style='color: #ff0000' class='alerta'>ERRO: O E-mail inserido já existe";
        header("Location: cadastrar.php");


    }else{

        $sql = $pdo->prepare("INSERT INTO user(nome,email,senha) VALUES (:nome,:email,:senha)");
        $sql->bindValue(":nome",$nome);
        $sql->bindValue(":email",$email);
        $sql->bindValue(":senha",$senha);
        $sql->execute();

        $_SESSION['msg'] = "<p style='color: #00ff00' class='alerta'>Usuário cadastrado com sucesso";
        
        header("Location: index.php");


    }

}else{

    $_SESSION['msg'] = "<p style='color: #ff0000' class='alerta'>ERRO: Preencha todos os campos";
    header("Location: cadastrar.php");

}