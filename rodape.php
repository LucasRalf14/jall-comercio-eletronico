<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>

                    <ul>
                        <li> <?php echo $endereco_loja ?> </li>
                        <li> Telefone: <?php echo $telefone ?> </li>
                        <li> Email: <?php echo $email ?> </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Principais Links</h6>
                    <ul>
                        <li><a href="contato.php">Contatos</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                        <li><a href="carrinho.php">Carrinho</a></li>
                        <li><a href="produtosLista.php">Lista de Produtos</a></li>
                        <li><a href="privacidade.php">Polítca de Privacidade</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Ainda não possui cadastro?</h6>
                    <p>Insira o seu email para criar o seu cadastro.</p>
                    <form action="#">
                        <input type="email" placeholder="Insira o seu email" required>
                        <button type="submit" class="site-btn">Cadastrar</button>
                    </form>

                    <div class="footer__widget__social">
                        <a target="_blank" href="#" title="Ir para página do Facebook"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__payment"><img src="img/pagamentos.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="js/mascara.js"></script>

</body>

</html>