<?php

require_once("../../../conexao.php");

$id = $_POST['id'];

$pdo->query("DELETE FROM sub_categorias WHERE id_sub_cat = '$id'");

echo 'Excluído com Sucesso!';

?>