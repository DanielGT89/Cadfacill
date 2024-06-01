<?php
include('protetor.php');
include ('tabelamembro.php');


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadFacil</title>
    <link rel="icon" type="i11/png" href="imagen/i11.png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/CADASTROSMB.css">
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

     </header>

     
       
     
    
<b> <center>

     <h1 class="label">Formulário de Cadastro Membros</h1>

     <form id="formaCadastro" action="crudmembro.php" method="POST">
        <fieldset class="bloco">
            <legend>Dados Pessoais</legend>
            <label for="denominacao">Denominação:</label>
            <input type="text" id="denominacao" name="denominacao" placeholder="Digite a denominação"  class="tamanhodecaixa" required>
            
            <label for="igreja_local">Igreja Local:</label>
            <input type="text" id="igreja_local" name="igreja_local" placeholder="Digite a igreja local" class="tamanhodecaixa" required>
            <br><br>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome Completo" class="tamanhodecaixa" required>
            <br><br>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" placeholder="dd/mm/aaaa" class="ponteiro" required>
            <label for="naturalidade">Naturalidade:</label>
            <input type="text" id="naturalidade" name="naturalidade" placeholder="Digite a naturalidade"  required>
            <label for="estado_civil">Estado Civil:</label>
            <input type="text" id="estado_civil" name="estado_civil" placeholder="Digite o estado civil"  required>
            <br><br>
            <label for="conjuge">Nome do Cônjuge:</label>
            <input type="text" id="conjuge" name="conjuge" placeholder="Digite o nome do cônjuge"  class="tamanhodecaixa" required>
            <label for="filiacao_pai">Filiação do Pai:</label>
            <input type="text" id="filiacao_pai" name="filiacao_pai" placeholder="Digite a filiação do pai"  class="tamanhodecaixa" required>
            <br><br>
            <label for="filiacao_mae">Filiação da Mãe:</label>
            <input type="text" id="filiacao_mae" name="filiacao_mae" placeholder="Digite a filiação da mãe"  class="tamanhodecaixa" required>
        </fieldset>
    
        <fieldset class="bloco">
            <legend>Informações Profissionais</legend>
            <label for="empregado">Situação Profissional:</label>
            <input type="radio" id="empregado" name="situacao_profissional" value="Empregado"  class="ponteiro" required>
            <label for="empregado">Empregado</label>
            <input type="radio" id="desempregado" name="situacao_profissional" value="Desempregado" class="ponteiro" required>
            <label for="desempregado">Desempregado</label><br><br>
            <label for="profissao">Profissão:</label>
            <input type="text" id="profissao" name="profissao" placeholder="Digite a profissão" class="tamanhodecaixa2"  required>
            <label for="tiposescolaridade">Escolaridade:</label>
            <input type="text" id="tiposescolaridade"  name="tiposescolaridade" placeholder=" Selecione Escolaridade"  class="escolaridade" required>
            
        </fieldset>
        
        <fieldset class="bloco">
            <legend>Documentos e Contato</legend>
            <label for="rg">RG:</label>
            <input type="text" id="rg" name="rg" placeholder="Digite o RG" maxlength="12" required oninput="this.value = this.value.slice(0, 12)" >
        
            <label for="cpf">CPF:</label>
            <input type="number" id="cpf" name="cpf" placeholder="Digite o CPF" maxlength="15" required oninput="this.value = this.value.slice(0, 15)" required><br><br>
        
            <label for="telefone1">Telefone 1:</label>
            <input type="tel" id="telefone1" name="telefone1" placeholder="(xx) xxxxx-xxxx"  required>
        
            <label for="telefone2">Telefone 2:</label>
            <input type="tel" id="telefone2" name="telefone2" placeholder="(xx) xxxxx-xxxx">
        
            <label for="telefone3">Telefone 3:</label>
            <input type="tel" id="telefone3" name="telefone3" placeholder="(xx) xxxxx-xxxx" ><br><br>
        
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" placeholder="Digite o endereço" class="tamanhodecaixa"  required>
        
            <label for="numero">Numero/Casa</label>
            <input type="text" name="numero" id="numero" placeholder="Digite Numero ou Casa" class="tamanhodecaixa2" required>
        
            <label for="setor_bairro">Setor/Bairro</label>
            <input type="text" id="setor_bairro" name="setor_bairro" placeholder="Digite seu Setor ou Bairro" class="tamanhodecaixa2"  required><br><br>
        
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" placeholder="Digite a cidade"  required>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" placeholder="Digite o estado"  required>
            <label for="cep">CEP:</label>
            <input type="number" id="cep" name="cep" placeholder="Digite o CEP"  required><br><br>
        </fieldset>
        
    
        <fieldset class="bloco">
            <legend>Informações Religiosas</legend>
            <label for="batismo_espirito_santo">Batizado no Espírito Santo?</label>
            <input type="radio" id="batismosanto_sim" name="batismo_espirito_santo" value="Sim" class="ponteiro" required>
            <label for="batismosanto_sim">Sim</label>
            <input type="radio" id="batismosanto_nao" name="batismo_espirito_santo" value="Não" class="ponteiro" required>
            <label for="batismosanto_nao">Não</label>&nbsp;&nbsp;&nbsp;
            <label for="data_batismo_espirito">Quando?</label>
            <input type="date" id="data_batismo_espirito" name="data_batismo_espirito" placeholder="dd/mm/aaaa" class="ponteiro" ><br><br>        
            <label for="batismo_aguas">Batizado nas Águas?</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" id="batismo_aguas_s" name="batismo_aguas" value="Sim" class="ponteiro" required>
            <label for="batismo_aguas_s">Sim</label>
            <input type="radio" id="batismo_aguas_n" name="batismo_aguas" value="Não" class="ponteiro" required>
            <label for="batismo_aguas_n">Não</label><br><br>&nbsp;&nbsp;&nbsp;
            <label for="data_batismo_aguas">Data do Batismo:</label>
            <input type="date" id="data_batismo_aguas" name="data_batismo_aguas" placeholder="dd/mm/aaaa" class="ponteiro" >
            <label for="igreja_batismo_aguas_nomeigreja">Na Igreja:</label>
            <input type="text" id="igreja_batismo_aguas_nomeigreja" name="igreja_batismo_aguas_nomeigreja" placeholder="Digite a igreja do Batismo" class="tamanhodecaixa"><br><br>
            <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id']; ?>"> <!--- Viculado ao arquivo tabelamembro.php // trazer cadastro ja feito pelo mesmo--->
            <input type="hidden" name="id_registro" value="<?php echo $_SESSION['id']; ?>"> <!--- Viculado ao arquivo CRUDMEMBRO.PHP // fazer cadastro--->

           
        
            <input type="reset" value="Limpar" class="botao">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Enviar" id="enviar" class="botao">
        </fieldset>
        
      </form>     
      
      <table border="1" width="1500px" class="tabela">
            <thead height="50px">
                <tr >
                    <th class="tabela" >ID</th>
                    <th class="tabela">Nome</th>
                    <th class="tabela">CPF</th>
                    <th class="tabela">Igreja Local</th>
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
                        echo "<td>" . $row['cpf'] . "</td>";
                        echo "<td>" . $row['igreja_local'] . "</td>";
                        echo "<td><a href='editarmembro.php?id=" . $row['id'] . "'>Editar</a></td>"; // chamando CRUDEDITAR para fazer alateraçao no cadastro
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhum registro encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>

  




</body>
</html>