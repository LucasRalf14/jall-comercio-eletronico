<?php
require_once("cabecalho.php");
?>

<?php
require_once("cabecalho-busca.php");
?>

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Produtos</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Sub-total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="img/produtos/hardware.png" alt="" width="100" height="100">
                                    <h5>AMD Ryzen 9 5950X</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    R$ 4.883,91
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    R$ 4.883,91
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="img/produtos/perifericos.png" alt="" width="100" height="100">
                                    <h5>Mouse Razer Lancehead</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    R$ 1.260,00
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    R$ 1.260,00
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="img/produtos/monitores.png" alt="" width="100" height="100">
                                    <h5>Monitor ASUS 27POL</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    R$ 4.000,00
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    R$ 4.000,00
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="checkout.php" class="primary-btn cart-btn bg-info text-light"><span class="icon_loading"></span>Atualizar Carrinho</a>
                    <a href="produtos-lista.php" class="primary-btn cart-btn cart-btn-right bg-info text-light">CONTINUAR COMPRANDO</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Código de Desconto</h5>
                        <form action="#">
                            <input type="text" placeholder="<?php echo $texto_cupom ?>">
                            <button type="submit" class="site-btn">APLICAR CUPOM</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Total das Compras</h5>
                    <ul>
                        <li>Subtotal <span>R$ 10.143,91</span></li>
                        <li>Total <span>R$ 10.143,91</span></li>
                    </ul>
                    <a href="#" class="primary-btn">FINALIZAR COMPRA</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

<?php
require_once("rodape.php");
?>

</body>

</html>