<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<header>
		<img class="logoAtacadao" src="./src/utils/LogoAtacadao.png" alt="">
		<img class="fachadaAtacadao" src="./src/utils/fachadaAtacadao.png" alt="">
	</header>

	<div class="container">
		<div class="divBottons mt-4">
			<button>Inicio</button>
			<button>Serviços</button>
			<button>Passivos</button>
			<button>Ativos</button>
			<button>Normas</button>
			<button>Quadro Ger.</button>
			<button>Programas</button>
			<button>Ligações</button>
			<button>CPD</button>

			<hr class="linha">

		</div>
	</div>
	<div class="container-mg container">

		<div class="carrousel mt-5 rounded-carrousel">
			<div id="meuCarrossel" class="carousel slide carousel-fade rounded-carrousel" data-bs-ride="carousel">
				<div class="carousel-inner rounded-carrousel rounded-carrousel">
					<div class="carousel-item active rounded-carrousel" data-bs-interval="30000000">
						<img src="./src/utils/LojaCarrossel.jpg " class="d-block w-100" style="object-fit: cover;"
							alt="Imagem 1">
					</div>
					<div class="carousel-item rounded-carrousel" data-bs-interval="3000">
						<img src="./src/utils/CarrinhoCarrossel.jpg" class="d-block w-100" style="object-fit: cover;" a
							alt="Imagem 2">
					</div>
					<div class="carousel-item rounded-carrousel" data-bs-interval="3000">
						<img src="./src/utils/FuncionarioCarrossel.jpg" class="d-block w-100" style="object-fit: cover;"
							a alt="Imagem 3">
					</div>
				</div>

				<button class="carousel-control-prev" type="button" data-bs-target="#meuCarrossel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Anterior</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#meuCarrossel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Próximo</span>
				</button>
			</div>
		</div>
	</div>
	<footer>
		<img src="./src/utils/logoFooter.png"  class="logoFooter" alt="">
		<p class="footerDescricao">Filial 007 Dourados - Av. Marcelino Pires, Nº 4822 Vila Industrial CEP: 79840-630
			<br> Dourados - MS <br>
			Telefone: (67) 3411-4424 <br> (67) 3411-4425
			CNPJ: 75.315.333/0007-02
		</p>
		<p class="footerCreditos">
			Equipe T.I Dourados <br>
			Programação: Flávio Irala - Desing: Alan do Nascimento
		</p>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>