<?php
require_once("conexao.php");
$corpo = "";
if (isset($_POST['salvar'])) {
    $nome = $_POST['nome'];
    $cpfcnpj = $_POST['cpfcnpj'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $observacao = $_POST['observacao'];

    $sql = "insert into cliente 
            (nome, cpfcnpj, telefone, endereco, cidade, estado, observacao) values 
            ('$nome', '$cpfcnpj', '$telefone', '$endereco', '$cidade', '$estado', '$observacao')";

    mysqli_query($conexao, $sql);

    $mensagem = "Inserido com sucesso &#128515;";
}
?>

<?php require_once("cabecalho.php") ?>
<?php require_once("mensagem.php") ?>

<h2 style="text-align: center">Cadastrar Cliente</h2>

<form method="post" class="container">
    <?php
    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $cpfcnpj = isset($_POST['cpfcnpj']) ? $_POST['cpfcnpj'] : "";
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : "";
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";
    $estado = isset($_POST['estado']) ? $_POST['estado'] : "";
    $observacao = isset($_POST['observacao']) ? $_POST['observacao'] : "";
    ?>

</form>
<form method="post">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input type="text" class="form-control" value="<?= $nome ?>" name="nome" placeholder="Insira o nome">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">cpf cnpj</label>
        <input type="text" class="form-control" value="<?= $cpfcnpj ?>" name="cpfcnpj" placeholder="Insira o CPF ou CNPJ">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Telefone</label>
        <input type="text" class="form-control" value="<?= $telefone ?>" name="telefone"
            placeholder="Escreva sua senha">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Estado</label>
        <input type="text" class="form-control" value="<?= $estado ?>" name="estado" placeholder="Escreva sua senha">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cidade</label>
        <input type="text" class="form-control" value="<?= $cidade ?>" name="cidade" placeholder="Escreva sua senha">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Endereço</label>
        <input type="text" class="form-control" value="<?= $endereco ?>" name="endereco"
            placeholder="Escreva sua senha">
    </div>
    <div class="form-floating">
        <textarea class="form-control" name="observacao" placeholder="Leave a comment here" id="floatingTextarea2"
            style="height: 100px"><?= $observacao?></textarea>
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