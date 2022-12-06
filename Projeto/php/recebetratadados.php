<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
$datanasc = filter_input(INPUT_POST, 'datanasc', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_VALIDATE_INT);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$comandosql = "INSERT INTO usuario (nome,genero,nasc,cpf,telefone,email,senha) VALUES ('$nome','$genero','$datanasc','$cpf','$telefone','$email','$senha')";

$resultado = mysqli_query($conn, $comandosql);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:blue;'> Usuário Cadastrado com sucesso!";
} else {
    $_SESSION['msg'] = "<p style='color:red;'> Usuário não cadastrado!";
    echo "Erro ao enviar ao banco <br>";
    echo 'Código do erro: ' . mysqli_errno($conn) . '<br>';
    echo 'Mensagem de erro: ' . mysqli_error($conn) . '<br>';
}
/*if(mysqli_insert_id($conn)){
$_SESSION['msg'] = "<p style='color: blue;'> Usuário Cadastrado com sucesso!";
header("Location: cadastro.html");
die();
}
else {
$_SESSION['msg'] = "<p style='color: red;' Usuário não cadastrado!!!!";
echo "Erro ao enviar ao banco <br>";
echo 'Código do erro: ' .mysqli_errno($conn).'<br>';
echo 'Mensagem de erro: ' . mysqli_error($conn) . '<br>';
}*/

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beyond Style Model| Cadastro</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.jpeg">
    <link rel="stylesheet" type="text/css" href="../css/obrigado.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="background">
      <header>
        <div class="logo">
          <h1>Beyond Style Model</h1>
          <p>Aqui a moda é garantida</p>
        </div>
        <!--Logo-->

        <nav class="cabecalho-link">
          <ul>
            <li>
              <a href="sistema.php">Início</a>
            </li>
            <li>
              <a href="..html/feminino.html">Feminino</a>
            </li>
            <li>
              <a href="..html/masculino.html">Masculino</a>
            </li>
            <li>
              <a href="..html/produto.infantil.html">Infantil</a>
            </li>
            <li>
              <a href="..html/calcados.html">Calçados</a>
            </li>
            <li>
              <a href="../php/login.php">Login</a>
            </li>
            <li>
              <a href="contato.php">Contato</a>
            </li>
            <div class="icon"><span>
                <ion-icon name="bag-handle-outline"></ion-icon>
                <!--<img src="../Imagens/bolsa.svg" alt="Bolsa de Compras">-->
              </span></div>
          </ul>
        </nav>
        <!--Cabeçalho Link-->
      </header>
    </div>

    <div id="obrigado">
        <h1>Obrigado!</h1>
        <h3>Cadastro realizado com sucesso!</h3>
        <h3>Você será redirecionado para a página inicial em 10 segundos.</h3>
    </div>

    <!-- Rodapé-->

<!-- Rodapé-->

<section id="contato">
        <div class="meio-contato">
            <h3>BEYOND STYLE</h3>
                <li>
                    <a href="../html/contato.html">Nos envie uma mensagem</a>
                </li>
        </div>
        <!--meio-contato-->

        <div class="meio-contato">
            <h3>Explore</h3>
            <ul>
                <li>
                    <a href="#">Início</a>
                </li>

                <li>
                    <a href="#">Destaque</a>
                </li>

                <li>
                    <a href="#">Novo</a>
                </li>

                <li>
                    <a href="#">Contato</a>
                </li>
            </ul>

        </div>
        <!--meio-contato-->

        <div class="meio-contato">
            <h3>Empresa</h3>
            <ul>
                <li>
                    <a href="#">Sobre nós</a>
                </li>

                <li>
                    <a href="#">Missão</a>
                </li>

                <li>
                    <a href="#">Visão</a>
                </li>

                <li>
                    <a href="#">Valores</a>
                </li>
            </ul>
        </div>


        <div class="meio-contato">
            <h3>Shopping</h3>
            <ul>
                <li>
                    <a href="#">Store</a>
                </li>

                <li>
                    <a href="#">Trending</a>
                </li>

                <li>
                    <a href="#">Acessories</a>
                </li>

                <li>
                    <a href="#">Sale</a>
                </li>
            </ul>
        </div>


    </section>


    <footer class="ultimo-texto">
        <p>© 2022 - Beyond Style LTDA. Todos os direitos reservados.</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript">
        setTimeout("document.location = '../html/index.html'", 10000);
    </script>
</body>

</html>