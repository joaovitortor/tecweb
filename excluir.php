<?php 
//1. Conectar no BD (IP, usuario, senha, nome do banco)
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'ifpr');

//2. Receber os dados para EXCLUIR no BD
$id = 5;

//3. Preparar a SQL
$sql = "delete FROM usuario where id = $id";

//4. Executar a SQL
mysqli_query($conexao, $sql);

//5. Mostrar uma mensagem ao usuário
echo "Registro excluído com sucesso";
?>