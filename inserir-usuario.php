<?php
include("conexao.php");

if (isset($_POST['cadastrar'])) {
    // Obtém os dados do formulário

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $confirmarsenha = $_POST['confirmarsenha'];
    // Insere os dados no banco de dados
    if ($senha === $confirmarsenha) {
    $sql = "INSERT INTO LoginUsuario (Nome ,Email ,CPF , Senha ) VALUES ('$nome', '$email', '$cpf', '$senha')";

        if ($mysqli->query($sql) === TRUE) {
            // Cadastro feito com sucesso
            echo '<script>alert("Cadastro feito com sucesso!"); setTimeout(function(){ window.location.href = "loginpage.php"; }, 100);</script>';
        } else {
            // Erro ao registrar a venda
            echo '<script>alert("Erro ao fazer o cadastro: ' . $mysqli->error . '"); setTimeout(function(){ window.location.href = "loginpage.php"; }, 100);</script>';
        }
    }
}
?>