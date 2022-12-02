<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bdnome = "projeto";

$conn = mysqli_connect($servidor, $usuario, $senha, $bdnome);
$banco = mysqli_select_db($conn, $bdnome);

/*$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'projeto';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);*/

/*if($conn->connect_errno){
    echo "Erro!";
}
else {
    echo "Conexão efetuada com sucesso!";
}*/

?>