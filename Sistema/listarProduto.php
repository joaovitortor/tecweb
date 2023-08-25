<!DOCTYPE html>
<?php
$corpo = "listar";
require_once("conexao.php");

//Exclusao//
if (isset($_GET['id'])) {
  $sql = "delete FROM produto where id =" . $_GET['id'];
  mysqli_query($conexao, $sql);
  $mensagem = "Exclusão Realizada com sucesso.";
}
//2. Preparar a sql
$sql = "select * from produto";

//3. Executar a SQL
$resultado = mysqli_query($conexao, $sql);
?>

<?php require_once("cabecalho.php") ?>
<?php require_once("mensagem.php") ?>

<div class="card mt-3 mb-3">
  <div class="card-body">
    <h2 class="card-title">Listagem de Produtos
      <a href="cadastrarProduto.php" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i></a>
    </h2>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Unidade de Medida</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($linha = mysqli_fetch_array($resultado)) { ?>
      <tr>
        <th>
          <?= $linha['id'] ?>
        </th>
        <td>
          <?= $linha['nome'] ?>
        </td>
        <td>
          <?= $linha['unidadeDeMedida'] ?>
        </td>
        <td><a href="alterarProduto.php?id=<?= $linha['id'] ?>" class="btn btn-warning"><i
              class="fa-solid fa-pen-to-square"></i></a>
          <a href="listarProduto.php? id=<?= $linha['id'] ?>" class="btn btn-danger"
            onclick="return confirm('Deseja excluir mesmo?')">
            <i class="fa-solid fa-trash-can"></i>
          </a>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php require_once("rodape.php") ?>