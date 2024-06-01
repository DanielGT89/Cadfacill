<?php
$host = 'localhost';
$dbname = 'cadfacil';
$user = 'root';
$password = '1234';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    {
        echo "conectado";

    }
} catch(PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}
?>