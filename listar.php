<?php
//1. conectar no banco de dados (ip, usuario, senha, nome do banco)
$conexao= mysqli_connect('127.0.0.1', 'root', '', 'ifpr');

//2. Preparar a sql
$sql = "select * from usuario";

//3. Executar a SQL
$resultado = mysqli_query($conexao, $sql);

//4. Mostrar dados
// recupera em formato de array a variável resultado
while($linha = mysqli_fetch_array($resultado)){
echo $linha['id'] . " - ";
echo $linha['nome'] . " - ";
echo $linha['email'] . " - ";
echo $linha['senha'] . "<br>";
}