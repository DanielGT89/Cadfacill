<?php
session_start();
include ('banco.php'); // Inclua o arquivo de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperando dados do formulário
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $id = $_SESSION['id']; // Supondo que você tenha o ID do usuário disponível
    
    // Verificando se a nova senha corresponde à confirmação
    if ($newPassword !== $confirmPassword) {
        echo "As senhas não correspondem";
        exit;
    }

    try {
        // Verificando a senha antiga no banco de dados
        $stmt = $pdo->prepare("SELECT senha FROM login WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $userData = $stmt->fetch();

        // Verificando se a consulta retornou dados
        if (!$userData) {
            echo "Erro ao recuperar a senha do banco de dados";
            exit;
        }

        // Verificando se a senha antiga é correta
        if ($currentPassword !== $userData['senha']) {
            echo "Senha antiga incorreta";
            echo "<p><a href='minhaconta.php'>Voltar tentar de novo</a></p>";
            exit;
        }

        // Atualizando a senha na tabela de login
        $updateStmt = $pdo->prepare("UPDATE login SET senha = :senha WHERE id = :id");
        $updateStmt->bindParam(':senha', $newPassword); // Armazena a nova senha sem hashing
        $updateStmt->bindParam(':id', $id);
        
        // Executando a atualização da senha
        if ($updateStmt->execute()) {
            echo '<script>alert("Cadastrado com sucesso"); location.href = "index.php";</script>';
        } else {
            echo "Erro ao atualizar senha";
            echo "<p><a href='minhaconta.php'>Voltar tentar de novo</a></p>";
        }
    } catch (PDOException $e) {
        echo "Erro no banco de dados: " . $e->getMessage();
        echo "<p><a href='minhaconta.php'>Voltar tentar de novo</a></p>";
    }
}
?>
