<?php
require_once("cabecalho.php");
?>

<?php
require_once("cabecalho-busca.php");
?>

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Departamentos</h4>
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
                    <div class="sidebar__item">
                        <h4>Preço</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="540">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <form method="get" action="produtos-lista.php">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                        <a class="text-dark" type="submit">
                                            <i class="fa fa-search ml-2"></i>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar__item">
                        <div class="latest-product__text">
                            <h4>Prod Recentes</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/produtos/hardware.png" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>AMD Ryzen 9 5900X</h6>
                                            <span>R$ 4.883,91</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/produtos/hardware_2.png" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Intel Core I9 10900F</h6>
                                            <h5>R$ 3.274,71</h5>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/produtos/monitores.png" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Monitor ASUS 27POL</h6>
                                            <h5>R$ 4.000,00</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/produtos/monitores_2.png" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Monitor Redragon Blackmagic</h6>
                                            <h5>R$ 3.126,32</h5>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/produtos/perifericos.png" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Mouse Razer Lancehead</h6>
                                            <h5>R$ 1.260,00</h5>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/produtos/perifericos_2.png" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Mouse Corsair Harpoon</h6>
                                            <h5>R$ 205,75</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        <h2>Promoções</h2>
                        <span class="ml-4">
                            <a href="#" class="text-muted" title="Ver todos os produtos">
                                <small><i class="fa fa-eye mr-1"></i></small>Ver Todos</a>
                        </span>
                    </div>
                    <div class="row">
                        <div class="product__discount__slider owl-carousel">
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/produtos/hardware.png">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Hardware</span>
                                        <h5><a href="#">AMD Ryzen 9 5950X</a></h5>
                                        <div class="product__item__price">R$ 7.411,65 <span>$1482,33</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/produtos/hardware_2.png">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Hardware</span>
                                        <h5><a href="#">Intel Core I9 10900F</a></h5>
                                        <div class="product__item__price">R$ 3.274,71<span>$2.619,76</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/produtos/monitores.png">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Monitores</span>
                                        <h5><a href="#">Monitor ASUS 27POL</a></h5>
                                        <div class="product__item__price">R$ 4.000,00<span>$3.200,00</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/produtos/monitores_2.png">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Monitores</span>
                                        <h5><a href="#">Monitor Redragon Blackmagic</a></h5>
                                        <div class="product__item__price">R$ 3.126,32<span>$2.501,05</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/produtos/perifericos.png">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Periféricos</span>
                                        <h5><a href="#">Mouse Razer Lancehead</a></h5>
                                        <div class="product__item__price">R$ 1.260,00<span>$1.008,00</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/produtos/perifericos_2.png">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Periféricos</span>
                                        <h5><a href="#">Mouse Corsair Harpoon</a></h5>
                                        <div class="product__item__price">R$ 205,75<span>$164,60</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-title product__discount__title">
                    <h2>Mais Vendidos</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/hardware.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>AMD Ryzen 9 5900X</h6>
                                    <h5>R$ 4.883,91</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/hardware_2.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>Intel Core I9 10900F</h6>
                                    <h5>R$ 3.274,71</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/perifericos.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>Mouse Razer Lancehead</h6>
                                    <h5>R$ 1.260,00</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/monitores.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>Monitor ASUS 27POL</h6>
                                    <h5>R$ 4.000,00</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/monitores_2.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>Monitor Redragon Blackmagic</h6>
                                    <h5>R$ 3.126,32</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/perifericos_2.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>Mouse Corsair Harpoon</h6>
                                    <h5>R$ 205,75</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/perifericos_3.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>Mouse Redragon Cobra</h6>
                                    <h5>R$ 183,79</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/placas_de_video.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>GeForce RTX 3070 OC</h6>
                                    <h5>R$ 7.942,23</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/monitores_2.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>Monitor Redragon Blackmagic</h6>
                                    <h5>R$ 3.126,32</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/perifericos_2.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>Mouse Corsair Harpoon</h6>
                                    <h5>R$ 205,75</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/perifericos_3.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>Mouse Redragon Cobra</h6>
                                    <h5>R$ 183,79</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/produtos/placas_de_video.png">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <a href="#">
                                    <h6>GeForce RTX 3070 OC</h6>
                                    <h5>R$ 7.942,23</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<?php
require_once("rodape.php");
?>

</body>

</html>