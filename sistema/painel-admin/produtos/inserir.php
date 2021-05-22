<?php

require_once("../../../conexao.php"); 

$nome = $_POST['nome-cat'];
$id_cat = $_POST['categoria'];
$id_sub_cat = $_POST['sub-categoria'];
$descricao = $_POST['descricao'];
$descricao_longa = $_POST['descricao_longa'];
$valor = $_POST['valor'];
$estoque = $_POST['estoque'];
$tipo_envio = $_POST['tipo_envio'];
$ativo = $_POST['ativo'];
$keyword = $_POST['palavras'];
$peso = $_POST['peso'];
$largura = $_POST['largura'];
$altura = $_POST['altura'];
$comprimento = $_POST['comprimento'];
$valor_frete = $_POST['valor-frete'];

$valor = str_replace(',', '.', $valor);
$valor_frete = str_replace(',', '.', $valor_frete);
$peso = str_replace(',', '.', $peso);
$largura = str_replace(',', '.', $largura);
$altura = str_replace(',', '.', $altura);
$comprimento = str_replace(',', '.', $comprimento);

$nome_novo = strtolower( preg_replace("[^a-zA-Z0-9-]", "-", 
        strtr(utf8_decode(trim($nome)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),
        "aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
$slug = preg_replace('/[ -]+/' , '-' , $nome_novo);

$antigo = $_POST['antigo'];
$id = $_POST['txtid2'];

if ($nome == "") {
	echo 'Preencha o Campo Nome!';
	exit();
}

if ($valor == "") {
	echo 'Preencha o Campo Valor!';
	exit();
}

//SCRIPT PARA SUBIR FOTO NO BANCO
$caminho = '../../../img/produtos/' .@$_FILES['imagem']['name'];

if (@$_FILES['imagem']['name'] == "") {
  $imagem = "sem-foto.jpg";
} else {
  $imagem = @$_FILES['imagem']['name']; 
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
	$res = $pdo->prepare("INSERT INTO produtos (id_categoria, id_sub_cat, imagem, id_envio, nome, slug, descricao, desc_longa, valor, estoque, keyword, ativo, peso, largura, altura, comprimento, val_frete) 
	VALUES (:id_categoria, :id_sub_cat, :imagem, :id_envio, :nome, :slug, :descricao, :desc_longa, :valor, :estoque, :keyword, :ativo, :peso, :largura, :altura, :comprimento, :val_frete)");
	$res->bindValue(":imagem", $imagem);
} else {
	if ($imagem == "sem-foto.jpg") {
        $res = $pdo->prepare("UPDATE produtos SET id_categoria = :id_categoria, id_sub_cat = :id_sub_cat, id_envio = :id_envio, nome = :nome, slug = :slug, descricao = :descricao, desc_longa = :desc_longa, valor = :valor, estoque = :estoque, keyword = :keyword, ativo = :ativo, peso = :peso, largura = :largura, altura = :altura, comprimento = :comprimento, val_frete = :val_frete WHERE id_produtos = :id");
    } else {
        $res = $pdo->prepare("UPDATE produtos SET id_categoria = :id_categoria, id_sub_cat = :id_sub_cat, id_envio = :id_envio, nome = :nome, slug = :slug, descricao = :descricao, desc_longa = :desc_longa, valor = :valor, estoque = :estoque, keyword = :keyword, ativo = :ativo, peso = :peso, largura = :largura, altura = :altura, comprimento = :comprimento, val_frete = :val_frete, imagem = :imagem WHERE id_produtos = :id");
        $res->bindValue(":imagem", $imagem);
    }

	$res->bindValue(":id", $id);
}

$res->bindValue(":id_categoria", $id_cat);
$res->bindValue(":id_sub_cat", $id_sub_cat);
$res->bindValue(":id_envio", $tipo_envio);
$res->bindValue(":nome", $nome);
$res->bindValue(":slug", $slug);
$res->bindValue(":descricao", $descricao);
$res->bindValue(":desc_longa", $descricao_longa);
$res->bindValue(":valor", $valor);
$res->bindValue(":estoque", $estoque);
$res->bindValue(":keyword", $keyword);
$res->bindValue(":ativo", $ativo);
$res->bindValue(":peso", $peso);
$res->bindValue(":largura", $largura);
$res->bindValue(":altura", $altura);
$res->bindValue(":comprimento", $comprimento);
$res->bindValue(":val_frete", $valor_frete);
	
$res->execute();

echo 'Salvo com Sucesso!!';

?>