<?php

if (!isset($_SESSION)) {
    session_start();
}
//print_r($_SESSION);

if (!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
} else {
    $logado = $_SESSION['nome'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.jpeg">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script type="text/javascrip" src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/sistema.css">
    <title>Beyond Style Model | Início</title>
</head>

<body>
    <!--Início da barra de navegação-->
    <!-- Fixed navbar -->
    <nav class="navbar fixed-top navbar-expand-lg" id="cabecalho-link">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <div class="logo">
                    <h1>Beyond Style</h1>
                    <p>Aqui a moda é garantida</p>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feminino.html">Feminino</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="masculino.html">Maculino</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produto.infantil.html">Infantil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calcados.html">Calçados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <div class="icon"><span>
                                <ion-icon name="bag-handle-outline"></ion-icon>
                            </span>
                        </div>
                    </li>
                    <div class="d-block">
                        <a href="sair.php" class="btn btn-danger m-2">Sair</a>
                    </div>
                </ul>
            </div>
        </div><!-- /container -->
    </nav>
    <?php
    echo "<h1 style='text-align: right;
        margin-top: 120px;
        margin-bottom: -120px;
        position: relative;'>Bem vindo <u>$logado</u></h1>";
    ?>
    <!--Fim da barra de navegação-->
    <section>
        <h1>LANÇAMENTOS</h1>
        <div class="container-card-1">
            <div class="cards">
                <img src="../images/jaqueta_masculinamoleton.jpg" alt="Jaqueta">
            </div>
            <!--cards-->
            <div class="cards">
                <img src="../images/jaqueta-militar-masc.jpg" alt="Jaqueta">
            </div>
            <!--cards-->
            <div class="cards">
                <img src="../images/jaqueta_femininacommoletom.jpg" alt="Jaqueta">
            </div>
            <!--cards-->
            <div class="cards">
                <img src="../images/jaqueta_femininapelucia.jpg" alt="Jaqueta">
            </div>
            <!--cards-->
            <div class="cards">
                <img src="../images/jaqueta-bebe-04.jpg" alt="Jaqueta">
            </div>
            <!--cards-->
            <div class="cards">
                <img src="../images/jaquetas_infantil.jpg" alt="Jaqueta">
            </div>
            <!--cards-->
            <div class="cards">
                <img src="../images/jaqueta_infantil mas.jpg" alt="Jaqueta">
            </div>
            <!--cards-->
        </div>
        <!--container-card-1-->
    </section>

    <section class="cta">
        <div class="texto-cta">
            <h5>Moda Verão</h5>
            <h4>25% OFF<br> Novidades</h4>
            <a href="#">Compre agora</a>
        </div>
    </section>
    <!--cta-->

    <section class="cart-outline">
        <div class="texto-cta">
            <h1>Coleção Sapatos</h1><br>
            <a href="#">Clique aqui</a>
        </div>
    </section>

    <section>
        <h1>Estoque novos</h1>
        <div class="container-roupas">
            <div class="roupas">
                <img src="../images/pexels-michelle-leman-6774561.jpg" alt="">
                <p>Texto aqui</p>
                <h5>Preço aqui</h5>
                <ion-icon name="cart-outline"></ion-icon>
            </div>
            <!--roupa-->

            <div class="roupas">
                <img src="../images/pexels-maria-orlova-4946403.jpg" alt="">
                <p>Texto aqui</p>
                <h5>Preço aqui</h5>
                <ion-icon name="cart-outline"></ion-icon>
            </div>
            <!--roupa-->

            <div class="roupas">
                <img src="../images/pexels-monstera-7691223.jpg" alt="">
                <p>Texto aqui</p>
                <h5>Preço aqui</h5>
                <ion-icon name="cart-outline"></ion-icon>
            </div>
            <!--roupa-->

            <div class="roupas">
                <img src="../images/pexels-monstera-7691068.jpg" alt="">
                <p>Texto aqui</p>
                <h5>Preço aqui</h5>
                <ion-icon name="cart-outline"></ion-icon>
            </div>
            <!--roupa-->

        </div>
        <!--container-roupas-->
    </section>

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
              <a href="#">Formas de pagamento</a>
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
    <!--contato-->

    <footer class="ultimo-texto">
        <p>© 2022 - nome da loja LTDA. Todos os direitos reservados.</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>