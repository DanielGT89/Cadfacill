<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadFacil</title>
    <link rel="icon" type="i11/png" href="imagen/i11.png">
    <link rel="stylesheet" href="css/cadastra.css">
    
    


    
</head>
<body>
    
    <div class="logo">
        <a href="login.php">
            <img src="imagen/i11.png" alt="i11.png">
        </a>
    </div>
        <div class="corpo"></div>
        <div class="telalogin">
            <h1 class="cadastra">Cadastra-se</h1>
            <h2 class="cadfacil">CadFacil</h2>
            
            <form action="cadastracodigo.php" method="post">
            
            <div >
                <div><label>Nome</label></div>
                <input type="text" name="nome" placeholder="Nome"  required/>
                
            </div>

            <div >
                <div><label>Email</label></div>
                <input type="email" name="email" placeholder="seu@email.com"  required/>
                
            </div>
            <div >
                <div><label>Senha</label></div>
                <input type="password" name="senha" placeholder="Senha" maxlength="6" required oninput="this.value = this.value.slice(0, 6)" required>
                
            </div>
                <button type="submit" name="submit"  value="Enviar">Registrar</button>
            </div>
            <br>
            <div> 
                <a href="login.php" >
                    <button type="button" class="botao">Login</button>

                </a>
            </div>


           </form> 
           
        
    </div>
    
   
</body>
</html>