<?php 
//1. Conectar no BD (IP, usuario, senha, nome do bd)
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'ifpr');
$corpo = "";
if (isset($_POST['salvar'])) {
    //2. Receber os dados para inserir no BD
    $nome = $_POST['nome'];

    //3. Preparar a SQL
    $sql = "insert into produtocategoria (nome) values ('$nome')";

    //4. Executar a SQL
    mysqli_query($conexao, $sql);

    //5. Mostrar uma mensagem ao usuário
    $mensagem = "Inserido com sucesso &#128515;";
}
?>

<?php require_once("cabecalho.php")?>
<?php require_once("mensagem.php")?>

    <h2 style="text-align: center">Cadastrar Categoria Produto</h2>
<form method="post" class="container">
    <?php
        $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
      ?>
  
</form>
    <form method="post">
        
    
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" class="form-control" value="<?= $nome ?>" name="nome" placeholder="Escreva seu nome">
        </div>

        <button name="salvar" type="submit" style="color: #090909; padding: 0.1em 1.1em; font-size: 18px; border-radius: 0.5em; background: #e8e8e8;
          border: 1px solid #e8e8e8; transition: all .3s; box-shadow: 6px 6px 12px #c5c5c5,-6px -6px 12px #ffffff;"> &#10003; Salvar</button>
        <a href="listarProdutoCategoria.php" style="text-decoration: none; color: #090909; padding: 0.1em 1.1em; font-size: 18px; border-radius: 0.5em; background: #e8e8e8;
          border: 1px solid #e8e8e8; transition: all .3s; box-shadow: 6px 6px 12px #c5c5c5,-6px -6px 12px #ffffff;"> &#8634; Voltar</a>
<?php require_once("rodape.php")?>