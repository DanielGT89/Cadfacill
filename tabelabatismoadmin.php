<?php

include('banco.php');


// Consulta SQL para selecionar os registros associados ao ID do usuário atual
$sql = "SELECT id, nome, cpf, igreja_local FROM batimos ORDER BY id DESC";
       

// Preparar a consulta
$stmt = $pdo->prepare($sql);

// Bind do valor do ID do usuário


// Executar a consulta
$stmt->execute();

?>

