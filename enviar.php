<?php

require_once("config.php");

$destinatario = $email;
$assunto = $nome_loja . ' - Email da Loja';

$mensagem = utf8_decode('Nome: '.$_POST['nome']. "\r\n"."\r\n" . 'Mensagem: ' . "\r\n"."\r\n" .$_POST['mensagem']);

$cabecalhos = "from: ".$_POST['email'];

mail($destinatario, $assunto, $mensagem, $cabecalhos)

echo 'Enviado com Sucesso!';

?>