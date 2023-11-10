<?php

session_start();
$sessao_id = session_id();

$sql = "SELECT produto.id, produto.nome, quantidade, valor_unitario, quantidade * valor_unitario as valor_total
        from carrinho
        inner join produto on produto.id = carrinho.produto_id
        where sessao_id = '$sessao_id";

?>