<?php include "php/conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">

		<title>Concessionária Razor</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	</head>

	<body>
		<header>
			<div class="caixa">
				<h1><img height="250" class="logoempresa" src="img/logoempresa.png"></h1>

				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="listaCliente.php">Clientes</a></li>
						<li><a href="listaVendedor.php">Vendedores</a></li>
						<li><a href="listaVeiculo.php">Veículos</a></li>
						<li><a href="listaVenda.php">Vendas</a></li>
						<li><a href="contato.html"></a></li>
					</ul>
				</nav>
			</div>
		</header>

		<img class="banner" src="img/dentroConcessionaria.jpg">

	<main>
		<section class="principal">
			<h2 class="titulo-principal">Sobre a Barbearia Alura</h2>

			<img class = "utensilios" src="img/utensilios.jpg" alt="Utensilios de um barbeiro">
	 
			<p>Localizada no coração da cidade a <strong>Barbearia Alura</strong> traz para o mercado o que há de melhor para o seu cabelo e barba. Fundada em 2019, a Barbearia Alura já é destaque na cidade e conquista novos clientes a cada dia.</p>

			<p id="missao"><em>Nossa missão é: <strong>"Proporcionar auto-estima e qualidade de vida aos clientes"</strong>.</em></p>

			<p>Oferecemos profissionais experientes e antenados às mudanças no mundo da moda. O atendimento possui padrão de excelência e agilidade, garantindo qualidade e satisfação dos nossos clientes.</p>
		</section>

		<section class="mapa">
			<h3 class="titulo-principal">Nosso estabelecimento</h3>
			<p> Nosso estabelecimento está localizado no coração da cidade</p>

			<div class="mapa-conteudo"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.1268069289904!2d-81.56606268544617!3d28.38523770198205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dd7ee634caa5f7%3A0xa71e391fd01cf1a0!2sWalt%20Disney%20World%20Resort!5e0!3m2!1spt-BR!2sbr!4v1580921576380!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>

		</section>	

		<section class="beneficios">
			<h3 class="titulo-principal">Benefícios</h3>

			<div class="conteudo-beneficios">
				<ul class="lista-beneficios">
					<li class="itens">Atendimento aos Clientes</li>
					<li class="itens">Espaço diferenciado</li>
					<li class="itens">Localização</li>
					<li class="itens">Profissionais Qualificados</li>
					<li class="itens">Pontualidade</li>
					<li class="itens">Limpeza</li>
			</ul><img src="img/beneficios.jpg" class="imagem-beneficios">
			</div>

			<div class="video">
				<iframe width="100%" height="315" src="https://www.youtube.com/embed/wcVVXUV0YUY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>	

		</section>
	</main>

		<footer>
			<img src="img/logoempresa.png">
			<p class="copyright">&copy; Copyright Concessionária Razor - 2021</p>
		</footer>

	</body>
</html>
