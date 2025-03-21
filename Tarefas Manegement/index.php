<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="assets\style.css">
</head>
<body>
    <div class="container">
        <form class="formTask" action="index.php" method="POST">
            <label class="taskLab" for="addTask">Adicionar Tarefa</label>
            <input id="addTask" type="text">
            <button>Adicionar</button>
        </form>
        <div class="taskList">
            <select class="taskSelect" name="taskList" id="taskList">
                <option value="0">Tarefas</option>
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
            </select>
        </div>
    </div>
    <div class="btns">
        <button>Concluir</button>
        <button>Exlcuir</button>
    </div>
</body>
</html>

<?php
include "config.php"; // Adicionado coenxão de banco de dados


?>
