<?php
require 'config.php';

$id = filter_input(INPUT_GET,'id');
if($id !== ""){

    $sql = $pdo->prepare("DELETE FROM carteiro WHERE (id_user = :id)");
    $sql->bindValue(":id",$id);
    $sql->execute();

    header("Location: menu.php");

}
