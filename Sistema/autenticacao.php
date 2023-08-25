<?php 

if(isset($_POST['entrar'])):

    //1. pega os dados do usuário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //2. preparar a SQL
    $sql = "select * 
        from usuario
        where email = '{$email}'
        and senha = '{$senha}'";

    //3. Executa SQL
    require_once("conexao.php");
    $resultado = mysqli_query($conexao, $sql);
    $linhas = mysqli_num_rows($resultado); // retorna o número de linhas da consulta

    //4. Verifica se o usuário existe no BD e concede permissão ou volt ao login
    if ($linhas > 0) {
        $usuario = mysqli_fetch_array($resultado);

        //Cria a sessão para gerar permissao de acesso ao sistema
        session_start();
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];

        //Redireciona para o principal
        header("location: principal.php");
    } else {
        $mensagem = "Usuário/senha inválidos";
        header("location: index.php?mensagem=$mensagem");
    }
endif;

?>