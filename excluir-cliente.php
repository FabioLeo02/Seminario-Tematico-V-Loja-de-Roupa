<?php
include("conexao.php");

// Verifica se o parâmetro ID_Cliente está presente na URL
if (isset($_GET['ID_Cliente'])) {
    $idCliente = $_GET['ID_Cliente'];

    // Consulta para obter o nome do cliente com base no ID_Cliente
    $consultaNome = "SELECT Nome FROM Clientes WHERE ID_Cliente = $idCliente";
    $resultadoNome = $mysqli->query($consultaNome);
    $nomeCliente = $resultadoNome->fetch_assoc()['Nome'];

    // Verifica se o usuário confirmou a exclusão
    if (isset($_GET['confirmar']) && $_GET['confirmar'] == 'true') {
        // Consulta para excluir o cliente com base no ID_Cliente
        $consulta = "DELETE FROM Clientes WHERE ID_Cliente = $idCliente";

        // Executa a consulta de exclusão
        if ($mysqli->query($consulta)) {
            // Cliente excluído com sucesso
            echo "<script>alert('Cliente $nomeCliente excluído com sucesso!'); window.location.href = 'clientespage.php';</script>";
        } else {
            // Ocorreu um erro ao excluir o cliente
            echo "<script>alert('Erro ao excluir o(a) cliente $nomeCliente: " . $mysqli->error . "'); window.location.href = 'clientespage.php';</script>";
        }
    } else {
        // Pergunta ao usuário se ele tem certeza que deseja excluir o cliente
        echo "<script>
                if (confirm('Tem certeza que deseja excluir o(a) cliente $nomeCliente?')) {
                    window.location.href = 'excluir-cliente.php?ID_Cliente=$idCliente&confirmar=true';
                } else {
                    window.location.href = 'clientespage.php';
                }
            </script>";
    }
} else {
    // ID_Cliente não foi fornecido na URL
    echo "<script>alert('ID do cliente não especificado.'); window.location.href = 'clientespage.php';</script>";
}
?>
