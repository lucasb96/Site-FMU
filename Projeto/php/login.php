<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/loginphp.css">
    <link rel="shortcut icon" type="image/x-icon"
            href="../images/favicon.jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Beyond Style Model | Login</title>
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
                        <a href="../html/feminino.html">Feminino</a>
                    </li>
                    <li>
                        <a href="../html/masculino.html">Masculino</a>
                    </li>
                    <li>
                        <a href="../html/produto.infantil.html">Infantil</a>
                    </li>
                    <li>
                        <a href="../html/calcados.html">Calçados</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="contato.php">Contato</a>
                    </li>
                    <div class="icon"><span>
                            <ion-icon name="bag-handle-outline"></ion-icon>
                        </span></div>
                </ul>
            </nav>
            <!--Cabeçalho Link-->
        </header>
    </div>

    <div id="login">

        <div id="caixa">
            <img src="../images/favicon.jpeg" alt="">
            <h1>LOGIN</h1>
            <form method="POST" action="testLogin.php">
                <div class="email">
                    <input type="email" placeholder="E-mail" name="email">
                </div>

                <div class="senha">
                    <input type="password" placeholder="Senha" name="senha">
                </div>

                <div class="entrar">
                    <p>Ainda não tem uma conta? <a href="../php/cadastro.php">Crie uma.</a></p>
                    <input type="submit" value="Entrar" name="submit">
                </div>
            </form>
        </div>
    </div>

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
    <script type="module"
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>