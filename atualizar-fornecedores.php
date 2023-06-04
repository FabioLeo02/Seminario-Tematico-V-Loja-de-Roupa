<?php
include("conexao.php");

if(isset($_POST['editar'])) {
    $idFornecedor = $_POST['id'];
    $nomeFornecedor = $_POST['fornecedor'];
    $telefoneFornecedor = $_POST['telefone'];
    $emailFornecedor = $_POST['email'];

    // Atualiza os dados do fornecedor no banco de dados
    $atualizarFornecedor = "UPDATE Fornecedores SET Nome = '$nomeFornecedor', Telefone = '$telefoneFornecedor', Email = '$emailFornecedor'
                            WHERE ID_Fornecedor = '$idFornecedor'";

    if ($mysqli->query($atualizarFornecedor)) {
        echo '<script>alert("Fornecedor atualizado com sucesso!");</script>';
        echo '<script>window.location.href = "fornecedorespage.php";</script>';
    } else {
        echo '<script>alert("Erro ao atualizar fornecedor: ' . $mysqli->error . '");</script>';
    }
} else {
    echo '<script>alert("Ação inválida!");</script>';
}
?>
