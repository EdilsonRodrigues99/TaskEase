<?php
// Inicia a sessão
session_start();

// Verifica se não há dados de sessão definidos para nome e senha
if (!isset($_SESSION['nome']) || !isset($_SESSION['senha'])) {
    // Se não houver dados de sessão, redireciona para a página de login
    // header('Location: login.php');
     //exit(); // Termina o script após redirecionamento
}

// Obtém o nome do usuário logado a partir dos dados de sessão
$logado = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles(4).css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Tarefas</title>
</head>
<body>

<html lang="en">
<head>
<link rel="stylesheet" href="styles(4).css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Tarefas</title>
</head>
<body>
<form id="taskForm" class="task-form">
    <label for="task">Tarefa:</label>
    <input type="text" id="task" name="task" required>

    <label for="datetime">Data e Hora:</label>
    <input type="datetime-local" id="datetime" name="datetime" required>

    <input type="submit" value="Adicionar Tarefa">
</form>

<div class="task-list" id="taskList">
    <!-- As tarefas adicionadas serão exibidas aqui -->
</div>

<script>
    const form = document.getElementById('taskForm');
    const taskList = document.getElementById('taskList');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const taskInput = document.getElementById('task');
        const datetimeInput = document.getElementById('datetime');

        const task = taskInput.value;
        const datetime = datetimeInput.value;

        const taskItem = document.createElement('div');
        taskItem.classList.add('task');
        taskItem.innerHTML = `
            <span>${task}</span>
            <span>${datetime}</span>
            <button onclick="toggleCompletion(this)">Concluído</button>
        `;

        taskList.appendChild(taskItem);

        // Limpar campos do formulário
        taskInput.value = '';
        datetimeInput.value = '';
    });

    function toggleCompletion(button) {
        const task = button.parentElement;
        task.classList.toggle('completed');
    }
</script>

</body>
</html>



