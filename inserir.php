<?php 

//1. Conectar no BD (IP, usuario, senha, nome do bd)
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'ifpr');


//2. Receber os dados para inserir no BD
$nome = "João Vitor Bidoia Angelo";
$email = "joaovitor@gmail.com";
$senha = "joaolindo";

//3. Preparar a SQL
$sql = "insert into usuario (nome, email, senha) values ('$nome', '$email', '$senha')";

//echo $sql;

//4. Executar a SQL
mysqli_query($conexao, $sql);

//5. Mostrar uma mensagem ao usuário
echo "inserido com sucesso";
?>