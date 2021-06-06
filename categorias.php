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

$limite = $pag * @$itens_por_pagina;
$pagina = $pag;
$nome_pag = 'categorias.php';
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
                </div>
            </div>

            <div class="col-lg-9 col-md-7">
                <h5>Lista de Categorias</h5>
                <div class="row mt-4">
                    <?php
                    $query = $pdo->query("SELECT * FROM categorias order by nome asc LIMIT $limite, $itens_por_pagina");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    for ($i = 0; $i < count($res); $i++) {
                        foreach ($res[$i] as $key => $value) {
                        }

                        $nome = $res[$i]['nome'];
                        $imagem = $res[$i]['imagem'];
                        $nome_url = $res[$i]['slug'];
                        $id = $res[$i]['id_categorias'];

                        $query2 = $pdo->query("SELECT * FROM sub_categorias where id_categoria = '$id' ");
                        $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                        $total_itens = @count($res2);

                        //BUSCAR O TOTAL DE REGISTROS PARA PAGINAR
                        $query3 = $pdo->query("SELECT * FROM categorias");
                        $res3 = $query3->fetchAll(PDO::FETCH_ASSOC);
                        $num_total = @count($res3);
                        $num_paginas = ceil($num_total / $itens_por_pagina);
                    ?>

                        <?php if ($total_itens != 0) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/categorias/<?php echo $imagem ?>">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="sub-categoria-de-<?php echo $nome_url ?>"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product__item__text">
                                        <a href="sub-categoria-de-<?php echo $nome_url ?>">
                                            <h5><?php echo $nome ?></h5>
                                            <h6><?php echo $total_itens ?> Podutos</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>

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
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<?php
require_once("rodape.php");
?>