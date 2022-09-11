<?php
$tem_estoque = $exibe['qt_estoque'] > 0;
$estoque_icon = $tem_estoque ? 'bi bi-currency-bitcoin' : 'bi bi-x-circle-fill';
$btn_type = $tem_estoque ? 'btn-success' : 'btn-danger';
$btn_msg = $tem_estoque ? 'Adicionar ao Carrinho' : 'Indisponível';
$enabled = $tem_estoque ? '' : 'disabled';

if ($tem_estoque) {
    $codigo_livro = $exibe['cd_livro'];
    $link_to_card = "<a href='carrinho.php?cd=$codigo_livro'>";
    echo $link_to_card;
}
?>

<button class="btn <?php echo $btn_type ?> btn-block" type="submit" <?php echo $enabled ?>>
    <span class="<?php echo $estoque_icon ?>"> <?php echo $btn_msg ?></span>
</button>

<?php
if ($tem_estoque) {
    echo "</a>";
}
?>