<?php
require_once("cabecalho.php");
require_once("conexao.php");
?>

<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Departamentos</span>
                    </div>

                    <ul>
                        <?php
                        $query = $pdo->query("SELECT * FROM categorias order by nome asc ");
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);

                        for ($i = 0; $i < count($res); $i++) {
                            foreach ($res[$i] as $key => $value) {
                            }

                            $nome = $res[$i]['nome'];
                            $nome_url = $res[$i]['slug'];
                        ?>

                            <li> <a href="sub-categoria-de-<?php echo $nome_url ?>"> <?php echo $nome ?> </a> </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="produtosLista.php" method="GET">
                            <input type="text" name="txtBuscar" id="txtBuscar" placeholder="O que está procurando?">
                            <button type="submit" class="site-btn">BUSCAR</button>
                        </form>
                    </div>

                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <a href="" class="text-success">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </div>

                        <div class="hero__search__phone__text">
                            <h5> <?php echo $whatsapp ?> </h5>
                            <span>Nosso WhatsApp</span>
                        </div>
                    </div>
                </div>

                <div class="hero__item set-bg" data-setbg="img/banner-principal/banner_geforce.png">
                    <div class="hero__text">
                        <span> Placa de Vídeo ASUS </span>
                        <h2>GeForce RTX 3070 OC <br /></h2>
                        <p>NVIDIA Ampere Streaming Multiprocessors: Base de <br />
                            construção para a GPU mais rápida e eficiente do mundo, <br />
                            o totalmente novo Ampere SM traz duas vezes a<br />
                            taxa de transferência FP32 e maior eficiência de energia.</p>
                        <a href="#" class="primary-btn">COMPRAR AGORA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php
                $query = $pdo->query("SELECT * FROM categorias order by nome asc ");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                $total_categorias = @count($res);

                for ($i = 0; $i < count($res); $i++) {
                    foreach ($res[$i] as $key => $value) {
                    }

                    $nome = $res[$i]['nome'];
                    $nome_url = $res[$i]['slug'];
                    $imagem = $res[$i]['imagem'];
                    $id_categoria = $res[$i]['id_categorias'];

                    //VERIFICA SE A CATEGORIA POSSUI ALGUM PRODUTO ATRELADO A MESMA
                    $queryP = $pdo->query("SELECT * FROM produtos where id_categoria = '$id_categoria' ");
                    $resP = $queryP->fetchAll(PDO::FETCH_ASSOC);
                    $totalP = @count($resP);
                ?>

                    <?php if ($totalP != 0) { //EXIBE A CATEGORIA SE FOR ENCONTRADO ALGUM PRODUTO ATRELADO A MESMA
                    ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categorias/<?php echo $imagem ?>">
                                <h5><a href="sub-categoria-de-<?php echo $nome_url ?>"> <?php echo $nome ?> </a></h5>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Produtos em Destaque</h2>
                </div>

                <div class="featured__controls">
                    <ul>
                        <?php
                        $query = $pdo->query("SELECT * FROM sub_categorias order by id_sub_cat limit 5");
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);

                        for ($i = 0; $i < count($res); $i++) {
                            foreach ($res[$i] as $key => $value) {
                            }

                            $nome = $res[$i]['nome'];
                            $nome_url = $res[$i]['slug'];
                        ?>

                            <li> <a class="text-dark" href="produtos-<?php echo $nome_url ?>"> <?php echo $nome ?> <a> </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row featured__filter">
            <?php
            $query = $pdo->query("SELECT * FROM produtos order by vendas desc limit 8");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }

                $nome = $res[$i]['nome'];
                $valor = $res[$i]['valor'];
                $nome_url = $res[$i]['slug'];
                $imagem = $res[$i]['imagem'];
                $promocao = $res[$i]['promocao'];
                $id = $res[$i]['id_produtos'];
                $valor = number_format($valor, 2, ',', '.');

                if ($promocao == 'Sim') {
                    $queryp = $pdo->query("SELECT * FROM prod_promocao where id_produto = '$id' ");
                    $resp = $queryp->fetchAll(PDO::FETCH_ASSOC);
                    $valor_promo = $resp[0]['valor'];
                    $desconto = $resp[0]['desconto'];
                    $valor_promo = number_format($valor_promo, 2, ',', '.');
            ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 mix hardware">
                        <div class="product__discount__item">
                            <div class="product__discount__item__pic set-bg" data-setbg="img/produtos/<?php echo $imagem ?>">
                                <div class="product__discount__percent"><?php echo $desconto ?>%</div>
                                <ul class="product__item__pic__hover">
                                    <li><a href="produto-<?php echo $nome_url ?>"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="" onclick="carrinhoModal('<?php echo $id ?>','Não')"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>

                            <div class="product__discount__item__text">
                                <h5><a href="produto-<?php echo $nome_url ?>"><?php echo $nome ?></a></h5>
                                <div class="product__item__price">R$ <?php echo $valor_promo ?><span>R$ <?php echo $valor ?></span></div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix hardware">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/produtos/<?php echo $imagem ?>">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="produto-<?php echo $nome_url ?>"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="" onclick="carrinhoModal('<?php echo $id ?>','Não')"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>

                            <div class="featured__item__text">
                                <a href="produto-<?php echo $nome_url ?>">
                                    <h6><?php echo $nome ?></h6>
                                    <h5>R$ <?php echo $valor ?></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <?php
            $query = $pdo->query("SELECT * FROM promo_banners where ativo = 'Sim' order by id_promo_banner desc limit 2");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }

                $titulo = $res[$i]['titulo'];
                $link = $res[$i]['link'];
                $imagem = $res[$i]['imagem'];
            ?>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <a href="<?php echo $link ?>" title="<?php echo $titulo ?>"> <img src="img/banner-secundario/<?php echo $imagem ?>" alt="<?php echo $titulo ?>"> </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section BEgin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Produtos Recentes</h2>
                </div>
            </div>
        </div>

        <section class="categories">
            <div class="container">
                <div class="row">
                    <div class="categories__slider owl-carousel">
                        <?php
                        $query = $pdo->query("SELECT * FROM produtos order by id_produtos desc limit 8");
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);

                        for ($i = 0; $i < count($res); $i++) {
                            foreach ($res[$i] as $key => $value) {
                            }

                            $nome = $res[$i]['nome'];
                            $valor = $res[$i]['valor'];
                            $nome_url = $res[$i]['slug'];
                            $imagem = $res[$i]['imagem'];
                            $promocao = $res[$i]['promocao'];
                            $id = $res[$i]['id_produtos'];
                            $id_categoria = $res[$i]['id_categoria'];
                            $valor = number_format($valor, 2, ',', '.');

                            $query2 = $pdo->query("SELECT * FROM categorias where id_categorias = '$id_categoria' ");
                            $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);

                            $nome_cat = $res2[0]['nome'];

                            if ($promocao == 'Sim') {
                                $queryp = $pdo->query("SELECT * FROM prod_promocao where id_produto = '$id' ");
                                $resp = $queryp->fetchAll(PDO::FETCH_ASSOC);
                                $valor_promo = $resp[0]['valor'];
                                $valor_promo = number_format($valor, 2, ',', '.');
                        ?>

                                <div class="col-lg-3 col-md-4 col-sm-6 mix hardware">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg" data-setbg="img/produtos/<?php echo $imagem ?>">
                                            <div class="product__discount__percent"><?php echo $desconto ?>%</div>

                                            <ul class="product__item__pic__hover">
                                                <li><a href="produto-<?php echo $nome_url ?>"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="" onclick="carrinhoModal('<?php echo $id ?>','Não')"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="product__discount__item__text">
                                            <span> <?php echo $nome_cat ?> </span>
                                            <h5><a href="produto-<?php echo $nome_url ?>"><?php echo $nome ?></a></h5>
                                            <div class="product__item__price">R$ <?php echo $valor_promo ?><span>R$ <?php echo $valor ?></span></div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                <?php } else { ?>
                    <div class="col-lg-3">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/produtos/<?php echo $imagem ?>">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="produto-<?php echo $nome_url ?>"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="" onclick="carrinhoModal('<?php echo $id ?>','Não')"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>

                            <div class="featured__item__text">
                                <a href="produto-<?php echo $nome_url ?>">
                                    <h5><?php echo $nome ?></h5>
                                    <h6>R$ <?php echo $valor ?></h6>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
                </div>
            </div>
        </section>
    </div>
</section>
<!-- Latest Product Section End -->

<?php
require_once("rodape.php");
?>

</body>

</html>