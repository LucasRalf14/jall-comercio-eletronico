<?php
require_once("cabecalho.php");
?>

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Filtrar por Valores</h4>
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
                                            <i class="fa fa-search ml-2"></i></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <h4>Sub-Categorias</h4>
                        <ul>
                            <li><a href="#">SSD</a></li>
                            <li><a href="#">DISCO RÍGIDO</a></li>
                            <li><a href="#">FONTES</a></li>
                            <li><a href="#">PROCESSADORES</a></li>
                            <li><a href="#">COOLERS</a></li>
                            <li><a href="#">MEMÓRIA RAM</a></li>
                            <li><a href="#">PEN DRIVE</a></li>
                            <li><a href="#">TECLADOS</a></li>
                            <li><a href="#">MOUSES</a></li>
                            <li><a href="#">HEADSET</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-7">
                <div class="row">
                    <div class="hero__search__form">
                        <form action="#">
                            <input type="text" placeholder="O que está procurando?">
                            <button type="submit" class="site-btn">BUSCAR</button>
                        </form>
                    </div>
                </div>

                <div class="row mt-4">
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

                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
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