<?php

$nome = $_POST['Nome'];
$motivo = $_POST['Motivo'];
$idade = $_POST['Idade'];
$email = $_POST['Email'];
$opiniao = $_POST['Opiniao'];
$checkSimNao = $_POST['txtOrganico'];
$porque = $_POST['txtPorque'];
$coment = $_POST['txtComent'];

$headers = "From: " . $nome;

$corpoemail = 'Fale Conosco - Hard Punk
				Nome:' .$nome.'
				Motivo:' .$motivo.'
				Idade:' .$idade.'
				Email:' .$email.'
				Opinião:' .$opiniao.'
				Recomendaria nosso jogo?:' .$checkSimNao.'
				Porque:' .$porque.'
				Comentário:' .$coment.' ';

if(mail("hardpunkbr@gmail.com", "Fale Conosco",$corpoemail,$headers)){

	echo "<script>alert('Mensagem enviada com sucesso');</script>";

} else{
	echo "<script>alert('Erro ao enviar, tente diretamente pelo email hardpunkbr@gmail.com');script";
}

