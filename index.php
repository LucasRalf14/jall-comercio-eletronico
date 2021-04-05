<?php
require_once("cabecalho.php");
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
                        <li><a href="#">HARDWARE</a></li>
                        <li><a href="#">SMARTPHONES</a></li>
                        <li><a href="#">PERIFÉRICOS</a></li>
                        <li><a href="#">COMPUTADORES</a></li>
                        <li><a href="#">PLACAS DE VÍDEO</a></li>
                        <li><a href="#">MONITORES</a></li>
                        <li><a href="#">TECLADO & MOUSE</a></li>
                        <li><a href="#">GAMER</a></li>
                        <li><a href="#">HOME OFFICE</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <input type="text" placeholder="O que você está procurando?">
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
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categorias/hardware.png">
                        <h5><a href="#">Hardware</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categorias/perifericos.png">
                        <h5><a href="#">Periféricos</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categorias/computadores.png">
                        <h5><a href="#">Computadores</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categorias/placas_de_video.png">
                        <h5><a href="#">Placas de Vídeo</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categorias/monitores.png">
                        <h5><a href="#">Monitores</a></h5>
                    </div>
                </div>
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
                        <li class="active" data-filter="*">Todos</li>
                        <li data-filter=".hardware">Hardware</li>
                        <li data-filter=".perifericos">Periféricos</li>
                        <li data-filter=".monitores">Monitores</li>
                        <li data-filter=".placavideo">Placas de Vídeo</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix hardware">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/hardware.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="produto-detalhe.php">
                            <h6>AMD Ryzen 9 5900X</h6>
                            <h5>R$ 4.883,91</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix perifericos">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/perifericos.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="#">
                            <h6>Mouse Razer Lancehead</h6>
                            <h5>R$ 1.260,00</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix perifericos">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/perifericos_2.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="#">
                            <h6>Mouse Corsair Harpoon</h6>
                            <h5>R$ 205,75</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix placavideo">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/placas_de_video.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="#">
                            <h6>GeForce RTX 3070 OC</h6>
                            <h5>R$ 7.942,23</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix monitores">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/monitores.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="#">
                            <h6>Monitor ASUS 27POL</h6>
                            <h5>R$ 4.000,00</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix hardware">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/hardware_2.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="#">
                            <h6>Intel Core I9 10900F</h6>
                            <h5>R$ 3.274,71</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix monitores">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/monitores_2.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="#">
                            <h6>Monitor Redragon Blackmagic</h6>
                            <h5>R$ 3.126,32</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix perifericos">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/perifericos_3.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="#">
                            <h6>Mouse Redragon Cobra</h6>
                            <h5>R$ 183,79</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <a href=""><img src="img/banner-secundario/banner_processador.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <a href=""><img src="img/banner-secundario/banner_ssds.jpg" alt=""></a>
                </div>
            </div>
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
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix monitores">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/monitores.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="#">
                            <h6>Monitor ASUS 27POL</h6>
                            <h5>R$ 4.000,00</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix hardware">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/hardware_2.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="#">
                            <h6>Intel Core I9 10900F</h6>
                            <h5>R$ 3.274,71</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix monitores">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/monitores_2.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="#">
                            <h6>Monitor Redragon Blackmagic</h6>
                            <h5>R$ 3.126,32</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix perifericos">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/destaques/perifericos_3.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="#">
                            <h6>Mouse Redragon Cobra</h6>
                            <h5>R$ 183,79</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->

<?php
require_once("rodape.php");
?>

</body>

</html>