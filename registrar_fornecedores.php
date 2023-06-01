<?php
include("conexao.php");
include("funcoes.php");

// Verifica se o formulário foi enviado
if (isset($_POST['cadastrar'])) {
    // Obtém os dados do formulário

    $fornecedor = $_POST['fornecedor'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    // Insere os dados no banco de dados
    $sql = "INSERT INTO Fornecedores (Nome, Telefone, Email) VALUES ('$fornecedor', '$telefone', '$email')";

    if ($mysqli->query($sql) === TRUE) {
        // Cadastro feito com sucesso
        echo '<script>alert("Cadastro feito com sucesso!"); setTimeout(function(){ window.location.href = "fornecedorespage.php"; }, 500);</script>';
    } else {
        // Erro ao registrar a venda
        echo '<script>alert("Erro ao registrar a venda: ' . $mysqli->error . '"); setTimeout(function(){ window.location.href = "fornecedorespage.php"; }, 500);</script>';
    }
}
?>
