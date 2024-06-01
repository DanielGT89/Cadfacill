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
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/roleta.css">    
    

    
</head>
<body >
    
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
                        <li><a href="cadastromembro.php">Cadastro de Membros</a></li>
                        <li><a href="cadastrodebatismo.php">Cadastro de Batismo</a></li>
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


    
            
                <img src="imagen/user.png" alt="user.png" class="user">

                <h1 class="nomelogin"><?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : 'Nome de Usuário' ; ?> <?php echo ($_SESSION['tipo']) ?? $_SESSION['tipo']; ?></h1>
           

           

            <div class="carousel">
                <input type="radio" id="slide1" name="slides" checked>
                <input type="radio" id="slide2" name="slides">
                <input type="radio" id="slide3" name="slides">
                <input type="radio" id="slide4" name="slides">
    
    <div class="slides">
        <div class="slide" id="slide-1">
            <img src="imagen/v5.png" alt="v5.png">
        </div>
        <div class="slide" id="slide-2">
            <img src="imagen/v2.png"alt="v2.png">
        </div>
        <div class="slide" id="slide-3">
            <img src="imagen/v3.png" alt="v3.png">
        </div>
        <div class="slide" id="slide-3">
            <img src="imagen/v4.png" alt="v4.png">
        </div>
        
    </div>
    <div class="navigation">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide3"></label>
        
    </div>
</div>

<script src="javascript/roleta.js"></script>





     <div class="container">
      
git 


        <div class="foto-container"><h2 class="pronome2">Cadastro de Membros</h2> <a href="cadastromembro.php">
            <img class="foto" src="imagen/i57.jpg" alt="Imagem 2">
        </a>
            
        </div>
        <div class="foto-container"><h2 class="pronome2">Cadastro de Batismo</h2> <a href="cadastrodebatismo.php">
            <img class="foto" src="imagen/i57.jpg" alt="Imagem 2">
        </a>
            
        </div>

        
         

        
    </div>
     <div class="container1">

    <?php
               
                if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
                    
                    echo '<div class="foto-container1">';
                    echo '<h2 class="pronome"> Dados Batismo </h2>';
                    echo '<a href="relatoriobatismoadmin.php"><img class="foto1" src="imagen/i50.png" alt="Imagem 1"></a>';
                
                }

                echo '</div>';
            
        

    
                 
            if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
                echo '<div class="foto-container1">';
                echo '<h2 class="pronome"> Dados Membro </h2>';
                echo '<a href="relatoriomembroadmin.php"><img class="foto1" src="imagen/i50.png" alt="Imagem 3"></a>';
               
            }

            echo '</div>';
     ?>




     
     </div>
   
  
    
</body>
</html>