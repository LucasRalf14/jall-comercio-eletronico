<?php 
require_once("../conexao.php");
@session_start();

$id = $_POST['id'];
$quantidade = $_POST['quantidade'];

$pdo->query("UPDATE carrinho SET quantidade = '$quantidade' where id_carrinho = '$id'");

echo "Editado com Sucesso!!";
?>