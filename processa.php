<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

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
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "hardpunkbr@gmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "hardpunkbr@gmail.com");
        $content = new SendGrid\Content("Fale Conosco",$corpoemail,$headers);
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";
		
        ?>
    </body>
</html>
