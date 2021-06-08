<?php 
require_once("../conexao.php");
@session_start();

$id_produto = $_POST['idproduto'];
$id_cliente = @$_SESSION['id_usuario'];

$pdo->query("INSERT INTO carrinho(id_usuario, id_produto, quantidade, id_venda, data) values ('$id_cliente', '$id_produto', '1', '0', curDate())");

echo 'Cadastrado com Sucesso!!';

 ?>