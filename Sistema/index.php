<?= $corpo = ""; ?>
<?php require_once("cabecalho.php")?>
<?php if (isset($_GET['mensagem'])) { ?>
      <div class="alert alert-danger" role="alert">
      <?= $_GET['mensagem']?>
    </div>
    <?php } ?>

<h2 style="text-align: center">Login</h2>

<form action="autenticacao.php" method="post">
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="senha" class="form-label">Senha</label>
    <input name="senha" type="password" class="form-control" id="senha">
  </div>
  <button name="entrar" type="submit" class="btn btn-primary">Entrar</button>
</form>
<?php require_once("rodape.php")?>
