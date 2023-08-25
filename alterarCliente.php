<?php
//1. Conectar no BD (IP, usuario, senha, nome do bd)
require_once("conexao.php");
$corpo = "";
if (isset($_POST['salvar'])) {
  //2. Receber os dados para inserir no BD
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $cpfcnpj = $_POST['cpfcnpj'];
  $endereco = $_POST['endereco'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $observacao = $_POST['observacao'];

  //3. Preparar a SQL
  $sql = "update cliente
    set nome= '$nome',
    telefone = '$telefone',
    cpfcnpj = '$cpfcnpj',
    endereco = '$endereco',
    cidade = '$cidade',
    estado = '$estado',
    observacao = '$observacao'
    where id = $id";

  //4. Executar a SQL
  mysqli_query($conexao, $sql);

  //5. Mostrar uma mensagem ao usuário
  $mensagem = "Inserido com sucesso &#128515;";
}

//Busca usuário selecionado pelo "usuarioListar.php"
$sql = "select * from cliente where id = " . $_GET['id'];
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($resultado)
  ?>

<?php require_once("cabecalho.php") ?>
<?php require_once("mensagem.php") ?>

<h2 style="text-align: center">Cliente alterar</h2>

<form method="post" class="container">
  <?php
  $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
  $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";
  $cpfcnpj = isset($_POST['cpfcnpj']) ? $_POST['cpfcnpj'] : "";;
  $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : "";;
  $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";;
  $estado = isset($_POST['estado']) ? $_POST['estado'] : "";;
  $observacao = isset($_POST['observacao']) ? $_POST['observacao'] : "";;
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
        <label for="exampleFormControlInput1" class="form-label">cpf cnpj</label>
        <input type="text" class="form-control" value="<?= $linha['cpfcnpj'] ?>" name="cpfcnpj" placeholder="Insira o CPF ou CNPJ">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Telefone</label>
        <input type="text" class="form-control" value="<?= $linha['telefone'] ?>" name="telefone"
            placeholder="Escreva sua senha">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Estado</label>
        <input type="text" class="form-control" value="<?= $linha['estado'] ?>" name="estado" placeholder="Escreva sua senha">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cidade</label>
        <input type="text" class="form-control" value="<?= $linha['cidade'] ?>" name="cidade" placeholder="Escreva sua senha">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Endereço</label>
        <input type="text" class="form-control" value="<?= $linha['endereco'] ?>" name="endereco"
            placeholder="Escreva sua senha">
    </div>
    <div class="form-floating">
        <textarea class="form-control" name="observacao" placeholder="Leave a comment here" id="floatingTextarea2"
            style="height: 100px"><?= $linha['observacao']?></textarea>
        <label for="floatingTextarea2">Observação</label>
        &nbsp;&nbsp;
    </div>
  <button name="salvar" type="submit" style="color: #090909; padding: 0.1em 1.1em; font-size: 18px; border-radius: 0.5em; background: #e8e8e8;
          border: 1px solid #e8e8e8; transition: all .3s; box-shadow: 6px 6px 12px #c5c5c5,-6px -6px 12px #ffffff;">
    &#10003; Salvar</button>
  &nbsp; &nbsp;
  <a href="listarUsuario.php" style="text-decoration: none; color: #090909; padding: 0.1em 1.1em; font-size: 18px; border-radius: 0.5em; background: #e8e8e8;
          border: 1px solid #e8e8e8; transition: all .3s; box-shadow: 6px 6px 12px #c5c5c5,-6px -6px 12px #ffffff;">
    &#8634; Voltar</a>
</form>
&nbsp;
&nbsp;

<?php require_once("rodape.php") ?>