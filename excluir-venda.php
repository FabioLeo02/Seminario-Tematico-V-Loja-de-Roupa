<?php
include("conexao.php");

// Verifica se o parâmetro ID_Venda está presente na URL
if (isset($_GET['ID_Venda'])) {
    $idVenda = $_GET['ID_Venda'];

    // Verifica se o usuário confirmou a exclusão
    if (isset($_GET['confirmar']) && $_GET['confirmar'] == 'true') {
        // Consulta para obter os dados da venda antes de excluí-la
        $consultaVenda = "SELECT ID_Roupa, Quantidade FROM Vendas WHERE ID_Venda = $idVenda";
        $resultadoVenda = $mysqli->query($consultaVenda);

        if ($resultadoVenda->num_rows > 0) {
            $venda = $resultadoVenda->fetch_assoc();
            $roupa = $venda['ID_Roupa'];
            $quantidade = $venda['Quantidade'];

            // Consulta para excluir a venda com base no ID_Venda
            $consultaExcluirVenda = "DELETE FROM Vendas WHERE ID_Venda = $idVenda";

            // Consulta para excluir a venda correspondente na tabela MovimentacaoEstoque
            $consultaExcluirEstoque = "DELETE FROM MovimentacaoEstoque WHERE ID_Roupa = $roupa AND Quantidade = $quantidade";

            // Inicia uma transação para garantir a consistência dos dados
            $mysqli->begin_transaction();

            // Executa as consultas de exclusão
            if ($mysqli->query($consultaExcluirVenda) && $mysqli->query($consultaExcluirEstoque)) {
                // Confirma a transação e finaliza a exclusão
                $mysqli->commit();
                echo "<script>alert('Venda excluída com sucesso!'); window.location.href = 'vendaspage.php';</script>";
            } else {
                // Ocorreu um erro durante a exclusão, reverte a transação
                $mysqli->rollback();
                echo "<script>alert('Erro ao excluir a venda: " . $mysqli->error . "'); window.location.href = 'vendaspage.php';</script>";
            }
        } else {
            // Venda não encontrada
            echo "<script>alert('Venda não encontrada.'); window.location.href = 'vendaspage.php';</script>";
        }
    } else {
        // Pergunta ao usuário se ele tem certeza que deseja excluir a venda
        echo "<script>
                if (confirm('Tem certeza que deseja excluir esta venda?')) {
                    window.location.href = 'excluir-venda.php?ID_Venda=$idVenda&confirmar=true';
                } else {
                    window.location.href = 'vendaspage.php';
                }
            </script>";
    }
} else {
    // ID_Venda não foi fornecido na URL
    echo "<script>alert('ID da venda não especificado.'); window.location.href = 'vendaspage.php';</script>";
}
?>
