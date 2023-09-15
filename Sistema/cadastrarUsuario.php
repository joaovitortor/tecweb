<?php 
//1. Conectar no BD (IP, usuario, senha, nome do bd)
require_once("conexao.php");
$corpo = "";
if (isset($_POST['salvar'])) {
    $diretorio = "uploads/";
    $arquivoDestino = $diretorio . $_FILES['arquivo']['name'];

    $nomeArquivo = "";
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivoDestino)) {
        $nomeArquivo = $_FILES['arquivo']['name'];
    } else {
        echo "ERRO: Arquivo não enviado";
    }

    //2. Receber os dados para inserir no BD
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //3. Preparar a SQL
    $sql = "insert into usuario (nome, email, senha, arquivo) values ('$nome', '$email', '$senha', '$nomeArquivo')";

    //4. Executar a SQL
    mysqli_query($conexao, $sql);

    //5. Mostrar uma mensagem ao usuário
    $mensagem = "Inserido com sucesso &#128515;";
}
?>

<?php require_once("cabecalho.php")?>
<?php require_once("mensagem.php")?>

    <h2 style="text-align: center">Cadastrar Usuário</h2>

    <form method="post" class="container">
    <?php
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $senha = isset($_POST['senha']) ? $_POST['senha'] : "";
        $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
      ?>
  
</form>
    <form method="post" enctype="multipart/form-data">
        
    
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" class="form-control" value="<?= $nome ?>" name="nome" placeholder="Escreva seu nome">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" value="<?= $email ?>" name="email" placeholder="Escreva seu email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Senha</label>
            <input type="password" class="form-control" value="<?= $senha ?>" name="senha" placeholder="Escreva sua senha">
        </div>
        <div class="m3-3">
            <label for="usuariogrupo_id" class="form-label">Grupo de Usuário</label>
            <select name="usuariogrupo_id" class="form-select">
                <?php
                    $sql = "select * from grupousuario order by nome";
                    $resultado = mysqli_query($conexao, $sql);

                    while ($linha = mysqli_fetch_array($resultado)) :
                        $id = $linha['id'];
                        $nome = $linha['nome'];

                        echo "<option value='{$id}'>{$nome}</option>";
                    endwhile
                ?>

            </select>

        </div>
        <div class="mb-3">
            <label for="arquivo" class="form-label">Foto</label>
            <input name="arquivo" type="file" class="form-control" id="arquivo">
        </div>
        

        <button name="salvar" type="submit" style="color: #090909; padding: 0.1em 1.1em; font-size: 18px; border-radius: 0.5em; background: #e8e8e8;
          border: 1px solid #e8e8e8; transition: all .3s; box-shadow: 6px 6px 12px #c5c5c5,-6px -6px 12px #ffffff;"> &#10003; Salvar</button>
        &nbsp; &nbsp;
        <a href="listarUsuario.php" style="text-decoration: none; color: #090909; padding: 0.1em 1.1em; font-size: 18px; border-radius: 0.5em; background: #e8e8e8;
          border: 1px solid #e8e8e8; transition: all .3s; box-shadow: 6px 6px 12px #c5c5c5,-6px -6px 12px #ffffff;"> &#8634; Voltar</a>
    </form> 
    &nbsp;
    &nbsp;
    
    <?php require_once("rodape.php")?>