<?php

require_once("conexao.php");

if($_POST['nome'] == ""){
    echo 'Preencha o Campo Nome';
    exit();
}

if($_POST['email'] == ""){
    echo 'Preencha o Campo Email';
    exit();
}

if($_POST['mensagem'] == ""){
    echo 'Preencha o Campo Mensagem';
    exit();
}

$destinatario = $email;
$assunto = $nome_loja . ' - Email da Loja';

$mensagem = utf8_decode('Nome: '.$_POST['nome']. "\r\n"."\r\n" . 'Mensagem: ' . "\r\n"."\r\n" .$_POST['mensagem']);

$cabecalhos = "from: ".$_POST['email'];

mail($destinatario, $assunto, $mensagem, $cabecalhos);

echo 'Enviado com Sucesso!';

//Enviar para o BD o email e o nome dos campos
$res = $pdo->query("SELECT * FROM email where email = '$_POST[email]'");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
if(@count($dados) == 0){
    $res = $pdo->prepare("INSERT into email (nome, email, ativo) values (:nome, :email, :ativo)");

    $res->bindValue(":nome", $_POST['nome']);
    $res->bindValue(":email", $_POST['email']);
    $res->bindValue(":ativo", "Sim");
    $res->execute();
}

echo $_POST['email'];

?>