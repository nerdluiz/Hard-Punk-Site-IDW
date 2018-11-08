<?php

$nome = $_POST['txtNome'];
$motivo = $_POST['txtMetrica'];
$idade = $_POST['txtIdade'];
$email = $_POST['txtEmail'];
$opiniao = $_POST['txtOpiniao'];
$coment = $_POST['txtComent'];

$headers = "From: " . $nome;

$corpoemail = 'Fale Conosco - Hard Punk
				Nome:' .$nome.'
				Motivo:' .$motivo.'
				Idade:' .$idade.'
				Email:' .$email.'
				Opinião:' .$opiniao.'
				Comentário:' .$coment.' ';

if(mail("hardpunkbr@gmail.com", "Fale Conosco",$corpoemail,$headers)){
 
 
       echo "<script>alert('Mensagem enviada com sucesso!');</script>"; 
       header("Location: formulario.php");
 
} else{
 
      echo "<script>alert('Erro ao enviar, tente diretamente pelo email hardpunkbr@gmail.com');</script>";  

}