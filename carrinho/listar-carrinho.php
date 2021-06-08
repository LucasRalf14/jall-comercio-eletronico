<?php
require_once("../conexao.php");

$pagina = 'produtos';

@session_start();
$id_usuario = @$_SESSION['id_usuario'];

echo '
<div class="cart-inline-header">
<div class="shoping__cart__table">
<table>';

$res = $pdo->query("SELECT * from carrinho where id_usuario = '$id_usuario' and id_venda = 0 order by id_carrinho asc");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);

if ($linhas == 0) {
  $linhas = 0;
  $total = 0;
}

$total;

for ($i = 0; $i < count($dados); $i++) {
  foreach ($dados[$i] as $key => $value) {
  }

  $id_produto = $dados[$i]['id_produto'];
  $quantidade = $dados[$i]['quantidade'];
  $id_carrinho = $dados[$i]['id_carrinho'];

  $res_p = $pdo->query("SELECT * from produtos where id_produtos = '$id_produto' ");
  $dados_p = $res_p->fetchAll(PDO::FETCH_ASSOC);

  $nome_produto = $dados_p[0]['nome'];
  $promocao = $dados_p[0]['promocao'];
  $pasta = "produtos";

  if ($promocao == 'Sim') {
    $queryp = $pdo->query("SELECT * FROM prod_promocao where id_produto = '$id_produto' ");
    $resp = $queryp->fetchAll(PDO::FETCH_ASSOC);
    $valor = $resp[0]['valor'];
  } else {
    $valor = $dados_p[0]['valor'];
  }

  $imagem = $dados_p[0]['imagem'];

  $total_item = $valor * $quantidade;
  @$total = @$total + $total_item;

  $valor = number_format($valor, 2, ',', '.');
  //$total = number_format( $total , 2, ',', '.');
  $total_item = number_format($total_item, 2, ',', '.');

  echo ' <tr>
<td class="shoping__cart__item">
<img src="img/' . $pasta . '/' . $imagem . '" alt="" width="60">
</td>

<td class="shoping__cart__price">
R$ ' . $total_item . '
</td>

<td class="shoping__cart__quantity">
<div class="quantity">
  <div class="pro-qty">
    <input onchange="editarCarrinho(' . $id_carrinho . ')" type="text" data-zeros="true" value="' . $quantidade . '" min="1" max="1000" id="quantidade">
</div>
</div>
</td>

<td class="shoping__cart__item__close">
<a onclick="deletarCarrinho(' . $id_carrinho . ')" id="btn-deletar" href="" class="ml-2" title="Remover Item do Carrinho">
<span class="icon_close"></span>
</a>
</td>

</tr>
';
}

echo ' 

</table>  
</div>

</div>

';

@$total = number_format(@$total, 2, ',', '.');
?>

<!--SCRIPT PARA ALTERAR O INPUT NUMBER -->
<script type="text/javascript">
  jQuery('<span class="dec qtybtn">-</span>').insertBefore('.pro-qty input');
  jQuery('<span class="inc qtybtn">+</span>').insertAfter('.pro-qty input');

  jQuery('.pro-qty').each(function() {
    var spinner = jQuery(this),
      input = spinner.find('input[type="text"]'),
      btnUp = spinner.find('.inc'),
      btnDown = spinner.find('.dec'),
      min = input.attr('min'),
      max = input.attr('max');

    btnUp.click(function() {
      var oldValue = parseFloat(input.val());

      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }

      spinner.find("input").val(newVal);
      document.getElementById('txtquantidade').value = newVal;
      spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
      var oldValue = parseFloat(input.val());

      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }

      spinner.find("input").val(newVal);
      document.getElementById('txtquantidade').value = newVal;
      spinner.find("input").trigger("change");
    });
  });
</script>

<script type="text/javascript">
  var itens = "<?= $linhas ?>";
  var total = "<?= $total ?>";

  $("#total_itens").text(itens);
  $("#valor_total").text(total);
</script>