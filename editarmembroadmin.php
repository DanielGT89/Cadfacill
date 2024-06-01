<?php
include ('protetor.php');
include ('banco.php');



if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta SQL para recuperar os dados do registro com base no ID
    $sql = "SELECT * FROM cadastro WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Verifique se o registro existe
    if ($stmt->rowCount() == 1) {
        // Recupere os dados do registro
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        
       
            $denominacao = $registro['denominacao'];
            $igreja_local = $registro['igreja_local'];
            $denominacao = $registro['denominacao'];
            $igreja_local = $registro['igreja_local'];
            $nome = $registro['nome'];
            $data_nascimento = $registro['data_nascimento'];
            $naturalidade = $registro['naturalidade'];
            $estado_civil = $registro['estado_civil'];
            $conjuge = $registro['conjuge'];
            $filiacao_pai = $registro['filiacao_pai'];
            $filiacao_mae = $registro['filiacao_mae'];
            $situacao_profissional = $registro['situacao_profissional'];
            $profissao = $registro['profissao'];
            $tiposescolaridade = $registro['tiposescolaridade'];
            $rg = $registro['rg'];
            $cpf = $registro['cpf'];
            $telefone1 = $registro['telefone1'];
            $telefone2 = $registro['telefone2'];
            $telefone3 = $registro['telefone3'];
            $endereco = $registro['endereco'];
            $numero = $registro['numero'];
            $setor_bairro = $registro['setor_bairro'];
            $cidade = $registro['cidade'];
            $estado = $registro['estado'];
            $cep = $registro['cep'];
            $batismo_espirito_santo = $registro['batismo_espirito_santo'];
            $data_batismo_espirito = $registro['data_batismo_espirito'];
            $batismo_aguas = $registro['batismo_aguas'];
            $data_batismo_aguas = $registro['data_batismo_aguas'];
            $igreja_batismo_aguas_nomeigreja = $registro['igreja_batismo_aguas_nomeigreja'];
            $id = $_GET['id'];

        } else {
            // Se o registro não for encontrado, redirecione ou mostre uma mensagem de erro
            echo "Registro não encontrado.";
        }
    } else {
        // Se o ID do registro não foi passado na URL, redirecione ou mostre uma mensagem de erro
        echo "ID do registro não especificado.";
    }
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

     </header>

     
       
     
    
<b> <center>

     <h1 class="label">Formulário de Cadastro Membros</h1>

     <form id="formaCadastro" action="alterarmembroadmin.php" method="POST">
        <fieldset class="bloco">
            <legend>Dados Pessoais</legend>
            <label for="denominacao">Denominação:</label>
            <input type="text"  name="denominacao" placeholder="Digite a denominação"  class="tamanhodecaixa" value="<?php echo htmlspecialchars($denominacao); ?>" required>
            
            <label for="igreja_local">Igreja Local:</label>
            <input type="text"  name="igreja_local" placeholder="Digite a igreja local" class="tamanhodecaixa" value="<?php echo htmlspecialchars($igreja_local); ?>"  required>
            <br><br>
            <label for="nome">Nome:</label>
            <input type="text"  name="nome" placeholder="Digite o nome Completo"  class="tamanhodecaixa" value="<?php echo htmlspecialchars($nome); ?>" required>
            <br><br>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date"  name="data_nascimento" placeholder="dd/mm/aaaa"  class="ponteiro" value="<?php echo htmlspecialchars($data_nascimento); ?>" required>
            <label for="naturalidade">Naturalidade:</label>
            <input type="text"  name="naturalidade" placeholder="Digite a naturalidade" value="<?php echo htmlspecialchars($naturalidade); ?>" required>
            <label for="estado_civil">Estado Civil:</label>
            <input type="text"  name="estado_civil" placeholder="Digite o estado civil" value="<?php echo htmlspecialchars($estado_civil); ?>" required>
            <br><br>
            <label for="conjuge">Nome do Cônjuge:</label>
            <input type="text"  name="conjuge" placeholder="Digite o nome do cônjuge"  class="tamanhodecaixa" value="<?php echo htmlspecialchars($conjuge); ?>" required>
            <label for="filiacao_pai">Filiação do Pai:</label>
            <input type="text"  name="filiacao_pai" placeholder="Digite a filiação do pai"  class="tamanhodecaixa" value="<?php echo htmlspecialchars($filiacao_pai); ?>" required>
            <br><br>
            <label for="filiacao_mae">Filiação da Mãe:</label>
            <input type="text"  name="filiacao_mae" placeholder="Digite a filiação da mãe"  class="tamanhodecaixa" value="<?php echo htmlspecialchars($filiacao_mae); ?>" required>
        </fieldset>
    
        <fieldset class="bloco">
            <legend>Informações Profissionais</legend>
            <label for="empregado">Situação Profissional:</label>
            <input type="radio" name="situacao_profissional" value="Empregado"  class="ponteiro" value="<?php echo htmlspecialchars($situacao_profissional); ?>" required>
            <label for="empregado">Empregado</label>
            <input type="radio"  name="situacao_profissional" value="Desempregado" class="ponteiro" value="<?php echo htmlspecialchars($situacao_profissional); ?>" required>
            <label for="desempregado">Desempregado</label><br><br>
            <label for="profissao">Profissão:</label>
            <input type="text" name="profissao" placeholder="Digite a profissão" class="tamanhodecaixa2" value="<?php echo htmlspecialchars($profissao); ?>" required>
            <label for="tiposescolaridade">Escolaridade:</label>
            <input type="text"  name="tiposescolaridade" placeholder=" Selecione Escolaridade"  class="escolaridade" value="<?php echo htmlspecialchars($tiposescolaridade); ?>" required>
            
        </fieldset>
        
        <fieldset class="bloco">
            <legend>Documentos e Contato</legend>
            <label for="rg">RG:</label>
            <input type="text"  name="rg" placeholder="Digite o RG"  value="<?php echo htmlspecialchars($rg); ?>" >
        
            <label for="cpf">CPF:</label>
            <input type="number"  name="cpf" placeholder="Digite o CPF" value="<?php echo htmlspecialchars($cpf); ?>" required><br><br>
        
            <label for="telefone1">Telefone 1:</label>
            <input type="tel"  name="telefone1" placeholder="(xx) xxxxx-xxxx" value="<?php echo htmlspecialchars($telefone1); ?>" required>
        
            <label for="telefone2">Telefone 2:</label>
            <input type="tel"  name="telefone2" placeholder="(xx) xxxxx-xxxx" value="<?php echo htmlspecialchars($telefone2); ?>">
        
            <label for="telefone3">Telefone 3:</label>
            <input type="tel"  name="telefone3" placeholder="(xx) xxxxx-xxxx" value="<?php echo htmlspecialchars($telefone3); ?>"><br><br>
        
            <label for="endereco">Endereço:</label>
            <input type="text"  name="endereco" placeholder="Digite o endereço" class="tamanhodecaixa" value="<?php echo htmlspecialchars($endereco); ?>" required>
        
            <label for="numero">Numero/Casa</label>
            <input type="text" name="numero" placeholder="Digite Numero ou Casa" class="tamanhodecaixa2" value="<?php echo htmlspecialchars($numero); ?>" required>
        
            <label for="setor_bairro">Setor/Bairro</label>
            <input type="text"  name="setor_bairro" placeholder="Digite seu Setor ou Bairro" class="tamanhodecaixa2" value="<?php echo htmlspecialchars($setor_bairro); ?>"  required><br><br>
        
            <label for="cidade">Cidade:</label>
            <input type="text"  name="cidade" placeholder="Digite a cidade" value="<?php echo htmlspecialchars($cidade); ?>" required>
            <label for="estado">Estado:</label>
            <input type="text"  name="estado" placeholder="Digite o estado" value="<?php echo htmlspecialchars($estado); ?>" required>
            <label for="cep">CEP:</label>
            <input type="number"  name="cep" placeholder="Digite o CEP" value="<?php echo htmlspecialchars($cep); ?>" required><br><br>
        </fieldset>
        
    
        <fieldset class="bloco">
            <legend>Informações Religiosas</legend>
            <label for="batismo_espirito_santo">Batizado no Espírito Santo?</label>
            <input type="radio" name="batismo_espirito_santo" value="Sim"  class="ponteiro" required>
            <label for="batismosanto_sim">Sim</label>
            <input type="radio"  name="batismo_espirito_santo" value="Não"  class="ponteiro" required>
            <label for="batismosanto_nao">Não</label>&nbsp;&nbsp;&nbsp;
            <label for="data_batismo_espirito">Quando?</label>
            <input type="date"  name="data_batismo_espirito" placeholder="dd/mm/aaaa" class="ponteiro" ><br><br>        
            <label for="batismo_aguas">Batizado nas Águas?</label>&nbsp;&nbsp;&nbsp;
            <input type="radio"  name="batismo_aguas" value="Sim" class="ponteiro" required>
            <label for="batismo_aguas_s">Sim</label>
            <input type="radio"  name="batismo_aguas" value="Não" class="ponteiro" required>
            <label for="batismo_aguas_n">Não</label><br><br>&nbsp;&nbsp;&nbsp;
            <label for="data_batismo_aguas">Data do Batismo:</label>
            <input type="date"  name="data_batismo_aguas" placeholder="dd/mm/aaaa" class="ponteiro" >
            <label for="igreja_batismo_aguas_nomeigreja">Na Igreja:</label>
            <input type="text"  name="igreja_batismo_aguas_nomeigreja" placeholder="Digite a igreja do Batismo" class="tamanhodecaixa" value="<?php echo htmlspecialchars($igreja_batismo_aguas_nomeigreja); ?>"><br><br>
            
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

            <input type="reset" value="Limpar" class="botao">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Atualizar"  class="botao">     
            
        </fieldset>
        
      </form>     
      
    <!--   <table border="1" width="1500px" class="tabela">
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
                        echo "<td><a href='editaradmin.php?id=" . $row['id'] . "'>Editar</a></td>"; // Adicione as ações desejadas
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhum registro encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
--->
  




</body>
</html>