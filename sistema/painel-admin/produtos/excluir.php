<?php

require_once("../../../conexao.php"); 

$id = $_POST['id'];

$pdo->query("DELETE from produtos WHERE id_produtos = '$id'");

echo 'Excluído com Sucesso!!';

?>