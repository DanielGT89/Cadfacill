<?php

include('protetor.php');



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadFacil</title>
    <link rel="icon" type="i11/png" href="imagen/i11.png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/editarloginadmin.css">
    <link rel="stylesheet" href="css/global.css">
    

    
</head>
<body>
    <div class="back"></div>
    <header>
        <div class="t">
            <div class="logo">
            <a href="index.php">
                <img src="imagen/i11.png" alt="i11.png">
            </a>
            </div>
                 <div class="title">
                <h2>CadFacil</h2>
                </div>
        </div>
        

        <nav>
            <ul class="navegaçao">
                <li><a href="index.php">Inicio</a></li>
                         
                <li>
                    <a href="#">Cadastros</a>
                    
                    <ul class="submenu">
                        <li><a href="cadastromembro.php">Cadastro De Membros</a></li>
                        <li><a href="cadastrodebatismo.php">Cadastro De Batismo</a></li>
                         <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
                            <li><a href="relatoriobatismoadmin.php">Dados de Batismo</a></li>
                         <?php endif; ?>
                         <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
                            <li><a href="relatoriomembroadmin.php">Dados de Membros</a></li>
                         <?php endif; ?>
                         <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
                            <li><a href="relatoriologinadmin.php">Dados de Login</a></li>
                         <?php endif; ?>

                         <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
                            <li><a href="cadastroadmin.php">Cadastrar Login</a></li>
                         <?php endif; ?>
                                                
                    </ul>
                </li>
                 <li><a href="#">Minha Conta</a>
                    <ul class="sub">
                          <li><a href="minhaconta.php">Alterar Senha</a></li></ul>
                </li>    
                <li><a href="sair.php"><button type="button" class="sair" > Sair</button></a></li>
            </ul>
        </nav>
     </header>

<center>
     <?php
include('banco.php');



// Verificar se o ID do registro a ser excluído foi passado na URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta SQL para recuperar os detalhes do registro com base no ID
    $sql = "SELECT * FROM login WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Verificar se o registro existe
    if ($stmt->rowCount() == 1) {
        // Recuperar os detalhes do registro
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        // Exibir os detalhes do registro e opções para confirmar ou cancelar a exclusão
        echo "<h2>Tem certeza de que deseja excluir o seguinte registro?</h2>";
        echo "<p>ID: " . $registro['id'] . "</p>";
        echo "<p>Outros detalhes do registro...</p>";
        echo "<a href='deleteloginadmin.php?id=" . $registro['id'] . "'>Confirmar Exclusão</a>";
        echo "<p><a href='index.php'>Cancelar</a></p>";
    } else {
        // Se o registro não for encontrado, mostrar uma mensagem de erro
        echo "Registro não encontrado.";
    }
} else {
    // Se o ID do registro não foi passado na URL, redirecionar ou mostrar uma mensagem de erro
    echo "ID do registro não especificado.";
}
?>
</center>
        

     



</body>
</html>