<?php
//1. Conectar no BD (IP, usuario, senha, nome do bd)
require_once("conexao.php");
$corpo = "";
if (isset($_POST['salvar'])) {
  //2. Receber os dados para inserir no BD
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $usuariogrupo_id = $_POST['usuariogrupo_id'];

  //3. Preparar a SQL
  $sql = "update usuario
          set nome= '$nome',
          email = '$email',
          usuariogrupo_id = '$usuariogrupo_id'
          where id = $id";

  //4. Executar a SQL
  mysqli_query($conexao, $sql);

  //5. Mostrar uma mensagem ao usuário
  $mensagem = "Inserido com sucesso &#128515;";
}

//Busca usuário selecionado pelo "usuarioListar.php"
$sql = "select * from usuario where id = " . $_GET['id'];
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($resultado)
  ?>

<?php require_once("cabecalho.php") ?>
<?php require_once("mensagem.php") ?>

<h2 style="text-align: center">Usuário alterar</h2>

<form method="post" class="container">
  <?php
  $email = isset($_POST['email']) ? $_POST['email'] : "";
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
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" class="form-control" value="<?= $linha['email'] ?>" name="email"
      placeholder="Escreva seu email">
  </div>
  <div class="m3-3">
            <label for="usuariogrupo_id" class="form-label">Grupo de Usuário</label>
            <select name="usuariogrupo_id" class="form-select">
              <option value="">-- Selecione --</option>
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