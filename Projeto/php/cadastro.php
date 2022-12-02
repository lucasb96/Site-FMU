<?php
session_start();
?>
<!--include_once('recebetratadados.php');
if (isset($_POST['cadastrar'])) {
	print_r('Nome: ' . $_POST['nome']);
	print_r('<br>');
	print_r('Genêro: ' . $_POST['genero']);
	print_r('<br>');
	print_r('Data de Nascimento: ' . $_POST['datanasc']);
	print_r('<br>');
	print_r('CPF: ' . $_POST['cpf']);
	print_r('<br>');
	print_r('Telefone: ' . $_POST['telefone']);
	print_r('<br>');
	print_r('E-mail: ' . $_POST['email']);
	print_r('Senha: ' . $_POST['senha']);*/
	/*$nome = $_POST['nome'];
	$sexo = $_POST['genero'];
	$datanasc = $_POST['datanasc'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];*/

	/*$comandosql = "INSERT INTO usuario (nome,genero,nasc,cpf,telefone,email,senha) VALUES ('$nome','$sexo','$datanasc','$cpf','$telefone','$email','$senha')";*/

	$resultado = mysqli_query($conn, $comandosql);

	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<p style='color:blue;'> Usuário Cadastrado com sucesso!";
	}
	else {
		$_SESSION['msg'] = "<p style='color:red;'> Usuário não cadastrado!";
		echo "Erro ao enviar ao banco <br>";
		echo 'Código do erro: ' . mysqli_errno($conn) . '<br>';
		echo 'Mensagem de erro: ' . mysqli_error($conn) . '<br>';
	}

	/*$result = mysqli_query($conn, "INSERT INTO usuario (nome,genero,nasc,cpf,telefone,email,senha) VALUES ('$nome','$sexo',$datanasc','$cpf','$telefone','$email','$senha')");*/
}
?>-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beyond Style Model| Cadastro</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.jpeg">
	<link rel="stylesheet" type="text/css" href="../css/pagcadastro.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
	<div class="background">
		<header>
			<div class="logo">
				<h1>Beyond Style Model</h1>
			</div>
			<!--Logo-->

			<nav class="cabecalho-link">
				<ul>
					<li>
						<a href="../html/index.html">Início</a>
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
						<a href="../html/login.html">Login</a>
					</li>
					<li>
						<a href="../html/contato.html">Contato</a>
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
	<!--formulario cadastro-->

	<div id="formulario">
		<h1>criar seu cadastro</h1><br>
		<em><i>veja seus pedidos de forma fácil, compre mais rápido e tenha uma
				experiência personalizada :)</i></em>
		<br><br>
		<form name="formCadastro" onsubmit="return validarFormulario()" method="POST" action="recebetratadados.php">
			<div class="nome">
				<label for="nome">Nome completo </label><br>
				<input type="text" id="nome" name="nome" value="" size="40">
			</div><br>

			<div class="genero">
				<p class="gen">Gênero </p>
				<small>para a gente te conhecer um pouquinho melhor :)</small><br>
				<input type="radio" name="genero" value="feminino">Feminino
				<input type="radio" name="genero" value="masculino">Masculino
				<input type="radio" name="genero" value="naoinformar"> Não informar
			</div><br>

			<div class="datanasc">
				<label for="datanasc">Data de nascimento </label><br>
				<small>necessário pra identificar a maioridade, no formato DD/MM/AAAA</small><br>
				<input type="date" id="datanasc" name="datanasc" value="">
			</div><br>

			<div class="cpf">
				<label for="cpf">CPF </label><br>
				<small>necessário pra emissão das Notas Fiscais</small><br>
				<input type="text" id="cpf" name="cpf" maxlength="11" value="">
			</div><br>

			<div class="telefone">
				<label for="telefone">Telefone </label><br>
				<small>caso a gente precise entrar em contato sobre seus pedidos</small><br>
				<input type="text" id="telefone" name="telefone" value="">
			</div><br>

			<div class="email">
				<label for="email">E-mail </label><br>
				<input type="text" id="email" name="email" value="">
			</div><br>

			<div class="senha">
				<label for="senha">Senha </label><br>
				<small>precisa ter entre 6 e 20 caracteress</small><br>
				<input type="password" id="senha" name="senha" value="">
			</div><br><br><br><br>

			<div class="cadastrar">
				<input type="submit" name="cadastrar" id="submit" value="Cadastrar">
			</div>
		</form>
	</div>

	<!-- Rodapé-->

	<section id="contato">
		<div class="meio-contato">
			<h3>Nome da Loja</h3>
			<h5>Nos envie uma mensagem</h5>
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
		<p>© 2022 - nome da loja LTDA. Todos os direitos reservados.</p>
	</footer>
	<script src="../js/validarformulario.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>