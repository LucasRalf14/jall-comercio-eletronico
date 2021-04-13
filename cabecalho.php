<?php
require_once("config.php");
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
                <li><a href="./carrinho.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>R$150.00</span></div>
            <div class="header__top__right__auth ml-4">
                <a href="sistema/index.php"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <div class="humberger__menu__widget">

        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Início</a></li>
                <li><a href="./produtos.php">Promoções</a></li>
                <li><a href="./produtos-lista.php">Produtos</a></li>
                <li><a href="./carrinho.php">Carrinho de Compras</a></li>
                <li><a href="./contato.php">Contatos</a></li>
                <!-- <ul class="header__menu__dropdown">
                        <li><a href="./produtos-lista">Lista de Produtos</a></li>
                        
                        <li><a href="./checkout.php">Check Out</a></li>
                    </ul>
                </li> -->
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-whatsapp"></i></a>
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
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                            </div>

                            <div class="header__top__right__auth">
                                <a href="sistema/index.php"><i class="fa fa-user"></i> Login</a>
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
                            <li class="active"><a href="./index.php">Início</a></li>
                            <li><a href="./produtos.php">Promoções</a></li>
                            <li><a href="./produtos-lista.php">Produtos</a></li>
                            <li><a href="./carrinho.php">Compras</a></li>
                            <li><a href="./contato.php">Contatos</a></li>
                            <!-- <li class="active"><a href="./index.php">Início</a></li>
                            <li><a href="#">Categorias</a></li>
                            <li><a href="#">Produtos</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="#">Lista de Produtos</a></li>
                                    <li><a href="#">Carrinho de Compras</a></li>
                                    <li><a href="#">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contatos</a></li> -->
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="./carrinho.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>R$150,00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->