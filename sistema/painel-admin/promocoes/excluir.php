<?php

require_once("../../../conexao.php");

$id = $_POST['id'];

$pdo->query("DELETE from promo_banners WHERE id_promo_banner = '$id'");

echo 'Excluido com Sucesso!!';

?>