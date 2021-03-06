<?php
require_once("../../../conexao.php");

$titulo = $_POST['titulo-promo'];
$link = $_POST['link-promo'];

$id = $_POST['txtid2'];

if ($titulo == "") {
	echo 'Preencha o Campo de título!';
	exit();
}

//SCRIPT PARA SUBIR FOTO NA PASTA
$nome_img = preg_replace('/[ -]+/', '-', @$_FILES['imagem']['name']); //MODULO 5
$caminho = '../../../img/banner/' . $nome_img;

if (@$_FILES['imagem']['name'] == "") {
	$imagem = "sem-foto.jpg";
} else {
	$imagem = $nome_img;
}

$imagem_temp = @$_FILES['imagem']['tmp_name'];

$ext = pathinfo($imagem, PATHINFO_EXTENSION);

if ($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif') {
	move_uploaded_file($imagem_temp, $caminho);
} else {
	echo 'Extensão de Imagem não permitida!';
	exit();
}

if ($id == "") {
	$res = $pdo->prepare("INSERT INTO promo_banners (titulo, link, imagem, ativo) VALUES (:titulo, :link, :imagem, :ativo)");
	$res->bindValue(":imagem", $imagem);
	$res->bindValue(":ativo", 'Não');
} else {
	if ($imagem == "sem-foto.jpg") {
		$res = $pdo->prepare("UPDATE promo_banners SET titulo = :titulo, link = :link WHERE id_promo_banner = :id");
	} else {
		$res = $pdo->prepare("UPDATE promo_banners SET titulo = :titulo, link = :link, imagem = :imagem WHERE id_promo_banner = :id");
		$res->bindValue(":imagem", $imagem);
	}

	$res->bindValue(":id", $id);
}

$res->bindValue(":titulo", $titulo);
$res->bindValue(":link", $link);

$res->execute();

echo 'Salvo com Sucesso!!';
