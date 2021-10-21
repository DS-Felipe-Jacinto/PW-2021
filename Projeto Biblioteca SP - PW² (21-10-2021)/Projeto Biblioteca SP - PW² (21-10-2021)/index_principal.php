<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Biblioteca SP - Sobre</title>
    <link rel="shortcut icon" href="img/simple-house-logo.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/banners/<?php echo date ("w");?>.png"> 
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Biblioteca SP</h1>
								<h6 class="tm-site-description">"Livros são sonhos que seguramos com as mãos"</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index_principal.php" class="tm-nav-link active">Sobre</a></li>
								<li class="tm-nav-li"><a href="categoria.php" class="tm-nav-link">Categorias</a></li>
								<li class="tm-nav-li"><a href="contact_principal.php" class="tm-nav-link">Contato</a></li>
								<li class="tm-nav-li"><a href="colaborador.php" class="tm-nav-link">Colaboradores</a></li>
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link">Sair</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>
		  
		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Seja Bem Vindo(a)!</h2>

				<h2 class="col-12 text-center tm-section-title">A sua biblioteca quando e onde você precisar</h2>
				<p class="col-12 text-center">Desenvolvida para ser o melhor provedor de conteúdo do Brasil e a melhor solução digital de e-books para você, a Biblioteca SP é uma plataforma digital de livros que possui um vasto acervo de títulos e categorias.</p>
			</header>

			    <h2 class="col-12 text-center tm-section-title">A Biblioteca SP é um acervo digital composto por milhares de títulos</h2>
				<p class="col-12 text-center">São diversas áreas de conhecimento, tais como: administração, marketing, engenharia,<br> direito, letras, economia, computação, educação, medicina, enfermagem, psiquiatria, <br> gastronomia, turismo e outras.</p><br>
				<p class="col-12 text-center">A Biblioteca SP está atualmente disponível em mais de 400 instituições de ensino, <br> com mais de 3 milhões de usuários ativos. Além dos títulos da Pearson, <br> a plataforma conta com títulos de 25 editoras parceiras.</p><br><br>

			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="img/livros.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Nossos Livros para você!</h4>
							<p class="tm-mb-45">Logo abaixo vocês podem acessar a categoria dos nossos livros. Nós da Biblioteca SP, agradecemos pela confiança.</p>
							<a href="categoria.php" class="tm-btn tm-btn-default tm-right">Categorias</a>
						
					</div>
				</div>
			</div>
		</main>

		<br><br>
		<footer>
			<p>Copyright &copy; 2020 Simple House 
            
            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>

        <p>FEITO POR: TAYNA PORFIRO, SAMARA DE ANDRADE, NICOLLY JULIANI, FELIPE JACINTO E GUSTAVO FERNANDES</p>
        </footer>

	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>