<?php 
require 'config.php';

$id = filter_input(INPUT_POST, 'id');

if($id){
    
    $sql = $pdo->prepare('DELETE FROM ferramentas WHERE id=:id');
    $sql->bindValue(':id', $id);
    $sql->execute();

    header('Location: tool.php?msg=registro deletado com sucesso');
    exit;
} else {
    header('Location: tool.php');
    exit;
}