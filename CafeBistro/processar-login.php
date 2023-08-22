<?php
require_once "conexao.php";

// Verifique as credenciais do usuário
$email = $_POST["email"];
$senha = $_POST["senha"];

// Lógica para verificar as credenciais - substitua por sua própria lógica
// Por exemplo, você pode verificar os dados no banco de dados

$sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Credenciais corretas, redirecione para a página após o login
    header("Location: index.php");
    exit();
} else {
    // Credenciais incorretas, exiba uma mensagem de erro ou faça algo similar
    echo "Credenciais incorretas. Por favor, tente novamente.";
}

$conn->close();
?>
