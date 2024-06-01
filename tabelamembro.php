<?php

include('banco.php');

// Supondo que você já tenha uma conexão PDO chamada $pdo configurada previamente

// Sessão atual (substitua 'rodao' pelo nome da sessão atual)
$id_usuario = $_SESSION['id']; // Use $_SESSION['id'] para obter o ID do usuário logado

// Consulta SQL para selecionar os registros associados ao ID do usuário atual
$sql = "SELECT id, nome, cpf, igreja_local FROM cadastro WHERE id_usuario = :id_usuario ORDER BY id DESC";

// Preparar a consulta
$stmt = $pdo->prepare($sql);

// Bind do valor do ID do usuário
$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);

// Executar a consulta
$stmt->execute();

?>