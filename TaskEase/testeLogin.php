<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password']))
{
    // Acessa o sistema
    include_once('config.php');
    $nome = $_POST['username'];
    $senha = $_POST['password'];

    // Consulta o banco de dados para obter a senha armazenada
    $sql = "SELECT * FROM usuarios WHERE nome = '$nome'";
    $result = $conexao->query($sql);

    if($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $senha_hash = $row['senha'];

        // Verifica se a senha corresponde ao hash armazenado
        if(password_verify($senha, $senha_hash)) {
            // Senha correta, inicia a sessão e redireciona para o sistema
            $_SESSION['nome'] = $nome;
            header("Location: index.php");
            exit(); // Termina o script após redirecionamento
        } else {
            // Senha incorreta
            header('Location: login.php');
            exit(); // Termina o script após redirecionamento
        }
    } else {
        // Usuário não encontrado
        header('Location: login.php');
        exit(); // Termina o script após redirecionamento
    }
}
else 
{
    // Não acessa o sistema
    header('Location: login.php');
    exit(); // Termina o script após redirecionamento
}

