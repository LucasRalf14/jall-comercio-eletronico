<?php

require_once("../../conexao.php");

$nome = $_POST['nome-usuario'];
$cpf = $_POST['cpf-usuario'];
$email = $_POST['email-usuario'];
$senha = $_POST['senha'];
$senha_crip = md5($_POST['senha']);

$antigo = $_POST['antigo'];
$id_user = $_POST['txtid'];

if($nome == ""){
    echo 'Preencha o Campo Nome!';
    exit();
}
if($cpf == ""){
    echo 'Preencha o Campo CPF!';
    exit();
}
if($email == ""){
    echo 'Preencha o Campo Email!';
    exit();
}

if($senha != $_POST['conf-senha']){
    echo 'Senhas são diferentes!';
    exit();
}

if($cpf != $antigo){
    $res = $pdo->query("SELECT * FROM usuario where cpf = '$cpf'");
    $dados = $res->fetchAll(PDO::FETCH_ASSOC);
    if(@count($dados) > 0){
        echo ' CPF já cadastrado no banco de dados';
        exit();
    }

}

$res = $pdo->prepare("UPDATE usuario SET nome = :nome, cpf = :cpf, email = :email, senha = :senha, senha_crip = :senha_crip WHERE id_usuario = :id");
    $res->bindValue(":nome", $nome);
    $res->bindValue(":email", $email);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":senha", $senha);
    $res->bindValue(":senha_crip", $senha_crip);
    $res->bindValue(":id", $id_user);

    $res->execute();

    echo 'Salvo com Sucesso!';
?>