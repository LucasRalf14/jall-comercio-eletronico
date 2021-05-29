<?php

require_once("../../../conexao.php"); 

$valor = $_POST['valor-promocao'];
$data_ini = $_POST['data-inicial-promocao'];
$data_fin = $_POST['data-final-promocao'];
$ativo = $_POST['ativo-promocao'];

$valor = str_replace(',', '.', $valor);

$id_produto = $_POST['id-promocao'];

if($valor == ""){
	echo 'Insira um Valor!';
	exit();
}
	$res = $pdo->query("SELECT * FROM prod_promocao where id_produto = '$id_produto' "); 
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);

	if(@count($dados) == 0){
			$pdo->query("INSERT INTO prod_promocao (id_produto, valor, data_inicio, data_final, ativo) VALUES ('$id_produto', '$valor', '$data_ini', '$data_fin', '$ativo')");
			}else{
				$pdo->query("UPDATE prod_promocao SET id_produto = '$id_produto', valor = '$valor', data_inicio = '$data_ini', data_final = '$data_fin', ativo = '$ativo' where id_produto = '$id_produto'");
			}

echo 'Salvo com Sucesso!!';

?>