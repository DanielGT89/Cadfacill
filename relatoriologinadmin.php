<?php

include('protetor.php');
include('tabelaloginadmin.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadFacil</title>
    <link rel="icon" type="i11/png" href="imagen/i11.png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cartadeapresentaçao.css">
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
                            <li><a href="relatoriologinadmin.php">Dados Login</a></li>
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
     <table border="1" width="1500px" class="tabela">
            <thead height="50px">
                <h2 class="facilite">Tabela Login</h2>
                <tr >
                
                    <th class="tabela" >ID</th>
                    <th class="tabela">Nome</th>
                    <th class="tabela">Email</th>
                    <th class="tabela">Senha</th>
                    <th class="tabela">Ações</th>
                    <th class="tabela">Ações</th>
                </tr>
            </thead>
        
            <tbody class="tabela">
                <?php
                // Verificar se há resultados da consulta
                if ($stmt->rowCount() > 0) {
                    // Iterar sobre os resultados
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['senha'] . "</td>";
                        echo "<td><a href='editarloginadmin.php?id=" . $row['id'] . "'>Editar</a> </td>";
                        echo "<td><a href='excluirloginadmin.php?id=" . $row['id'] . "'>Excluir</a></td>"; 
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhum registro encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
</center>
     



</body>
</html>