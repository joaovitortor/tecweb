<?php

//Se foi clicado no botão enviar
if(isset($_POST['enviar'])) {
    $diretorio = "uploads/";
    $arquivoDestino = $diretorio . $_FILES['arquivo']['name'];

    //Envia o arquivo para o $arquivoDestino
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivoDestino)) {
        # code...
    }
}
?>