<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadFacil-Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="imagen/i11.png">
    <link rel="stylesheet" href="css/global.css">
    
    
</head>
<body  >

     <div class="logo">
        <a href="login.php">
            <img src="imagen/i11.png" alt="i11.png">
        </a>
     </div>
    <div class="corpo"></div>     

    <h1 class="cadfacil">CadFacil</h1>
    <form action="logincodigo.php" method="POST" class="telalogin">
        <h1 class="loginnome">Login</h1>

        <input type="email" name="email" placeholder="seu@email.com" required >
        
        <input type="password" name="senha" placeholder="Senha" maxlength="6" required oninput="this.value = this.value.slice(0, 6)" required  >
        
        <button type="submit"  name="submit" class="entrar2"  >Entrar</button>
        <br><br>
        <a href="cadastra.php"><button type="button" class="entrar2">Cadastra-se</button></a>
        
        <br>
        <button type="button" class="recuperar" > Recuperar Senha </button>


    </form>
    
        
    
    
    
    
    
    
</body>

    
</html>
