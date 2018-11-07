<?php

$nome = $_POST['Nome'];
$motivo = $_POST['Motivo'];
$idade = $_POST['Idade'];
$email = $_POST['Email'];
$opiniao = $_POST['Opiniao'];
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
 	  header("Location: formulario.php");

}