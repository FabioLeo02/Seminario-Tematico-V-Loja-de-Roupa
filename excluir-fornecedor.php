<?php
include("conexao.php");

// Verifica se o parâmetro ID_Fornecedor está presente na URL
if (isset($_GET['ID_Fornecedor'])) {
    $idFornecedor = $_GET['ID_Fornecedor'];

    // Consulta para obter o nome do fornecedor com base no ID_Fornecedor
    $consultaNome = "SELECT Nome FROM Fornecedores WHERE ID_Fornecedor = $idFornecedor";
    $resultadoNome = $mysqli->query($consultaNome);
    $nomeFornecedor = $resultadoNome->fetch_assoc()['Nome'];

    // Verifica se o usuário confirmou a exclusão
    if (isset($_GET['confirmar']) && $_GET['confirmar'] == 'true') {
        // Consulta para excluir o fornecedor com base no ID_Fornecedor
        $consulta = "DELETE FROM Fornecedores WHERE ID_Fornecedor = $idFornecedor";

        // Executa a consulta de exclusão
        if ($mysqli->query($consulta)) {
            // Fornecedor excluído com sucesso
            echo "<script>alert('Fornecedor $nomeFornecedor excluído com sucesso!'); window.location.href = 'fornecedorespage.php';</script>";
        } else {
            // Ocorreu um erro ao excluir o fornecedor
            echo "<script>alert('Erro ao excluir o fornecedor $nomeFornecedor: " . $mysqli->error . "'); window.location.href = 'fornecedorespage.php';</script>";
        }
    } else {
        // Pergunta ao usuário se ele tem certeza que deseja excluir o fornecedor
        echo "<script>
                if (confirm('Tem certeza que deseja excluir o fornecedor $nomeFornecedor?')) {
                    window.location.href = 'excluir-fornecedor.php?ID_Fornecedor=$idFornecedor&confirmar=true';
                } else {
                    window.location.href = 'fornecedorespage.php';
                }
            </script>";
    }
} else {
    // ID_Fornecedor não foi fornecido na URL
    echo "<script>alert('ID do fornecedor não especificado.'); window.location.href = 'fornecedorespage.php';</script>";
}
?>
