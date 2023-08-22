<?php
require_once "conexao.php";
// Obter os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
// Inserir os dados na tabela 'usuario'
$sql = "INSERT INTO usuario (nome, email, senha) VALUES 
('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    header("Location: cadastrar-usuario-sucesso.php");
    exit();    
} else {
    echo "Erro ao cadastrar o usuário: " . $conn->error;
}
$conn->close();
?>

