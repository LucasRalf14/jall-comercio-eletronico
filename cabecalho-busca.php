<?php require_once("conexao.php") ?>

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Categorias</span>
                    </div>
                    <ul>
                        <?php
                        $query = $pdo->query("SELECT * FROM categorias order by id_categorias desc ");
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);

                        for ($i = 0; $i < count($res); $i++) {
                            foreach ($res[$i] as $key => $value) {
                            }

                            $nome = $res[$i]['nome'];
                            $nome_url = $res[$i]['slug'];
                            $id = $res[$i]['id_categorias'];
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
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->