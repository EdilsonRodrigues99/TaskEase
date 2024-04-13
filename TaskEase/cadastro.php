<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Definindo o conjunto de caracteres e a escala de visualização -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <!-- Incluindo o arquivo de estilos externo -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    // Verificando se o formulário foi submetido
    if(isset($_POST['submit'])) {

    // Incluindo o arquivo de configuração do banco de dados
    include_once('config.php');
    
    // Recebendo os dados do formulário
    $nome = $_POST['name'];
    $senha = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $telefone = $_POST['phone'];
    $sexo = $_POST  ['gender'];
    $data_nasc = $_POST['birthdate'];
    $cidade = $_POST['city'];
    $estado = $_POST['state'];
    $endereço = $_POST['address'];

    // Executando a consulta SQL para inserir os dados no banco de dados
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereço')");

    // Verificando se a consulta foi bem-sucedida
    if ($result) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conexao);
    }
    }
    ?>

    <!-- Formulário de cadastro -->
    <form action="cadastro.php" method="post">
        <label for="name">Nome:</label>
         <input type="text" id="name" name="name" required>

        <label for="senha">Senha:</label>
         <input type="password" id="senha" name="password" required>

        <label for="email">E-mail:</label>
         <input type="email" id="email" name="email" required>

        <label for="phone">Telefone:</label>
         <input type="tel" id="phone" name="phone" required>

        <label for="gender">Sexo:</label>
         <select id="gender" name="gender" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outros">Outros</option>
        </select>

        <label for="birthdate">Data de Nascimento:</label>
        <input type="date" id="birthdate" name="birthdate" required>

        <label for="city">Cidade:</label>
        <input type="text" id="city" name="city" required>

        <label for="state">Estado:</label>
        <input type="text" id="state" name="state" required>

        <label for="address">Endereço:</label>
        <input type="text" id="address" name="address" required>

        <div class="botoes">
            <!-- Botão de enviar o formulário -->
            <input type="submit" name="submit" id="submit" value="Enviar">
            <!-- Link para sair ou voltar -->
            <a href="home.php" class="btn-voltar">Sair</a>
        </div>
    </form>
</body>
</html>
