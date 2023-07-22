<?php
session_start();
ob_start();

require 'config.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
if($email !== "" and $senha !== ""){




    $sql = $pdo->prepare("SELECT * FROM user WHERE email = :email AND senha = :senha");
    $sql->bindValue(":email",$email);
    $sql->bindValue(":senha",$senha);
    $sql->execute();
    
    if($sql->rowCount() > 0 ){
    
    
        $lista = [];
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($lista as $row){
    
            $id = $row['id'];
    
        }
    
        $_SESSION['id_lock'] = $id;
        // $_SESSION['login'] para aparecer mensagem ao usuário realizar login 
        $_SESSION['login'] = true;
        header("Location: menu.php");
    
        
    
    }else{
    
        $_SESSION['msg'] = "<p style='color: #ff0000' class='alerta'>ERRO: Usuário ou senha inválidos";
        header("Location: index.php");
    
    }


    
}else{

    $_SESSION['msg'] = "<p style='color: #ff0000' class='alerta'>ERRO: Necessário possuir uma conta";
    header("Location: index.php");

}
