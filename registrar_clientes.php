<?php
include("conexao.php");
include("funcoes.php");

// Verifica se o formulário foi enviado
if (isset($_POST['cadastrar'])) {
    // Obtém os dados do formulário

    $cliente = $_POST['cliente'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $tipousuario = $_POST['tipousuario'];
    // Insere os dados no banco de dados
    $sql = "INSERT INTO Clientes (Nome, Email ,Telefone, Endereco, ID_TipoUsuario) VALUES ('$cliente', '$email', '$telefone', '$endereco', '$tipousuario')";

    if ($mysqli->query($sql) === TRUE) {
        // Cadastro feito com sucesso
        echo '<script>alert("Cadastro feito com sucesso!"); setTimeout(function(){ window.location.href = "clientespage.php"; }, 500);</script>';
    } else {
        // Erro ao registrar a venda
        echo '<script>alert("Erro ao registrar a venda: ' . $mysqli->error . '"); setTimeout(function(){ window.location.href = "clientespage.php"; }, 500);</script>';
    }
}
?>
