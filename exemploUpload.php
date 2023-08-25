<?php

//Se foi clicado no botão enviar
if (isset($_POST['enviar'])) {
    $diretorio = "uploads/";
    $arquivoDestino = $diretorio . $_FILES['arquivo']['name'];

    //Envia o arquivo para o $arquivoDestino
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivoDestino)) {
        echo "Arquivo enviado com sucesso";
    } else {
        echo "ERRO: Arquivo não enviado";
    }
}
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> <!--muda a fonte-->
    <script src="https://kit.fontawesome.com/e507e7a758.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

<h1>Upload de arquivo</h1>
<form name="form" method="post" enctype="multipart/form-data">
    Arquivo: <input type="file" name="arquivo" id="arquivo">
    <br><br><br>
    <input type="submit" name="enviar" value="Enviar">
</form>

</body>
</html>