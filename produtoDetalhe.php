<?php
require_once("cabecalho.php");
require_once("conexao.php");
?>

<?php
require_once("cabecalho-busca.php");
?>

<?php
//RECUPERAR O NOME DO PRODUTO PARA FILTRAR OS DETALHES
$produto_get = @$_GET['nome'];
?>

<?php
//BUSCAR OS DADOS DO PRODUTO
$query = $pdo->query("SELECT * FROM produtos where slug = '$produto_get'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$id_produto = $res[0]['id_produtos'];
$nome = $res[0]['nome'];
$descricao = $res[0]['descricao'];
$desc_longa = $res[0]['desc_longa'];
$palavras = $res[0]['keyword'];
$imagem = $res[0]['imagem'];
$valor = $res[0]['valor'];
$sub_cat = $res[0]['id_sub_cat'];
$estoque = $res[0]['estoque'];
$tipo_envio = $res[0]['id_envio'];
$nome_cat = $res[0]['id_categoria'];
$ativo = $res[0]['ativo'];
$peso = $res[0]['peso'];
$largura = $res[0]['largura'];
$altura = $res[0]['altura'];
$comprimento = $res[0]['comprimento'];
$valor_frete = $res[0]['val_frete'];
$promocao = $res[0]['promocao'];

if ($promocao == 'Sim') {
    $queryp = $pdo->query("SELECT * FROM prod_promocao where id_produto = '$id_produto' ");
    $resp = $queryp->fetchAll(PDO::FETCH_ASSOC);

    $valor = $resp[0]['valor'];
    $desconto = $resp[0]['desconto'];
}

$valor = number_format($valor, 2, ',', '.');
?>

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="img/produtos/<?php echo $imagem ?>" alt="">
                    </div>

                    <div class="product__details__pic__slider owl-carousel">
                        <img data-imgbigurl="img/produtos/<?php echo $imagem ?>" src="img/produtos/<?php echo $imagem ?>" alt="">

                        <?php
                        $query = $pdo->query("SELECT * FROM imagens where id_produto = '$id_produto' ");
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);

                        for ($i = 0; $i < count($res); $i++) {
                            foreach ($res[$i] as $key => $value) {
                            }

                            $imagem_prod = $res[$i]['imagem'];
                        ?>

                            <img data-imgbigurl="img/detalhes/<?php echo $imagem_prod ?>" src="img/detalhes/<?php echo $imagem_prod ?>" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mt-4">
                <div class="product__details__text">
                    <h3><?php echo $nome ?></h3>

                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <!-- <span>(18 reviews)</span> -->
                    </div>

                    <div class="product__details__price">R$ <?php echo $valor ?></div>

                    <p><?php echo $descricao ?></p>
                    
                    <div class="product__details__quantity">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                    </div>

                    <a href="" onclick="carrinhoModal('<?php echo $id ?>','Não')" class="primary-btn">ADICIONAR AO CARRNHO</a>
                    <a href="#"  class="heart-icon"><span class="icon_heart_alt"></span></a>

                    <ul>
                        <li><b>Disponibilidade:</b> <span><?php echo $estoque ?></span></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Descrição</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Especificações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Reviews <span>(1)</span></a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Informações do Produto</h6>
                                <p><?php echo $descricao ?></p>
                            </div>
                        </div>

                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Especificações Técnicas</h6>
                                <p><?php echo $desc_longa ?></p>
                            </div>
                        </div>

                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Reviews</h6>
                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                    Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                    sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                    eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                    sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                    diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                    Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                    Proin eget tortor risus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Produtos Relacionados</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php
                $query = $pdo->query("SELECT * FROM produtos where id_sub_cat = '$sub_cat' order by id_produtos desc");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);

                for ($i = 0; $i < count($res); $i++) {
                    foreach ($res[$i] as $key => $value) {
                    }

                    $nome = $res[$i]['nome'];
                    $valor = $res[$i]['valor'];
                    $nome_url = $res[$i]['slug'];
                    $imagem = $res[$i]['imagem'];
                    $promocao = $res[$i]['promocao'];
                    $id_produto = $res[$i]['id_produtos'];

                    $valor = number_format($valor, 2, ',', '.');

                    if ($promocao == 'Sim') {
                        $queryp = $pdo->query("SELECT * FROM prod_promocao where id_produto = '$id_produto' ");
                        $resp = $queryp->fetchAll(PDO::FETCH_ASSOC);

                        $valor_promo = $resp[0]['valor'];
                        $desconto = $resp[0]['desconto'];
                        $valor_promo = number_format($valor_promo, 2, ',', '.');
                ?>

                        <div class="col-lg-3 col-md-4 col-sm-6 mix sapatos fresh-meat">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg" data-setbg="img/produtos/<?php echo $imagem ?>">
                                    <div class="product__discount__percent">-<?php echo $desconto ?>%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="produto-<?php echo $nome_url ?>"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="" onclick="carrinhoModal('<?php echo $id ?>','Não')"><i class="fa fa-shopping-cart"></i></a>
                                    </ul>
                                </div>

                                <div class="product__discount__item__text">
                                    <h5><a href="produto-<?php echo $nome_url ?>"><?php echo $nome ?></a></h5>
                                    <div class="product__item__price">R$ <?php echo $valor_promo ?> <span>R$ <?php echo $valor ?></span></div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 mix sapatos fresh-meat">
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
    </div>
</section>
<!-- Related Product Section End -->

<?php
require_once("rodape.php");
?>

</body>

</html>