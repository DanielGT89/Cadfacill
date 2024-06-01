<?php
include ('banco.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {

        $denominacao = isset($_POST['denominacao']) ? $_POST['denominacao'] : null;
        $igreja_local = isset($_POST['igreja_local']) ? $_POST['igreja_local'] : null;
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
        $data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
        $naturalidade = isset($_POST['naturalidade']) ? $_POST['naturalidade'] : null;
        $estado_civil = isset($_POST['estado_civil']) ? $_POST['estado_civil'] : null;
        $conjuge = isset($_POST['conjuge']) ? $_POST['conjuge'] : null;
        $filiacao_pai = isset($_POST['filiacao_pai']) ? $_POST['filiacao_pai'] : null;
        $filiacao_mae = isset($_POST['filiacao_mae']) ? $_POST['filiacao_mae'] : null;
        $situacao_profissional = isset($_POST['situacao_profissional']) ? $_POST['situacao_profissional'] : null;
        $profissao = isset($_POST['profissao']) ? $_POST['profissao'] : null; 
        $tiposescolaridade = isset($_POST['tiposescolaridade']) ? $_POST['tiposescolaridade'] : null;
        $rg = isset($_POST['rg']) ? $_POST['rg'] : null;
        $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
        $telefone1 = isset($_POST['telefone1']) ? $_POST['telefone1'] : null;
        $telefone2 = isset($_POST['telefone2']) ? $_POST['telefone2'] : null;
        $telefone3 = isset($_POST['telefone3']) ? $_POST['telefone3'] : null;
        $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : null;
        $numero = isset($_POST['numero']) ? $_POST['numero'] : null;
        $setor_bairro = isset($_POST['setor_bairro']) ? $_POST['setor_bairro'] : null;
        $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
        $estado = isset($_POST['estado']) ? $_POST['estado'] : null;
        $cep = isset($_POST['cep']) ? $_POST['cep'] : null;
        $batismo_espirito_santo = isset($_POST['batismo_espirito_santo']) ? $_POST['batismo_espirito_santo']: null;
        $data_batismo_espirito = isset($_POST['data_batismo_espirito']) ? $_POST['data_batismo_espirito'] : null;
        $batismo_aguas = isset($_POST['batismo_aguas']) ? $_POST['batismo_aguas'] : null;
        $data_batismo_aguas = isset($_POST['data_batismo_aguas']) ? $_POST['data_batismo_aguas'] : null;
        $igreja_batismo_aguas_nomeigreja = isset($_POST['igreja_batismo_aguas_nomeigreja']) ? $_POST['igreja_batismo_aguas_nomeigreja'] : null;
        $id_usuario = isset($_POST['id_usuario']) ? $_POST['id_usuario'] : null;
        
      
        $sql = "INSERT INTO cadastro (id_usuario, denominacao, igreja_local, nome, data_nascimento, naturalidade, estado_civil, conjuge, filiacao_pai, filiacao_mae, situacao_profissional, profissao, tiposescolaridade, rg, cpf, telefone1, telefone2, telefone3, endereco, numero, setor_bairro, cidade, estado, cep, batismo_espirito_santo, data_batismo_espirito, batismo_aguas, data_batismo_aguas, igreja_batismo_aguas_nomeigreja) VALUES (:id_usuario, :denominacao, :igreja_local, :nome, :data_nascimento, :naturalidade, :estado_civil, :conjuge, :filiacao_pai, :filiacao_mae, :situacao_profissional, :profissao, :tiposescolaridade, :rg, :cpf, :telefone1, :telefone2, :telefone3, :endereco, :numero, :setor_bairro, :cidade, :estado, :cep, :batismo_espirito_santo, :data_batismo_espirito, :batismo_aguas, :data_batismo_aguas, :igreja_batismo_aguas_nomeigreja)";

        
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
        $stmt->bindParam(':id_usuario', $id_usuario);
              
       
        if ($stmt->execute()) {
            // Atualização bem-sucedida, redirecione ou exiba uma mensagem de sucesso
            echo '<script>alert("Cadastro com sucesso"); location.href = "cadastromembro.php";</script>';
        }
            
    } catch(PDOException $e) {
        echo "Erro ao inserir no banco de dados: " . $e->getMessage();
    }
}







?>
