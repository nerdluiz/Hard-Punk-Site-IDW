<html>
	<head>
		<meta charset="utf-8">
		<title>HARD PUNK - Fale Conosco</title>
		<link href="./css/bootstrap.min.css" rel="stylesheet"/>
		<link href="./css/black.css" rel="stylesheet"/>

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="./js/bootstrap.min.js"></script>
	    <script src="./js/bootstrap.js"></script>
	</head>

<body background="Gray.jpg" >

	<!--Navbar-->
	<header>
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="./Home.html"><img src="./Hard Punk Logo.png" height="50" width="50"  class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarN" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href="./TheStrangerFish.html">Strange The Fish</a></li>
            <li><a class="nav-link" href="./SevenKingdoms.html">Seven Kingdoms</a></li>
            <li><a class="nav-link" href="./Desenvolvedores.html">Desenvolvedores</a></li>
            <li><a class="nav-link" href="./formulario.php">Contato</a></li>
          </ul>
        </div>
      </nav>
    </header>

	<h1 align="center" style="color:White">Fale Conosco - Deixe um comentário, elogio ou reclamação!</h1>
	<h2 align="center" style="color:White">Sua opinião é muito importante para nós!</h2>

	<form action="processa.php" action="infoscontroller.php" method="post" method="request" class="contactForm">
		<div class="container">					
			<div class="form-group">
				<label for="txtNome" style="color:White">Nome:</label>
				<input name ="txtNome" id="txtNome" type="text" class="form-control" placeholder = "Digite seu nome"/>
			</div>

			<div class="form-group">
				<label for="txtMetrica" style="color:White">Motivo:</label>
				<select name ="txtMetrica" id="txtMetrica" class="form-control">
					<option></option>
					<option>Opnião</option>
					<option>Reclamação</option>
					<option>Dúvidas</option>
					<option>Sugestão</option>
				</select>
			</div>

			<div class="form-group">
				<label for="txtIdade" style="color:White">Idade:</label>
				<input name ="txtIdade" id="txtIdade" type="number" class="form-control"/ placeholder = "Digite sua idade">
			</div>

			<div class="form-group">
				<label for="txtEmail" style="color:White">E-mail:</label>
				<input name ="txtEmail" id="txtEmail" type="email" class="form-control", placeholder = "Digite seu E-mail"/>
			</div>

			<div class="form-group">
				<label for="txtOpiniao" style="color:White">O que você achou do nosso jogo?</label>
				<select name ="txtOpiniao" id="txtOpiniao" class="form-control">
					<option></option>
					<option>Legal</option>
					<option>Chato</option>
					<option>Emocionante</option>
					<option>História boa, mecânicas ruins</option>
					<option>História ruim, mecânicas boas</option>
					<option>Perfeito</option>
				</select>
			</div>

			<div class="form-group">
				<label style="color:White">Você recomendaria o nosso jogo para alguém?</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="txtRecon" id="txtRecon" value="sim">
					<label class="form-check-label" for="txtRecon" style="color:White">Sim</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="txtRecon" id="txtRecon" value="nao">
					<label class="form-check-label" for="txtRecon" style="color:White">Não</label>
					&nbsp;&nbsp;<input name ="txtPorque" id="txtPorque" type="text" class="form-control" placeholder = "Conte-nos o porquê"/>
				</div>
				
				<div class="form-check form-check-inline">
					
				</div>
			</div>
				
			<div class="form-group">
				<label for="txtComent" style="color:White">Comentário:</label>
				<textarea name ="txtComent" id="txtComent" type="text" class="form-control" rows="10" cols="60" maxlength="500" placeholder = "Digite os seus comentários sobre o nosso jogo!"></textarea>
			</div>

			<div class="form-group">				
				<input type="submit" name="btn_enviar" value="Enviar">
			</div>
		</div>
		</form>
		<footer>
  		<p align="center" style="color:White"> <br/>Hard Punk Group</p>
	</footer>
	</body>
</html>