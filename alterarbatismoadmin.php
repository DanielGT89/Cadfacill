<?php
include('protetor.php');
include ('banco.php');

// Verifique se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $denominacao = $_POST['denominacao'];
    $igreja_local = $_POST['igreja_local'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $naturalidade = $_POST['naturalidade'];
    $estado_civil = $_POST['estado_civil'];
    $conjuge = $_POST['conjuge'];
    $filiacao_pai = $_POST['filiacao_pai'];
    $filiacao_mae = $_POST['filiacao_mae'];
    $situacao_profissional = $_POST['situacao_profissional'];
    $profissao = $_POST['profissao'];
    $tiposescolaridade = $_POST['tiposescolaridade'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $telefone3 = $_POST['telefone3'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $setor_bairro = $_POST['setor_bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $batismo_espirito_santo = $_POST['batismo_espirito_santo'];
    $data_batismo_espirito = $_POST['data_batismo_espirito'];
    $batismo_aguas = $_POST['batismo_aguas'];
    $data_batismo_aguas = $_POST['data_batismo_aguas'];
    $igreja_batismo_aguas_nomeigreja = $_POST['igreja_batismo_aguas_nomeigreja'];
    $id = $_POST['id'];



    // SQL UPDATE para atualizar os dados no banco de dados
    $sql ="UPDATE batimos 
    SET denominacao = :denominacao, 
        igreja_local = :igreja_local, 
        nome = :nome, 
        data_nascimento = :data_nascimento, 
        naturalidade = :naturalidade, 
        estado_civil = :estado_civil, 
        conjuge = :conjuge, 
        filiacao_pai = :filiacao_pai, 
        filiacao_mae = :filiacao_mae, 
        situacao_profissional = :situacao_profissional, 
        profissao = :profissao, 
        tiposescolaridade = :tiposescolaridade, 
        rg = :rg, 
        cpf = :cpf, 
        telefone1 = :telefone1, 
        telefone2 = :telefone2, 
        telefone3 = :telefone3, 
        endereco = :endereco, 
        numero = :numero, 
        setor_bairro = :setor_bairro, 
        cidade = :cidade, 
        estado = :estado, 
        cep = :cep, 
        batismo_espirito_santo = :batismo_espirito_santo, 
        data_batismo_espirito = :data_batismo_espirito, 
        batismo_aguas = :batismo_aguas, 
        data_batismo_aguas = :data_batismo_aguas, 
        igreja_batismo_aguas_nomeigreja = :igreja_batismo_aguas_nomeigreja 
    WHERE id = :id";

    $stmt = $pdo->prepare($sql);
      
    
    $stmt->bindParam(':denominacao', $denominacao);
    $stmt->bindParam(':igreja_local', $igreja_local);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':data_nascimento', $data_nascimento);
    $stmt->bindParam(':naturalidade', $naturalidade);
    $stmt->bindParam(':estado_civil', $estado_civil);
    $stmt->bindParam(':conjuge', $conjuge);
    $stmt->bindParam(':filiacao_pai', $filiacao_pai);
    $stmt->bindParam(':filiacao_mae', $filiacao_mae);
    $stmt->bindParam(':situacao_profissional', $situacao_profissional);
    $stmt->bindParam(':profissao', $profissao);
    $stmt->bindParam(':tiposescolaridade', $tiposescolaridade);
    $stmt->bindParam(':rg', $rg);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':telefone1', $telefone1);
    $stmt->bindParam(':telefone2', $telefone2);
    $stmt->bindParam(':telefone3', $telefone3);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':numero', $numero);
    $stmt->bindParam(':setor_bairro', $setor_bairro);
    $stmt->bindParam(':cidade', $cidade);
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':cep', $cep);
    $stmt->bindParam(':batismo_espirito_santo', $batismo_espirito_santo);
    $stmt->bindParam(':data_batismo_espirito', $data_batismo_espirito);
    $stmt->bindParam(':batismo_aguas', $batismo_aguas);
    $stmt->bindParam(':data_batismo_aguas', $data_batismo_aguas);
    $stmt->bindParam(':igreja_batismo_aguas_nomeigreja', $igreja_batismo_aguas_nomeigreja);
    $stmt->bindParam(':id', $id);


    // Execute a declaração preparada
    if ($stmt->execute()) {
        // Atualização bem-sucedida, redirecione ou exiba uma mensagem de sucesso
          echo '<script>alert("Edição com sucesso"); location.href = "relatoriobatismoadmin.php";</script>';
            exit();
    }
    } else {
        // Se houver um erro, exiba uma mensagem de erro ou registre o erro para depuração
        echo "Erro ao atualizar o registro.";
        
    }

?>
