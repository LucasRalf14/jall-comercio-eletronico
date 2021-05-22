<?php

require_once("../../../conexao.php"); 

$id = $_POST['id_foto'];

$pdo->query("DELETE from imagens WHERE id_imagem = '$id'");

echo 'Excluído com Sucesso!!';

?>