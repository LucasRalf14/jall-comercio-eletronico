<?php
$pag = "clientes";

require_once("../../conexao.php");

//verificar se o usuário está autenticado
@session_start();

if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] == 'Cliente') {
    echo "<script language='javascript'> window.location='../index.php' </script>";
}
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Cartões</th>

                    </tr>
                </thead>

                <tbody>

                    <?php

                    $query = $pdo->query("SELECT * FROM usuario where nivel = 'Cliente' order by id_usuario desc ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    for ($i = 0; $i < count($res); $i++) {
                        foreach ($res[$i] as $key => $value) {
                        }

                        $nome = $res[$i]['nome'];
                        $cpf = $res[$i]['cpf'];
                        $email = $res[$i]['email'];
                        $telefone = $res[$i]['telefone'];
                        $cartoes = $res[$i]['cartoes'];


                        $id = $res[$i]['id_usuario'];

                        if ($cartoes == "") {
                            $cartoes = 0;
                        }
                    ?>

                        <tr>
                            <td><?php echo $nome ?></td>
                            <td><?php echo $cpf ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $telefone ?></td>
                            <td><?php echo $cartoes ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').dataTable({
            "ordering": false
        })
    });
</script>