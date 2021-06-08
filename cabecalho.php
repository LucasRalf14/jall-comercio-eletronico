<?php
require_once("config.php");
require_once("conexao.php");

//RECUPERANDO A SESSÃO DO USUÁRIO
@session_start();
$id_usuario = @$_SESSION['id_usuario'];

//VERIFICAR TOTAIS DO CARRINHO
$res = $pdo->query("SELECT * from carrinho where id_usuario = '$id_usuario' and id_venda = 0 order by id_carrinho asc");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($dados);

if ($linhas == 0) {
    $linhas = 0;
    $total = 0;
}

$total;

for ($i = 0; $i < count($dados); $i++) {
    foreach ($dados[$i] as $key => $value) {
    }

    //$combo = $dados[$i]['combo']; Não utiliza no nosso projeto
    $id_produto = $dados[$i]['id_produto'];
    $quantidade = $dados[$i]['quantidade'];

    //if ($combo == 'Sim') {
    //$res_p = $pdo->query("SELECT * from combos where id = '$id_produto' ");
    //} else {
    $res_p = $pdo->query("SELECT * from produtos where id_produtos = '$id_produto' ");
    //}
    $dados_p = $res_p->fetchAll(PDO::FETCH_ASSOC);

    // ($combo == 'Sim') { 
    //$promocao = ""; 
    //$pasta = "combos";
    //} else {
    $promocao = $dados_p[0]['promocao'];
    $pasta = "produtos";
    //}

    if ($promocao == 'Sim') {
        $queryp = $pdo->query("SELECT * FROM prod_promocao where id_produto = '$id_produto' ");
        $resp = $queryp->fetchAll(PDO::FETCH_ASSOC);

        $valor = $resp[0]['valor'];
    } else {
        $valor = $dados_p[0]['valor'];
    }

    $total_item = $valor * $quantidade;
    @$total = @$total + $total_item;
}

@$total_c = number_format(@$total, 2, ',', '.');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Projeto de e-commerce para a cadeira de Análise e Desenvolvimento de Sistemas da UniFBV">
    <meta name="keywords" content="Jall, UniFBV, projeto, e-commerce">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="shortcut icon" href="img/favicone.ico" type="image/x-icon">
    <link rel="icon" href="img/favicone.ico" type="image/x-icon">
</head>

<body>
    <!-- Page Preloder
    <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>

    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>

        <div class="humberger__menu__cart">
            <ul>
                <li><a href="carrinho.php"><i class="fa fa-shopping-bag"></i> <span> <?php echo $linhas ?> </span></a></li>
            </ul>

            <div class="header__cart__price">item: <span>R$ <?php echo $total_c ?> </span></div>

            <div class="header__top__right__auth ml-4">
                <?php
                if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Cliente') {
                ?>
                    <a href="sistema"><i class="fa fa-user"></i> Login</a>
                <?php } else { ?>
                    <a href="sistema/painel-cliente"><i class="fa fa-user"></i> Painel</a>
                <?php } ?>
            </div>
        </div>

        <div class="humberger__menu__widget"> </div>

        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Início</a></li>
                <li><a href="./produtosLista.php">Produtos</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./categorias.php">Categorias</a></li>
                        <li><a href="./subcategorias.php">Subcategorias</a></li>
                        <li><a href="./promocao.php">Promoções</a></li>
                        <li><a href="./produtosLista.php">Todos os Produtos</a></li>
                    </ul>
                </li>
                <li><a href="./carrinho.php">Carrinho de Compras</a></li>
                <li><a href="./contato.php">Contatos</a></li>
            </ul>
        </nav>

        <div id="mobile-menu-wrap"></div>

        <div class="header__top__right__social">
            <a target="_blank"><i class="fa fa-facebook"></i></a>
            <a target="_blank"><i class="fa fa-twitter"></i></a>
            <a target="_blank"><i class="fa fa-instagram"></i></a>
            <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>"><i class="fa fa-whatsapp"></i></a>
        </div>

        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> <?php echo $email ?> </li>
                <!-- <li> <?php echo $texto_destaque ?> </li> -->
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin - Desktop -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> <?php echo $email ?> </li>
                                <!-- <li> <?php echo $texto_destaque ?> </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#" target="_blank" title="Ir para o Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="fa fa-whatsapp text-success"></i></a>
                            </div>

                            <div class="header__top__right__auth">
                                <?php
                                if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Cliente') {
                                ?>
                                    <a href="sistema"><i class="fa fa-user"></i>Login</a>
                                <?php } else { ?>
                                    <a target="_blank" href="sistema/painel-cliente"><i class="fa fa-user"></i>Painel</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Início</a></li>
                            <li><a href="produtosLista.php">Produtos</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="categorias.php">Categorias</a></li>
                                    <li><a href="subcategorias.php">Subcategorias</a></li>
                                    <li><a href="promocao.php">Promoções</a></li>
                                    <li><a href="produtosLista.php">Todos os Produtos</a></li>
                                </ul>
                            </li>
                            <li><a href="carrinho.php">Carrinho de Compras</a></li>
                            <li><a href="contato.php">Contatos</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="carrinho.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $linhas ?></span></a></li>
                        </ul>

                        <div class="header__cart__price">item: <span>R$ <?php echo $total_c ?></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->