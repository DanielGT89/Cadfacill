<?php
include 'protetor.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadFacil</title>
    <link rel="icon" type="i11/png" href="imagen/i11.png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/minhacontasenha.css">
    
    

    
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
    
     <div class="corpo"></div>
     <div class="telalogin">
         <h1 class="alterarsenha">Alterar Senha</h1>
         <h2 class="cadfacil">CadFacil</h2>
         
    <form  action="alterarsenha.php" method="POST">

         <label for="currentPassword">Senha Antiga:</label>
         <br><br>
         <input type="password" name="currentPassword"  placeholder="Senha Antiga"maxlength="6" required oninput="this.value = this.value.slice(0, 6)" required>
         
         <br><br>
         <label for="newPassword">Senha Nova:</label>
         <br><br>
         <input type="password" name="newPassword" placeholder="Senha Nova" maxlength="6" required oninput="this.value = this.value.slice(0, 6)" required >
         <br><br>
         <label for="confirmPassword">Confirmação Senha Nova:</label>
         <br><br>
         <input type="password" name="confirmPassword" placeholder="Confirmação Senha Nova" maxlength="6" required oninput="this.value = this.value.slice(0, 6)" required>

         <button type="submit" value="Enviar" name="subnit" >Alterar Senha</button>
         <br><br>
         <a href="index.php">
             <button>Cancelar</button>
         </a>
         
     
    </form>      
    
     

    



</body>
</html>