<html>
	<head>
		<meta charset="utf-8">
		<title>HARD PUNK - Fale Conosco</title>
		<link href="./css/bootstrap.min.css" rel="stylesheet"/>
		<link href="./css/black.css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="./js/bootstrap.min.js"></script>
	    <script src="./js/bootstrap.js"></script>
	</head>

<body background="./images/BackgroundHP.png">

	<!--Navbar-->
	<header>
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="./Home.html"><img src="./images/Hard Punk Logo.png" height="50" width="50"  class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarN" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" style="font-family:Montserrat;" href="./TheStrangerFish.html">Strange The Fish</a></li>
            <li><a class="nav-link" style="font-family:Montserrat;" href="./SevenKingdoms.html">Seven Kingdoms</a></li>
            <li><a class="nav-link" style="font-family:Montserrat;" href="./Desenvolvedores.html">Desenvolvedores</a></li>
            <li><a class="nav-link" style="font-family:Montserrat;" href="./formulario.php">Contato</a></li>
          </ul>
        </div>
      </nav>
  </header>

	<h1 align="center" style="color:White; font-family:Montserrat;">Fale Conosco - Deixe um comentário, elogio ou reclamação!</h1>
	<h2 align="center" style="color:White; font-family:Montserrat;">Sua opinião é muito importante para nós!</h2>

	<form action="processa.php" action="infoscontroller.php" method="post" method="request" class="contactForm">
		<div class="container">					
			<div class="form-group">
				<label for="txtNome" style="color:White; font-family:Montserrat;">Nome:</label>
				<input name ="txtNome" id="txtNome" type="text" class="form-control" placeholder = "Digite seu nome"/>
			</div>

			<div class="form-group">
				<label for="txtMetrica" style="color:White; font-family:Montserrat;">Motivo:</label>
				<select name ="txtMetrica" id="txtMetrica" class="form-control">
					<option style="font-family:Montserrat;"></option>
					<option style="font-family:Montserrat;">Opnião</option>
					<option style="font-family:Montserrat;">Reclamação</option>
					<option style="font-family:Montserrat;">Dúvidas</option>
					<option style="font-family:Montserrat;">Sugestão</option>
				</select>
			</div>

			<div class="form-group">
				<label for="txtIdade" style="color:White; font-family:Montserrat;">Idade:</label>
				<input name ="txtIdade" id="txtIdade" type="number" class="form-control"/ placeholder = "Digite sua idade">
			</div>

			<div class="form-group">
				<label for="txtEmail" style="color:White; font-family:Montserrat;">E-mail:</label>
				<input name ="txtEmail" id="txtEmail" type="email" class="form-control", placeholder = "Digite seu E-mail"/>
			</div>

			<div class="form-group">
				<label for="txtOpiniao" style="color:White; font-family:Montserrat;">O que você achou do nosso jogo?</label>
				<select name ="txtOpiniao" id="txtOpiniao" class="form-control">
					<option style="font-family:Montserrat;"></option>
					<option style="font-family:Montserrat;">Legal</option>
					<option style="font-family:Montserrat;">Chato</option>
					<option style="font-family:Montserrat;">Emocionante</option>
					<option style="font-family:Montserrat;">História boa, mecânicas ruins</option>
					<option style="font-family:Montserrat;">História ruim, mecânicas boas</option>
					<option style="font-family:Montserrat;">Perfeito</option>
				</select>
			</div>

			<div class="form-group">
				<label style="color:White; font-family:Montserrat;">Você recomendaria o nosso jogo para alguém?</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="txtRecon" id="txtRecon" value="sim">
					<label class="form-check-label" for="txtRecon" style="color:White; font-family:Montserrat;">Sim</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="txtRecon" id="txtRecon" value="nao">
					<label class="form-check-label" for="txtRecon" style="color:White; font-family:Montserrat;">Não</label>
					&nbsp;&nbsp;<input name ="txtPorque" id="txtPorque" type="text" class="form-control" placeholder = "Conte-nos o porquê"/>
				</div>
				
				<div class="form-check form-check-inline">
					
				</div>
			</div>
				
			<div class="form-group">
				<label for="txtComent" style="color:White; font-family:Montserrat;">Comentário:</label>
				<textarea name ="txtComent" id="txtComent" type="text" class="form-control" rows="10" cols="60" maxlength="500" placeholder = "Digite os seus comentários sobre o nosso jogo!"></textarea>
			</div>

			<div class="form-group" align="center">				
				<button type="subit" class="btn btn-secondary" name="btn_enviar">Enviar</button>
			</div>
		</div>
		</form>
	<footer>
  		<p align="center" style="color: white;font-family:Montserrat;"> <br/>Hard Punk Group</p>
	</footer>
	</body>
</html>