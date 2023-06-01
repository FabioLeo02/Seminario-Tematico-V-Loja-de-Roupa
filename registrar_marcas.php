<?php
include("conexao.php");
include("funcoes.php");

// Verifica se o formulário foi enviado
if (isset($_POST['cadastrar'])) {
    // Obtém os dados do formulário

    $marcas = $_POST['marcas'];
    // Insere os dados no banco de dados
    $sql = "INSERT INTO Marcas (Nome) VALUES ('$marcas')";

    if ($mysqli->query($sql) === TRUE) {
        // Cadastro feito com sucesso
        echo '<script>alert("Cadastro feito com sucesso!"); setTimeout(function(){ window.location.href = "marcaspage.php"; }, 500);</script>';
    } else {
        // Erro ao registrar a venda
        echo '<script>alert("Erro ao registrar a venda: ' . $mysqli->error . '"); setTimeout(function(){ window.location.href = "marcaspage.php"; }, 500);</script>';
    }
}
?>
