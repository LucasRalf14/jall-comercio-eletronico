<?php

require_once("../../../conexao.php"); 

$tipo = $_POST['tipo-envio'];
$antigo = $_POST['antigo'];
$id = $_POST['txtid2'];

if ($tipo == "") {
	echo 'Preencha o Campo Nome!';
	exit();
}

//VERIFICA SE A CATEGORIA JÁ ESTÁ CADASTRADA
if ($tipo != $antigo) {
	$res = $pdo->query("SELECT * FROM envios where tipo = '$tipo'"); 
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);

	if (@count($dados) > 0) {
			echo 'Tipo já Cadastrado no Banco!';
			exit();
		}
}

//ENVIANDO OS DADOS PARA O BANCO DE DADOS
if ($id == "") {
    $res = $pdo->prepare("INSERT INTO envios (tipo) VALUES (:tipo)");
} else {
    $res = $pdo->prepare("UPDATE envios SET nome = :nome WHERE id_envio = :id");
    $res->bindValue(":id", $id);
}

$res->bindValue(":tipo", $tipo);
$res->execute();

echo 'Salvo com Sucesso!!';
