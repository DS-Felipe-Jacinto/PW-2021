<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Biblioteca SP - Colaboradores</title>
    <link rel="shortcut icon" href="img/simple-house-logo.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
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
								<li class="tm-nav-li"><a href="index_principal.php" class="tm-nav-link">Sobre</a></li>
								<li class="tm-nav-li"><a href="categoria.php" class="tm-nav-link">Categorias</a></li>
								<li class="tm-nav-li"><a href="contact_principal.php" class="tm-nav-link">Contato</a></li>
								<li class="tm-nav-li"><a href="colaborador.php" class="tm-nav-link active">Colaboradores</a></li>
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link">Sair</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Colaboradores</h2>
				<p class="col-12 text-center">Seja um colaborador da Biblioteca SP! Conheça nossa biblioteca, temos muitas novidades para lançar e para isso precisamos aumentar a nossa equipe de colaboradores. Preencha abaixo com suas informações, e venha ser um colaborador da Biblioteca SP. Obrigada ;).</p>
			</header>

			<div class="tm-container-inner-2 tm-contact-section">
				<div class="row">
					<div class="col-md-6">
						<form action="bd_colaborador.php" method="POST" class="tm-contact-form">
					        <div class="form-group">
					          <input type="text" name="nome_colaborador" class="form-control" placeholder="Nome" required="" />
					        </div>
					        
					        <div class="form-group">
					          <input type="email" name="email_colaborador" class="form-control" placeholder="Email" required="" />
					        </div>
				
					        <div class="form-group">
					          <input type="number" name="telefone_colaborador" class="form-control" placeholder="Telefone" required="" />
					        </div>

					        <div class="form-group">
					          <input type="number" name="cnpj_colaborador" class="form-control" placeholder="CNPJ" required="" />
					        </div>

					        <div class="form-group">
					          <textarea rows="5" name="mensagem_colaborador" class="form-control" placeholder="Mensagem" required=""></textarea>
					        </div>
					
					        <div class="form-group tm-d-flex">
					          <button type="submit" class="tm-btn tm-btn-success tm-btn-right">
					            Enviar
					          </button>
					        </div>
						</form>
					</div>
					<div class="col-md-6">
						<div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success">Fale Conosco</h4>
							<a href="tel:2089-0800" class="tm-contact-link">
								<i class="fas fa-phone tm-contact-icon"></i>2089-0800
							</a>
							<a href="mailto:contato@bsp.org.br" class="tm-contact-link">
								<i class="fas fa-envelope tm-contact-icon"></i>contato@bsp.org.br
							</a>
							<div class="tm-contact-social">
								<a href="https://fb.com/BSPbiblioteca" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
								<a href="https://www.instagram.com/bspbiblioteca/?hl=pt-br" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
								<a href="https://twitter.com/BSPbiblioteca?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
            
            <div class="tm-container-inner tm-featured-image">
				<div class="row">
					<div class="col-12">
						<div class="placeholder-2">
							<div class="parallax-window-2" data-parallax="scroll" data-image-src="img/bibli.png"></div>		
						</div>
					</div>
				</div>
			</div>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
		<div>
			<div class="tm-container-inner-2 tm-info-section">
				<div class="row">
					<div class="col-12 tm-faq">
						<h2 class="text-center tm-section-title">Veja alguns de nossos colaboradores</h2>

						<div class="row">
						<div class="coluna">
						<img src="img/imagem1.jpeg" alt="" style="width:100%">
						</div>
						<div class="coluna">
						<img src="img/imagem2.jpeg" alt="" style="width:101%">
						</div>
						<div class="coluna">
						<img src="img/imagem3.jpeg" alt="" style="width:128.5%">
						</div>

					</div>
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
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight) {
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    }
			  });
			}	
		});
	</script>
</body>
</html>