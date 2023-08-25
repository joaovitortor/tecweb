<?php
//1. Conectar no BD (IP, usuario, senha, nome do bd)
require_once("conexao.php");
$corpo = "";
if (isset($_POST['salvar'])) {
  //2. Receber os dados para inserir no BD
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $unidadeDeMedida = $_POST['unidadeDeMedida'];

  //3. Preparar a SQL
  $sql = "update produto
    set nome= '$nome',
    unidadeDeMedida = '$unidadeDeMedida'
    where id = $id";

  //4. Executar a SQL
  mysqli_query($conexao, $sql);

  //5. Mostrar uma mensagem ao usuário
  $mensagem = "Inserido com sucesso &#128515;";
}

//Busca usuário selecionado pelo "usuarioListar.php"
$sql = "select * from produto where id = " . $_GET['id'];
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($resultado)
  ?>

<?php require_once("cabecalho.php") ?>
<?php require_once("mensagem.php") ?>

<h2 style="text-align: center">Produto alterar</h2>

<form method="post" class="container">
  <?php
  $unidadeDeMedida = isset($_POST['unidadeDeMedida']) ? $_POST['unidadeDeMedida'] : "";
  $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
  ?>

</form>
<form method="post">
  <input type="hidden" name="id" value="<?= $linha['id'] ?>">
  <!--deixa o id escondido-->

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome</label>
    <input type="text" class="form-control" value="<?= $linha['nome'] ?>" name="nome" placeholder="Escreva seu nome">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Unidade De Medida</label>
    <input type="text" class="form-control" value="<?= $linha['unidadeDeMedida'] ?>" name="unidadeDeMedida"
      placeholder="Escreva seu email">
  </div>

  <button name="salvar" type="submit" style="color: #090909; padding: 0.1em 1.1em; font-size: 18px; border-radius: 0.5em; background: #e8e8e8;
          border: 1px solid #e8e8e8; transition: all .3s; box-shadow: 6px 6px 12px #c5c5c5,-6px -6px 12px #ffffff;">
    &#10003; Salvar</button>
  &nbsp; &nbsp;
  <a href="listarProduto.php" style="text-decoration: none; color: #090909; padding: 0.1em 1.1em; font-size: 18px; border-radius: 0.5em; background: #e8e8e8;
          border: 1px solid #e8e8e8; transition: all .3s; box-shadow: 6px 6px 12px #c5c5c5,-6px -6px 12px #ffffff;">
    &#8634; Voltar</a>
</form>
&nbsp;
&nbsp;

<?php require_once("rodape.php") ?>