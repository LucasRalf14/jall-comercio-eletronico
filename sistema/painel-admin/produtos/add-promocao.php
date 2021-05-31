<?php

require_once("../../../conexao.php"); 

$desconto = $_POST['valor-promocao'];
$data_ini = $_POST['data-inicial-promocao'];
$data_fin = $_POST['data-final-promocao'];
$ativo = $_POST['ativo-promocao'];

//$valor = str_replace(',', '.', $valor);


$id_produto = $_POST['id-promocao'];

$res = $pdo->query("SELECT * FROM produtos where id_produtos = '$id_produto' "); 
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$valor = $dados[0]['valor'];
$valor = $valor - ($valor * ($desconto / 100));


if($desconto == ""){
	echo 'Insira um Valor!';
	exit();
}
$res = $pdo->query("SELECT * FROM prod_promocao where id_produto = '$id_produto' "); 
$dados = $res->fetchAll(PDO::FETCH_ASSOC);

if(@count($dados) == 0){
		$pdo->query("INSERT INTO prod_promocao (id_produto, valor, data_inicio, data_final, ativo, desconto) VALUES ('$id_produto', '$valor', '$data_ini', '$data_fin', '$ativo', '$desconto')");
}else{
			$pdo->query("UPDATE prod_promocao SET id_produto = '$id_produto', valor = '$valor', data_inicio = '$data_ini', data_final = '$data_fin', ativo = '$ativo', desconto = '$desconto' where id_produto = '$id_produto'");
}

echo 'Salvo com Sucesso!!';

?>