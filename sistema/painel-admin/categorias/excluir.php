<?php

require_once("../../../conexao.php");

$id = $_POST['id'];

$pdo->query("DELETE from categorias WHERE id = '$id");

echo 'Excluido com Sucesso!!'

?>