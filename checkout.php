<?php
require_once("cabecalho.php");
?>

<?php
require_once("cabecalho-busca.php");
?>

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">

        <div class="checkout__form">
            <h4>Detalhes de Pagamento</h4>
            <form action="#">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Nome Completo<span>*</span></p>
                                    <input type="text" name="nome" id="nome">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>CPF<span>*</span></p>
                                    <input type="text" name="cpf" id="cpf">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Telefone<span></span></p>
                                    <input type="text" name="telefone" id="telefone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Rua<span>*</span></p>
                                    <input type="text" name="rua" id="rua">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkout__input">
                                    <p>Número<span>*</span></p>
                                    <input type="text" name="numero" id="numero">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="checkout__input">
                                    <p>Bairro<span>*</span></p>
                                    <input type="text" name="bairro" id="bairro">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Complemento<span></span></p>
                                    <input type="text" name="complemento" id="complemento">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="checkout__input">
                                    <p>CEP<span>*</span></p>
                                    <input type="text" name="cep" id="cep">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="checkout__input">
                                    <p>Cidade<span>*</span></p>
                                    <input type="text" name="cidade" id="cidade">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="checkout__input">
                                    <p>Estado<span>*</span></p>
                                    <input type="text" name="estado" id="estado">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Seu Pedido</h4>
                            <div class="checkout__order__products">Produtos <span>Total</span></div>
                            <ul>
                                <li>AMD Ryzen 9 5950X<span>R$ 4.883,91</span></li>
                                <li>Mouse Razer Lancehead<span>R$ 1.260,00</span></li>
                                <li>Monitor ASUS 27POL<span>R$ 4.000,00</span></li>
                            </ul>
                            <div class="checkout__order__subtotal">Subtotal <span>R$ 10.143,91</span></div>
                            <div class="checkout__order__frete">Frete <span>R$ 30,00</span></div>
                            <div class="checkout__order__total">Total <span>R$ 10.173,91</span></div>

                            <button data-toggle="modal" data-target="#modalPagamento" type="submt" class="site-btn">FINALIZAR COMPRA</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<!-- Modal -->
<div class="modal fade" id="modalPagamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Pagamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar Alterações</button>
      </div>
    </div>
  </div>
</div>

<?php
require_once("rodape.php");
?>

</body>

</html>