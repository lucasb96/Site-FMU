<?php
    session_start();

//print_r($_REQUEST);
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    //ACESSA
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_GET['nome'];

    //print_r('E-mail: ' . $email);
    //print_r('<br>');
    //print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

    $result = $conn->query($sql);

    //print_r($sql);
    //print_r($result);
    
    if(mysqli_num_rows($result) < 1){
        //print_r('Não existe');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } else {
        //print_r('Existe');
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }

    $usuario = $result->fetch_assoc();

    if(!isset($_SESSION)){
        session_start();
    }

    $_SESSION['nome'] = $usuario['nome'];

} else {
    //NÃO ACESSA
    header('Location: login.php');
}
