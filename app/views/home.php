	<title>Faith - Terceirização de Serviços</title>
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbartoggleable-sm navbar-light bg-faded fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="app/img/logo.png" alt="Faith"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#sobre">Sobre a Empresa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#servicos">Serviços</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contato">Contato</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>

<main role="main">
	<div class="bd">
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="app/img/jardinagem.png" class="d-block w-100" alt="jardinagem">
				</div>
				<div class="carousel-item">
					<img src="app/img/limpeza.png" class="d-block w-100" alt="limpeza">
				</div>
				<div class="carousel-item">
					<img src="app/img/portaria.png" class="d-block w-100" alt="portaria">
				</div>
				<div class="carousel-item">
					<img src="app/img/recepcao.png" class="d-block w-100" alt="recepçao">
				</div>
				<div class="carousel-item">
					<img src="app/img/seguranca.png" class="d-block w-100" alt="segurança">
				</div>
				<div class="carousel-item">
					<img src="app/img/zeladoria.png" class="d-block w-100" alt="gerais">
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron sobre sobre-text" id="sobre">
		<div class="container">
			<h2 class="featurette-heading text-center" style="color: #6C757D;">Sobre a Empresa</h2>
			<div class="row">
				<div class="col-sm-5 col-md-7 prod-text">
					<p class="lead text-justify">
						A <span class="text-muted"><strong>FAITH</strong></span> surgiu no mercado, com o
						objetivo de ser o diferencial no segmento de prestação de serviços
						terceirizados, para tanto, capacitamos nossos profissionais a atuarem em
						áreas específicas, sempre focando a satisfação de nossos clientes. Temos
						consciência que, a cada dia, o mercado fica mais exigente e competitivo,
						mas a atualização constante dos profissionais garante a eficácia dos
						serviços prestados, assegurando a tranqüilidade de nossos clientes. 
					</p>
				</div>
				<div class="col-sm-7 col-md-5 prod-img">
					<img class="featurette-image img-fluid mx-auto" src="app/img/maos.jpg" alt="Generic placeholder image">
				</div>
			</div>
		</div>
	</div>
		
	<div class="jumbotron servicos serv-text" id="servicos">
		<div class="container">
			<h2 class="text-center" style="color: #6C757D;">Serviços</h2>
			<div class="row">
				<div class="col-12">
					<div class="card-deck card-sevicos justify-content">
						<a href="#detalhes"><img src="app/img/circle_jardinagem.png" class="circle-sombra rounded-circle" id="jardinagem" alt="jardinagem"></a>
						<a href="#detalhes"><img src="app/img/circle_limpeza.png" class="circle-sombra rounded-circle" id="limpeza" alt="limpeza"></a>
						<a href="#detalhes"><img src="app/img/circle_portaria.png" class="circle-sombra rounded-circle" id="portaria" alt="portaria"></a>
						<a href="#detalhes"><img src="app/img/circle_recepcao.png" class="circle-sombra rounded-circle" id="recepcao" alt="recepção"></a>
						<a href="#detalhes"><img src="app/img/circle_seguranca.png" class="circle-sombra rounded-circle" id="seguranca" alt="segurança"></a>
						<a href="#detalhes"><img src="app/img/circle_zeladoria.png" class="circle-sombra rounded-circle" id="zeladoria" alt="zeladoria"></a>		
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron detalhes" style="display: none;" id="detalhes"></div>

	<div class="jumbotron contato" id="contato">
		<div class="container">
			<div class="email-text">
				<h2 class="text-center" style="margin-bottom: 40px; color: #fff;">Entre em Contato</h2>
				<div class="tel">
					<p class="lead text-center" style="color: #fff;">
						<a style="text-decoration: none; color: #fff;" href="http://api.whatsapp.com/send?1=pt_BR&phone=5511947180884">
							<img id="whats" src="app/img/whats.png" alt="Fale conosco agora!"><br>
							<span><b>Fale conosco agora!</b></span>
						</a>
						<br><br>
						Telefone: (11) 2311-8093<br>
						Celular: (11) 94718-0884<br>
						ou<br>
						Envie sua solicitação
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="email-form">
						<form id="envia-email" method="POST">
							<div id="msg_usuario">
								<?php 
									include_once 'app/php/envia_email.php'; // Envia email
									if(isset($_SESSION['msg_usuario'])) echo $_SESSION['msg_usuario']; 
									$_SESSION['msg_usuario']='';
								?>
							</div>
							<div class="form-group">
								<label for="nome" style="color: #fff;">Nome</label>
								<input type="text" class="form-control form-control-md" id="nome" name="nome" placeholder="Nome" required>
							</div>

							<div class="form-group">
								<label for="telefone" style="color: #fff;">Telefone</label>
								<input type="text" class="form-control form-control-md" id="telefone" name="telefone" placeholder="(xx) xxxx-xxxx">
							</div>

							<div class="form-group">
								<label for="email" style="color: #fff;">E-mail</label>
								<div class="input-group mb-2 mr-sm-2">
									<div class="input-group-prepend">
										<div class="input-group-text">@</div>
									</div>
									<input type="text" class="form-control form-control-md" id="email" name="email" placeholder="e-mail" required>
								</div>
							</div>

							<div class="form-group">
								<label for="servicos" style="color: #fff;">Serviço</label>
								<select class="custom-select my-1 mr-sm-2" id="servicos" name="servicos">
									<option value="Selecione..." selected>Selecione...</option>
									<option value="Jardinagem">Jardinagem</option>
									<option value="Limpeza">Limpeza</option>
									<option value="Portaria">Portaria</option>
									<option value="Recepção">Recepção</option>
									<option value="Segurança">Segurança</option>
									<option value="Zeladoria">Zeladoria</option>
								</select>
							</div>

							<div class="form-group" style="color: #fff;">
								<label for="msg">Digite sua mensagem</label>
								<textarea class="form-control" id="msg" name="msg" charset="255" rows="5" required></textarea>
							</div>

							<button type="submit" class="btn btn-primary">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="lead endereco text-center text-white">
			Rua Regina Ducca, 15 - Sala 1 | Rudge Ramos - São Bernardo do Campo
		</div>
	</div>
</main>