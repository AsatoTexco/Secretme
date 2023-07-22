<?php
require "config.php";

session_start();
ob_start();

$nome = $_POST['nome'];
$id = $_GET['id'];
$desc = $_POST['descricao'];

if($nome !== "" and $id !== "" and $desc !== ""){


    $sql = $pdo->prepare("INSERT INTO carteiro(nome,mensagem,id_user) VALUES(:nome,:msg,:id)");
    $sql->bindValue(":nome",$nome);
    $sql->bindValue(":msg",$desc);
    $sql->bindValue(":id",$id);
    $sql->execute();


    $retorna = ['status' => true, 'msg' => 'Mensagem enviada com sucesso!'];

    // header("Location: menu.php");

}else{

    $retorna = ['status' => false, 'msg' => 'Erro ao enviar sua mensagem'];

}

echo json_encode($retorna);