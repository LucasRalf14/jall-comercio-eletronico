<?php

require_once("../../conexao.php");

$nome = $_POST['nome_admin'];
$cpf = $_POST['cpf_admin'];
$email = $_POST['email_admin'];
$senha = $_POST['senha_admin'];
$senha_crip = md5($_POST['senha_admin']);

$antigo = $_POST['antigo'];
$id_admin = $_POST['txtid'];

if ($nome == "") {
    echo 'Preencha o campo Nome';
    exit();
}

if ($cpf == "") {
    echo 'Preencha o campo CPF';
    exit();
}

if ($email == "") {
    echo 'Preencha o campo Email';
    exit();
}

if ($senha == "") {
    echo 'Preencha o campo Senha';
    exit();
}

if ($senha != $_POST['senha_admin']) {
    echo 'As senhas não coincidem!';
    exit();
}

if ($cpf != $antigo) {
    $result = $pdo->query("SELECT * FROM usuario where cpf  = '$cpf'");
    $dados = $result->fetchAll(PDO::FETCH_ASSOC);

    if (count($dados) > 0) {
        echo 'CPF já cadastrado no sistema!';
        exit();
    }
}

$result = $pdo->prepare("UPDATE usuario SET nome = :nome, cpf = :cpf, email = :email, senha = :senha, senha_crip = :senha_crip WHERE id_usuario = :id");
$result->bindValue(":nome", $_POST['nome_admin']);
$result->bindValue(":cpf", $_POST['cpf_admin']);
$result->bindValue(":email", $_POST['email_admin']);
$result->bindValue(":senha", $_POST['senha_admin']);
$result->bindValue(":senha_crip", $senha_crip);
$result->bindValue(":id", $id_admin);

$result->execute();

echo 'Salvo com Sucesso!';
