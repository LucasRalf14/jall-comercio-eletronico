<?php
require_once("../conexao.php");

//VERIFICAR SE EXISTE ALGUM CADASTRO NO BANCO, SE NÃO TIVER CADASTRA USUARIO ADMINISTRADOR
$res = $pdo->query("SELECT * FROM usuario");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$senha_crip = md5('jall123');

if (@count($dados) == 0) {
    $res = $pdo->query("INSERT into usuario (nome, cpf, email, senha, senha_crip, nivel) 
        values ('Administrador', '000.000.000-01', 'jall@gmail.com', 'jall123', '$senha_crip', 'Admin')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - <?php echo $nome_loja ?> </title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/login.css">

    <link rel="shortcut icon" href="../img/favicone.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicone.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="first">
                    <div class="myform form ">
                        <div class="logo mb-3">
                            <div class="col-md-12 text-center">
                                <h1>Login</h1>
                            </div>
                        </div>
                        <form action="autenticar.php" method="post" name="login">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email ou CPF</label>
                                <input type="text" name="email_login" class="form-control" id="email_login" aria-describedby="emailHelp" placeholder="Insira o seu email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Senha</label>
                                <input type="password" name="senha_login" id="senha_login" class="form-control" aria-describedby="emailHelp" placeholder="Insira a sua senha">
                            </div>

                            <div class="form-group">
                                <p class="text-center">Ao se cadastrar você concorda com os nossos<br /> <a href="#">Termos de Uso</a></p>
                            </div>

                            <div class="col-md-12 text-center ">
                                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                            </div>

                            <div class="form-group mt-4">
                                <p class="text-center">Ainda não possui cadastro? <a href="#" data-toggle="modal" data-target="#modalCadastro">Cadastre-se</a></p>
                                <p class="text-center"><a href="#" class="text-danger" data-toggle="modal" data-target="#modalRecuperar">Recuperar senha</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script src="../js/login.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</html>

<!-- Modal -->
<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira o seu nome completo">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Insira o seu email">
                    </div>

                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Insira o seu cpf">
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Insira a sua senha">
                    </div>

                    <div class="form-group">
                        <label for="conf-senha">Confirmar Senha</label>
                        <input type="password" class="form-control" name="conf-senha" id="conf-senha" placeholder="Insira novamente a sua senha">
                    </div>

                    <small>
                        <div id="div-mensagem"></div>
                    </small>
            </div>

            <div class="modal-footer">
                <button type="button" id="btn-fechar-cadastrar" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" id="btn-cadastrar" class="btn btn-info">Cadastrar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Recuperar -->
<div class="modal fade" id="modalRecuperar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 cl ass="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email-recuperar" id="email-recuperar" placeholder="Insira o seu email">
                    </div>
            </div>

            <small>
                <div id="div-mensagem-rec"></div>
            </small>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" id="btn-recuperar" class="btn btn-primary">Recuperar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- btn-primary cadastrar-->
<script type="text/javascript">
    $('#btn-cadastrar').click(function(event) {
        event.preventDefault();

        $.ajax({
            url: "cadastrar.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(msg) {
                if (msg.trim() === 'Cadastrado com Sucesso!') {
                    $('#div-mensagem').addClass('text-success')
                    $('#div-mensagem').text(msg);
                    $('#btn-fechar-cadastrar').click();
                    $('#email_login').val(document.getElementByID('email').value);
                    $('#senha_login').val(document.getElementByID('senha').value);
                } else {
                    $('#div-mensagem').addClass('text-danger')
                    $('#div-mensagem').text(msg);
                }
            }
        })
    })
</script>

<script type="text/javascript">
    $('#btn-recuperar').click(function(event) {
        event.preventDefault();

        $.ajax({
            url: "recuperar.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(msg) {
                if (msg.trim() === 'Senha Enviada para o Email!') {
                    $('#div-mensagem-rec').addClass('text-success')
                    $('#div-mensagem-rec').text(msg);
                } else if (msg.trim() === 'Preencha o Campo Email!') {
                    $('#div-mensagem-rec').addClass('text-success')
                    $('#div-mensagem-rec').text(msg);
                } else if (msg.trim() === 'Este email não está cadastrado!') {
                    $('#div-mensagem-rec').addClass('text-success')
                    $('#div-mensagem-rec').text(msg);
                } else {
                    $('#div-mensagem-rec').addClass('text-danger')
                    $('#div-mensagem-rec').text('Deu erro ao Enviar o Formulário! Provavelmente seu servidor de hospedagem não está com permissão de envio habilitada ou você está em um servidor local');
                }
            }
        })
    })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="../js/mascara.js"></script>