<?php

include ('protetor.php');


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
                            <li><a href="cadastroadmin.php">Cadastrar de Login</a></li>
                         <?php endif; ?>
                    </ul>
                </li>
                <li><a href="#">Minha Conta</a>
                    <ul class="sub">
                          <li><a href="minhaconta.php">Alterar Senha</a></li></ul>
                </li>    
                <li><a href="sair.php"><button type="button" class="sair" >Sair</button></a></li>
            </ul>
        </nav>
     </header>


        <form action="cadastrobancoadmin.php" method="POST" class="tela">

                        <h2 class="alterar">Cadastro Login</h2>
            <div >
                <div><label>Nome</label></div>
                <input type="text" name="nome" placeholder="Nome"   required/>
                
            </div>

            <div >
                <div><label>Email</label></div>
                <input type="email" name="email" placeholder="seu@email.com"  required/>
                
            </div>
            <div >
                <div><label>Senha</label></div>
                <input type="password" name="senha" placeholder="Senha" maxlength="6" required oninput="this.value = this.value.slice(0, 6)" required>
                
           
            
            <br>
            
            <div> 
            <input type="submit" value="Cadastrar"  class="botao">

            </div>

            <a href="index.php">
                <button class="botao2">Cancelar</button>
            </a>
            


        </form> 
           
        
    </div>
    
   
</body>
</html>