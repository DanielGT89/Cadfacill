
<?php
include 'banco.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
        
        // Verifica se o email já existe no banco
        $stmt_check = $pdo->prepare("SELECT * FROM login WHERE email = :email");
        $stmt_check->bindParam(':email', $email);
        $stmt_check->execute();
        $result = $stmt_check->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            echo "Este email já está em uso. Por favor, escolha outro.";
            echo "<p><a href='cadastra.php'>Voltar é tentar de novo</a></p>";
            exit; // Encerra o script
        }
      
        $sql = "INSERT INTO login (nome, email, senha) VALUES (:nome, :email, :senha)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        
        $stmt->execute();
        echo '<script>alert("Registro com Sucesso"); location.href = "relatoriologinadmin.php";</script>';
        exit; 
    } catch(PDOException $e) {
        echo "Erro ao inserir no banco de dados: " . $e->getMessage();
    }
}
?>
