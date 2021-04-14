<?php
    require_once("cabecalho.php");
?>

<?php
    require_once("cabecalho-busca.php");
?>

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-phone"></i></span>
                        <h4>Telefone</h4>
                        <p> <?php echo $telefone ?> </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span>
                            <a href=""><i class="fa fa-whatsapp text-infp"></i></a>
                        </span>
                        <h4>WhatsApp</h4>
                        <p> <?php echo $whatsapp ?> </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-history"></i></span>
                        <h4>Horário de Atendimento</h4>
                        <p>08:00h às 18:00h</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-envelope"></i></span>
                        <h4>Email</h4>
                        <p> <?php echo $email ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Deixe sua mensagem</h2>
                    </div>
                </div>
            </div>
            <form method="post">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <input type="text" name="nome" id="nome" placeholder="Seu Nome">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <input type="email" name="email" id="email" placeholder="Seu Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="mensagem" id="mensagem" placeholder="Sua Mensagem"></textarea>
                        <button name="btn-enviar-email" id="btn-enviar-email" type="button" class="site-btn">ENVIAR MENSAGEM</button>
                    </div>

                    <div class="col-md-12 text-center mt-3 text-info" id="div-mensagem"></div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

<?php
    require_once("rodape.php");
?>

<script type="text/javascript">
    $('#btn-enviar-email').click(function(event){
        event.preventDefault();
        $('#div-mensagem').addClass('text-info')
        $('#div-mensagem').removeClass('text-danger')
        $('#div-mensagem').removeClass('text-success')
        $('#div-mensagem').text('Enviando...')
        $.ajax({
            url:"enviar.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(msg){
              if(msg.trim() === 'Enviado com Sucesso!'){
                $('#div-mensagem').removeClass('text-info')  
                $('#div-mensagem').addClass('text-success')
                $('#div-mensagem').text(msg);
                $('#email').val('');
                $('#nome').val('');
                $('#mensagem').val('');
              }else if(msg.trim() === 'Preencha o Campo Nome'){  
                $('#div-mensagem').addClass('text-danger')
                $('#div-mensagem').text(msg);
              }else if(msg.trim() === 'Preencha o Campo Email'){  
                $('#div-mensagem').addClass('text-danger')
                $('#div-mensagem').text(msg);
              }else if(msg.trim() === 'Preencha o Campo Mensagem'){  
                $('#div-mensagem').addClass('text-danger')
                $('#div-mensagem').text(msg);
              }
              else{
                $('#div-mensagem').addClass('text-danger')
                $('#div-mensagem').text('Deu erro ao enviar o formulário! Provavelmente seu servidor de hospedagem não está com permissão de envio habilitada ou você esta em um servidor local!');
                //$('#div-mensagem').text(msg);
              }
            }
        })
    })
</script>