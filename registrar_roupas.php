<?php
include("conexao.php");
include("funcoes.php");

// Verifica se o formulário foi enviado
if (isset($_POST['cadastrar'])) {
    // Obtém os dados do formulário

    $roupa = $_POST['roupa'];
    $fornecedor = $_POST['fornecedor'];
    $marca = $_POST['marca'];
    $categoriaroupa = $_POST['categoriaroupa'];
    $publicoalvo = $_POST['publicoalvo'];
    $tamanho = $_POST['tamanho'];
    // Insere os dados no banco de dados
    $sql = "INSERT INTO Roupas (Nome, ID_Fornecedor, ID_Marca, ID_PublicoAlvo ,ID_Categoria, ID_Tamanho) VALUES ('$roupa', '$fornecedor', '$marca', '$categoriaroupa', '$publicoalvo', '$tamanho')";

    if ($mysqli->query($sql) === TRUE) {
        // Cadastro feito com sucesso
        echo '<script>alert("Cadastro feito com sucesso!"); setTimeout(function(){ window.location.href = "roupaspage.php"; }, 500);</script>';
    } else {
        // Erro ao registrar a venda
        echo '<script>alert("Erro ao registrar a venda: ' . $mysqli->error . '"); setTimeout(function(){ window.location.href = "roupaspage.php"; }, 500);</script>';
    }
}
?>
