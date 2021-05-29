<?php

require_once("../../../conexao.php"); 

$id = $_POST['id'];

$pdo->query("UPDATE promo_banners SET ativo = 'Não' WHERE id_promo_banner = '$id'");

echo 'Desativado com Sucesso!!';

?>