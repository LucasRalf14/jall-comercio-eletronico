<?php
require_once("cabecalho.php");
?>

<?php
require_once("cabecalho-busca.php");
?>

<?php
//PEGAR PAGINA ATUAL PARA PAGINAÇAO
if (@$_GET['pagina'] != null) {
    $pag = $_GET['pagina'];
} else {
    $pag = 0;
}

$limite = $pag * @$promo_por_pagina;
$pagina = $pag;
$nome_pag = 'promocao.php';
?>

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Subcategorias</h4>
                        <ul>
                            <?php
                            $query = $pdo->query("SELECT * FROM sub_categorias order by nome asc ");
                            $res = $query->fetchAll(PDO::FETCH_ASSOC);

                            for ($i = 0; $i < count($res); $i++) {
                                foreach ($res[$i] as $key => $value) {
                                }

                                $nome = $res[$i]['nome'];
                                $nome_url = $res[$i]['slug'];
                            ?>
                                <li><a href="produtos-<?php echo $nome_url ?>"><?php echo $nome ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="sidebar__item">
                        <div class="latest-product__text">
                            <h4>Prod Recentes</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <?php
                                    $query = $pdo->query("SELECT * FROM produtos order by id_produtos desc limit 3");
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

                                        if ($promocao == 'Sim') {
                                            $queryp = $pdo->query("SELECT * FROM prod_promocao where id_produto = '$id' ");
                                            $resp = $queryp->fetchAll(PDO::FETCH_ASSOC);
                                            $valor = $resp[0]['valor'];
                                            $valor = number_format($valor, 2, ',', '.');
                                        } else {
                                            $valor = number_format($valor, 2, ',', '.');
                                        }
                                    ?>

                                        <a href="produto-<?php echo $nome_url ?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/produtos/<?php echo $imagem ?>" alt="">
                                            </div>

                                            <div class="latest-product__item__text">
                                                <h6><?php echo $nome ?></h6>
                                                <span>R$ <?php echo $valor ?></span>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>

                                <div class="latest-prdouct__slider__item">
                                    <?php
                                    $query = $pdo->query("SELECT * FROM produtos order by id_produtos desc limit 3,3 ");
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

                                        if ($promocao == 'Sim') {
                                            $queryp = $pdo->query("SELECT * FROM prod_promocao where id_produto = '$id' ");
                                            $resp = $queryp->fetchAll(PDO::FETCH_ASSOC);
                                            $valor = $resp[0]['valor'];
                                            $valor = number_format($valor, 2, ',', '.');
                                        } else {
                                            $valor = number_format($valor, 2, ',', '.');
                                        }
                                    ?>

                                        <a href="produto-<?php echo $nome_url ?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/produtos/<?php echo $imagem ?>" alt="">
                                            </div>

                                            <div class="latest-product__item__text">
                                                <h6><?php echo $nome ?></h6>
                                                <span>R$ <?php echo $valor ?></span>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>

                                <div class="latest-prdouct__slider__item">
                                    <?php
                                    $query = $pdo->query("SELECT * FROM produtos order by id_produtos desc limit 6,3 ");
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

                                        if ($promocao == 'Sim') {
                                            $queryp = $pdo->query("SELECT * FROM prod_promocao where id_produto = '$id' ");
                                            $resp = $queryp->fetchAll(PDO::FETCH_ASSOC);
                                            $valor = $resp[0]['valor'];
                                            $valor = number_format($valor, 2, ',', '.');
                                        } else {
                                            $valor = number_format($valor, 2, ',', '.');
                                        }
                                    ?>

                                        <a href="produto-<?php echo $nome_url ?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/produtos/<?php echo $imagem ?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?php echo $nome ?></h6>
                                                <span>R$ <?php echo $valor ?></span>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-7">
                <div class="section-title product__discount__title">
                    <h2>Produtos em Promoção</h2>
                </div>

                <div class="row mt-4">
                    <?php
                    $query = $pdo->query("SELECT * FROM produtos WHERE promocao = 'Sim' order by id_produtos desc LIMIT $limite, $promo_por_pagina");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);
                    $num_promos = @count($res);

                    echo $num_promos . " Produto(s) Encontrado(s)!";

                    echo '<div class="row mt-4">';

                    for ($i = 0; $i < count($res); $i++) {
                        foreach ($res[$i] as $key => $value) {
                        }

                        $nome = $res[$i]['nome'];
                        $imagem = $res[$i]['imagem'];
                        $nome_url = $res[$i]['slug'];
                        $id = $res[$i]['id_produtos'];
                        $id_categoria = $res[$i]['id_categoria'];
                        $valor = $res[$i]['valor'];
                        $valor = number_format($valor, 2, ',', '.');
                    ?>

                        <?php
                        $queryP = $pdo->query("SELECT * FROM prod_promocao WHERE id_produto = '$id'");
                        $resP = $queryP->fetchAll(PDO::FETCH_ASSOC);

                        $valor_promo = $resP[0]['valor'];
                        $desconto = $resP[0]['desconto'];
                        $valor_promo = number_format($valor_promo, 2, ',', '.');
                        ?>

                        <?php
                        $query2 = $pdo->query("SELECT * FROM categorias WHERE id_categorias = '$id_categoria'");
                        $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);

                        $nome_cat = $res2[0]['nome'];
                        ?>

                        <div class="col-lg-4 col-md-6 col-sm-6 mt-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg" data-setbg="img/produtos/<?php echo $imagem ?>">
                                    <div class="product__discount__percent"><?php echo $desconto ?>%</div>
                                    
                                    <ul class="product__item__pic__hover">
                                        <li><a href="produto-<?php echo $nome_url ?>"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="" onclick="carrinhoModal('<?php echo $id ?>, Não')"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>

                                <div class="product__discount__item__text">
                                    <span> <?php echo $nome_cat ?> </span>
                                    
                                    <h5><a href="produto-<?php echo $nome_url ?>"><?php echo $nome ?></a></h5>
                                    
                                    <div class="product__item__price">R$ <?php echo $valor_promo ?><span>R$ <?php echo $valor ?></span></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <?php
                //BUSCAR O TOTAL DE REGISTROS PARA PAGINAR
                $query3 = $pdo->query("SELECT * FROM produtos WHERE promocao = 'Sim'");
                $res3 = $query3->fetchAll(PDO::FETCH_ASSOC);
                $num_total = @count($res3);
                $num_paginas = ceil($num_total / $promo_por_pagina);
                ?>

                <?php if ($num_total != 0) { ?>
                    <div class="product__pagination">
                        <a href="<?php echo $nome_pag ?>?pagina=0"><i class="fa fa-long-arrow-left"></i></a>

                        <?php
                        for ($i = 0; $i < @$num_paginas; $i++) {
                            $estilo = '';

                            if ($pagina == $i) {
                                $estilo = 'bg-info text-light';
                            }

                            if ($pagina >= ($i - 2) && $pagina <= ($i + 2)) {
                        ?>
                                <a href="<?php echo $nome_pag ?>?pagina=<?php echo $i ?>" class="<?php echo $estilo ?>"><?php echo $i + 1 ?></a>
                            <?php } ?>
                        <?php } ?>

                        <a href="<?php echo $nome_pag ?>?pagina=<?php echo $num_paginas - 1 ?>"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<!-- Product Section End -->

<?php
require_once("modal-carrinho.php");
require_once("rodape.php");
?>