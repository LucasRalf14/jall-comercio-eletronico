<?php

require_once("../../../conexao.php"); 

$id = $_POST['id'];

$query = $pdo->query("SELECT * FROM promo_banners where ativo = 'Sim' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if(@count($res) >= 2){
	echo 'Você não pode Ter mais que duas Promoções Ativas!!';
	exit();
}

$pdo->query("UPDATE promo_banners SET ativo = 'Sim' WHERE id_promo_banner = '$id'");

echo 'Ativado com Sucesso!!';

?>