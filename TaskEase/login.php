<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Definindo o conjunto de caracteres e a escala de visualização -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Incluindo o arquivo de estilos externo -->
  <link rel="stylesheet" href="style(1).css">
</head>
<body>
  <!-- Container principal -->
  <div class="container">
    <!-- Caixa de login -->
    <div class="login-box">
      <!-- Título da caixa de login -->
      <h2>Login</h2>
      <!-- Formulário de login -->
      <form action="testeLogin.php" method="POST">

        <!-- Campo de entrada para o nome de usuário -->
        <input type="text" name="username" placeholder="Nome" required>
        <!-- Campo de entrada para a senha -->
        <input type="password" name="password" placeholder="Senha" required>
        <!-- Botões de ação -->
        <div class="botoes">
          <!-- Botão para enviar o formulário de login -->
          <input type="submit" name="submit" value="Enviar">
          <!-- Botão para redirecionar para a página de cadastro -->
          <button onclick="window.location.href='cadastro.php'">Cadastro</button>
          <!-- Link para sair ou voltar para a página inicial -->
          <a href="home.php" class="btn-voltar">Sair</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

