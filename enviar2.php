<?php
//Variáveis
 
$nome = $_POST['txtNome'];
$motivo = $_POST['txtMetrica'];
$idade = $_POST['txtIdade'];
$email = $_POST['txtEmail'];
$opiniao = $_POST['txtOpiniao'];
$coment = $_POST['txtComent'];;

//enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "hardpunkbr@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $nome, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=formulario.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>