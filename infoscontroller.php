<?php
    $db = new PDO('mysql:host=127.0.0.1;dbname=localbd;charset=utf8', 'root', '');
	$nome = $_REQUEST['txtNome'];
	$button = $_REQUEST['btn_enviar'];
	
	if ($button == "Enviar") {
        $idade = $_REQUEST['txtIdade'];
        $opiniao = $_REQUEST['txtOpiniao'];
        $sql = "INSERT INTO infos(nome, idade, opiniao)"; 
        $sql = $sql . "VALUES (:nome,:idade , :opiniao)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
		$stmt->bindValue(':idade', $idade, PDO::PARAM_INT);
		$stmt->bindValue(':opiniao', $opiniao, PDO::PARAM_STR);
		$stmt->execute();
        $result = $stmt->rowCount(); }
?>