<?php
//1. Conectar no BD (IP, usuario, senha, nome do banco)
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'ifpr');

//2. Receber os dados para ATUALIZAR no BD
$nome = "Talita Bidoia Angelo";
$email = "talita@gmail.com";
$id = 2;

//3. Preparar a SQL
$sql = "update usuario 
        set nome = '$nome',
            email = '$email'
        where id = $id";

//4. Executar sql no bd
mysqli_query($conexao, $sql);

//5. Mostrar uma mensagem ao usuário
echo "Registro atualizado com sucesso";
?>