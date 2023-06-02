<?php
session_start();

include("conexao.php");

$nome = ""; // Definindo um valor padrão para a variável $nome

if (isset($_POST['logar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se os campos foram preenchidos
    if (empty($email) || empty($senha)) {
        echo '<script>alert("Por favor, preencha todos os campos");</script>';
        echo '<script>window.location.href = "loginpage.php";</script>';
        exit();
    }

    $query = "SELECT * FROM LoginUsuario WHERE Email = '$email' AND Senha = '$senha'";
    $result = $mysqli->query($query);

    if ($result->num_rows === 1) {
        // Autenticação bem-sucedida, obter o nome do usuário
        $row = $result->fetch_assoc();
        $nome = $row['Nome'];

        // Armazenar o nome do usuário na variável de sessão
        $_SESSION['nome'] = $nome;

        // Redirecionar para a página homepage.php
        echo '<script>window.location.href = "homepage.php";</script>';
        exit();
    } else {
        // Autenticação falhou, exibe uma mensagem de erro
        echo '<script>alert("Senha/Usuario Incorretas");</script>';
        echo '<script>window.location.href = "loginpage.php";</script>';
        exit();
    }

    // Fecha a conexão com o banco de dados
    $mysqli->close();
}
?>
