<?php
// Definição das informações de conexão com o banco de dados
$dbHost = 'localhost'; // 'localhost' com "l" minúsculo
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-projeto';

// Estabelecendo a conexão com o banco de dados utilizando o MySQLi
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificando se houve erro na conexão
if($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
} else {
    echo "Conexão bem-sucedida!";
    // Seu código adicional aqui, se necessário
}




