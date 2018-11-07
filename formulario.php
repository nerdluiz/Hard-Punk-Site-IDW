<html>
	<head>
		<meta charset="utf-8">
		<title>HARD PUNK - Fale Conosco</title>
		<link href="./css/bootstrap.min.css" rel="stylesheet"/>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="./js/bootstrap.min.js"></script>
	    <script src="./js/bootstrap.js"></script>
	</head>

<body>

	<!--Navbar-->
	<header>
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="./Home.html"><img src="./Hard Punk Logo.png" height="50" width="50"  class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarN" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href="./TheStrangerFish.html">Sobre o Jogo</a></li>
            <li><a class="nav-link" href="./Desenvolvedores.html">Desenvolvedores</a></li>
            <li><a class="nav-link" href="./formulario.php">Contato</a></li>
          </ul>
        </div>
      </nav>
    </header>

	<h1 align="center">Fale Conosco - Deixe um comentário, elogio ou reclamação!</h1>
	<h2 align="center">Sua opnião é muito importante para nós!</h2>

	<form action="enviar.php" method="post" class="contactForm">
		<div class="container">					
			<div class="form-group">
				<label for="txtNome">Nome:</label>
				<input name ="txtNome"id="txtNome" type="text" class="form-control"/>
			</div>

			<div class="form-group">
				<label for="txtMetrica">Motivo:</label>
				<select name ="txtMetrica" id="txtMetrica" class="form-control">
					<option disabled selected></option>
					<option>Opnião</option>
					<option>Reclamação</option>
					<option>Dúvidas</option>
					<option>Sugestão</option>
				</select>
			</div>

			<div class="form-group">
				<label for="txtIdade">Idade:</label>
				<input name ="txtIdade" id="txtIdade" type="number" class="form-control"/>
			</div>

			<div class="form-group">
				<label for="txtEmail">E-mail:</label>
				<input name ="txtEmail" id="txtEmail" type="text" class="form-control"/>
			</div>

			<div class="form-group">
				<label for="txtOpiniao">O que você achou do nosso jogo?</label>
				<select name ="txtOpiniao" id="txtOpiniao" class="form-control">
					<option disabled selected></option>
					<option>Legal</option>
					<option>Chato</option>
					<option>Emocionante</option>
					<option>História boa, mecânicas ruins</option>
					<option>História ruim, mecânicas boas</option>
					<option>Perfeito</option>
				</select>
			</div>

			<div class="form-group">
				<label>Você recomendaria o nosso jogo para alguém?</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="txtOrganico" id="txtOrgSim" value="sim">
					<label class="form-check-label" for="txtOrgSim">Sim</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="txtOrganico" id="txtOrgNao" value="nao">
					<label class="form-check-label" for="txtOrgNao">Não</label>
				</div>
				<br/>
				<div class="form-check form-check-inline">
					<label for="txtPorque">Porque? </label>
					<input name ="txtPorque" id="txtPorque" type="text" class="form-control"/>
				</div>
			</div>
				
			<div class="form-group">
				<label for="txtComent">Comentário:</label>
				<textarea name ="txtComent" id="txtComent" type="text" class="form-control" rows="10" cols="60" maxlength="500">Digite os seus comentários sobre o nosso jogo!</textarea>
			</div>

			<div class="form-group">				
				<button type="button" class="btn btn-primary">Enviar </button>
			</div>
		</div>
		</form>
		<footer>
  		<p align="center"> <br/>Hard Punk Group</p>
	</footer>
	</body>
</html>