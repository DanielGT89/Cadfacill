<?php
session_start(); 

include('banco.php'); 

if(isset($_POST['email']) && isset($_POST['senha'])) { 

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(empty($email)) {
        echo "Preencha seu e-mail";
    } elseif(empty($senha)) {
        echo "Preencha sua senha";
    } else {
        
        $stmt = $pdo->prepare("SELECT * FROM login WHERE email = ? AND senha = ?");

        
        $stmt->execute([$email, $senha]);

        
        $quantidade = $stmt->rowCount();

        if($quantidade == 1) { 
            
            
            $login = $stmt->fetch(PDO::FETCH_ASSOC);

            
            $_SESSION['id'] = $login['id'];
            $_SESSION['nome'] = $login['nome'];
            $_SESSION['tipo'] = $login['tipo'];


            if($login['tipo'] == 'administrador') {
                $_SESSION['admin'] = true;

            }    
            
            header("Location: index.php");
            exit(); 
            
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
            echo "<p><a href='login.php'>Voltar é tentar de novo</a></p>";
        }
    }

}
?>
