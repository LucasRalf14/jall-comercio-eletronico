<?php

require_once("../../../conexao.php");

$id = $_POST['id'];

$pdo->query("DELETE FROM envios WHERE id_envio = '$id'");

echo 'Excluído com Sucesso!';

?>