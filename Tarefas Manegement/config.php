<?php
$servidor = "localhost"; // ou 127.0.0.1
$usuario = "root"; // usuário do banco
$senha = ""; // senha (geralmente vazia no XAMPP)
$banco = "gerenciador_tarefas"; // nome do seu banco de dados

// Criando conexão
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Verificando conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>
