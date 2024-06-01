<?php
include('protetor.php');
include ('banco.php');

// Verifique se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id = $_POST['id'];



    // SQL UPDATE para atualizar os dados no banco de dados
    $sql ="UPDATE login 
            SET nome = :nome, 
                email = :email, 
                senha = :senha
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);
      
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':id', $id);

    


    // Execute a declaração preparada
    if ($stmt->execute()) {
        // Atualização bem-sucedida, redirecione ou exiba uma mensagem de sucesso
        echo '<script>alert("Alteração Feita com Sucesso"); location.href = "relatoriologinadmin.php";</script>';
        
        exit();
    }
}   

?>
