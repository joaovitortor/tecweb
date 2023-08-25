<?php
// verifica se o usuário está logado, para dar acesso ao sistema administrativo


//inicia a sessão
if(!isset($_SESSION)) {
    session_start();
}

//verifica se existe um usuário logado
if (!isset($_SESSION['id'])) {
    $mensagem = "Sessão expirada. Faça o login novamente";
header("location: index.php?mensagem{$mensagem}");
}
