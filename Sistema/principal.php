<!DOCTYPE html>
<?php $corpo = "listar";?>

<?php require_once("cabecalho.php") ?>

<div class="container">
    <h2 class="mt-3">
    <?php
    session_start();
    $nome = $_SESSION['nome'];
    ?>    
    Seja bem vindo, <?= $nome ?></h2>
</div>

<?php require_once("rodape.php") ?>

