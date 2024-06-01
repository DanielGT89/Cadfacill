<?php
include('banco.php');

// Verificar se o ID do registro a ser excluído foi passado na URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta SQL para excluir o registro com base no ID
    $sql = "DELETE FROM login WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    // Executar a exclusão
    if($stmt->execute()) {
        // Exclusão bem-sucedida, redirecionar o usuário
        header("Location: relatoriologinadmin.php");
        exit();
    } else {
        // Se houver um erro ao excluir, mostrar uma mensagem de erro
        echo "Erro ao excluir o registro.";
    }
} else {
    // Se o ID do registro não foi passado na URL, redirecionar ou mostrar uma mensagem de erro
    echo "ID do registro não especificado.";
}
?>
