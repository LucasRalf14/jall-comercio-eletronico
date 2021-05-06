<?php
    require_once("../conexao.php");
    @session_start();

    $email = $_POST['email-recuperar'];

    if($email == ""){
        echo 'Preencha o campo email!';
        exit();
    }

    $res = $pdo->query("SELECT * FROM usuario where email = '$email' ");
    $dados = $res->fetchAll(PDO::FETCH_ASSOC);

    if(@count($dados) > 0){
        $dados = $dados[0]['senha'];
       
        //ENVIAR O EMAIL COM A SENHA
        $destinatario = $email;
        $assunto = $nome_loja . ' - Recuparação de senha';
        $mensagem = utf8_decode('Sua senha é:' .$senha);
        $cabecalhos = "From: ".$email;
        mail($destinatario, $assunto, $mensagem, $cabecalhos);

        echo 'Senha Enviada para o Email!';
    }else{
        echo 'Este email não está cadastrado!';
    }
?>