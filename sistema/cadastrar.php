<?php

require_once("../conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);

if($nome == ""){
    echo 'Preencha o Campo nome!';
    exit();
}
if($cpf == ""){
    echo 'Preencha o Campo cpf!';
    exit();
}
if($email == ""){
    echo 'Preencha o Campo email!';
    exit();
}
if($senha == ""){
    echo 'Preencha o Campo senha!';
    exit();
}
if($senha != $_POST['conf-senha']){
    echo 'Senhas são diferentes!';
    exit();
}

//Enviar para o BD o cadastro do cliente
$res = $pdo->query("SELECT * FROM usuario where cpf = '$_POST[cpf]'");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);

/*if(@count($dados) == 0){
    $res = $pdo->prepare("INSERT into usuario (nome, cpf, email, senha, senha_crip, nivel) 
    values (:nome, :cpf, :email, :senha, :senha_crip, :nivel)");
    $res->bindValue(":nome", $nome);
    $res->bindValue(":email", $email);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":senha", $senha);
    $res->bindValue(":senha_crip", $senha_crip);
    $res->bindValue(":nivel", 'Cliente');
    
    $res->execute();

    $res = $pdo->prepare("INSERT into usuario (nome, cpf, email) values (:nome, :cpf, :email)");
    $res->bindValue(":nome", $nome);
    $res->bindValue(":email", $email);
    $res->bindValue(":cpf", $cpf);

    $res->execute();

    $res = $pdo->query("SELECT * FROM email where email = '$_POST[email]'");
    $dados = $res->fetchAll(PDO::FETCH_ASSOC);

    if(@count($dados) == 0){
    $res = $pdo->prepare("INSERT into email (nome, email, ativo) values (:nome, :email, :ativo)");

    $res->bindValue(":nome", $nome);
    $res->bindValue(":email", $email);
    $res->bindValue(":ativo", "Sim");
    $res->execute();
}

    echo 'Cadastrado com Sucesso!';
}else {
    echo 'CPF já Cadastrado!';
}*/

//ENVIANDO OS DADOS DA MODAL CADASTRO PARA A TABELA USUARIO
/* Utiliza o prepare para aumentar a segurança e evitar SQL Injection*/
$result = $pdo->query("SELECT * FROM usuario where cpf = '$_POST[cpf]'");
$dados = $result->fetchAll(PDO::FETCH_ASSOC);

if (@count($dados) == 0) {
    $res = $pdo->prepare("INSERT into usuario (nome, cpf, email, senha, senha_crip, nivel) values (:nome, :cpf, :email, :senha, :senha_crip, :nivel)");
    $res->bindValue(":nome", $nome);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":email", $email);
    $res->bindValue(":senha", $senha);
    $res->bindValue(":senha_crip", $senha_crip);
    $res->bindValue(":nivel", 'Cliente');
    $res->execute();

    echo 'Cadastrado com Sucesso!';
} else {
    echo 'CPF já cadastrado!';
}

//ENVIANDO OS DADOS DA MODAL CADASTRO PARA A TABELA EMAIL
$res = $pdo->query("SELECT * FROM email where email = '$_POST[email]'");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);

if (@count($dados) == 0) {
    $res = $pdo->prepare("INSERT into email (nome, email, ativo) values (:nome, :email, :ativo)");
    $res->bindValue(":nome", $_POST['nome']);
    $res->bindValue(":email", $_POST['email']);
    $res->bindValue(":ativo", "Sim");
    $res->execute();
}

?>