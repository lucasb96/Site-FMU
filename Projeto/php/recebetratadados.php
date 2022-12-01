<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$genero = filter_input();
$datanasc = filter_input();
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_VALIDATE_INT);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$comandosql = "INSERT INTO usuarios (nome, genero, nasc, cpf, telefone, email, senha) VALUES ('$nome', '$genero', $datanasc', '$cpf', '$telefone','$email', '$senha')";

$resultado = mysqli_query($conn, $comandosql);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color: blue;'> Usuário Cadastrado com sucesso!";
    header("Location: cadastro.html");
    die();
}
else {
    $_SESSION['msg'] = "<p style='color: red;' Usuário não cadastrado!!!!";
    echo "Erro ao enviar ao banco <br>";
    echo 'Código do erro: ' .mysqli_errno($conn).'<br>';
    echo 'Mensagem de erro: ' . mysqli_error($conn) . '<br>';
}

?>

