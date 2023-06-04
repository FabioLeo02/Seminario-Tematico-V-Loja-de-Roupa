<?php
include("conexao.php");

// Verifica se o parâmetro ID_Funcionario está presente na URL
if (isset($_GET['ID_Funcionario'])) {
    $idFuncionario = $_GET['ID_Funcionario'];

    // Consulta para obter o nome do funcionário com base no ID_Funcionario
    $consultaNome = "SELECT Nome FROM Funcionarios WHERE ID_Funcionario = $idFuncionario";
    $resultadoNome = $mysqli->query($consultaNome);
    $nomeFuncionario = $resultadoNome->fetch_assoc()['Nome'];

    // Verifica se o usuário confirmou a exclusão
    if (isset($_GET['confirmar']) && $_GET['confirmar'] == 'true') {
        // Consulta para excluir o funcionário com base no ID_Funcionario
        $consulta = "DELETE FROM Funcionarios WHERE ID_Funcionario = $idFuncionario";

        // Executa a consulta de exclusão
        if ($mysqli->query($consulta)) {
            // Funcionário excluído com sucesso
            echo "<script>alert('Funcionário $nomeFuncionario excluído com sucesso!'); window.location.href = 'funcionariospage.php';</script>";
        } else {
            // Ocorreu um erro ao excluir o funcionário
            echo "<script>alert('Erro ao excluir o funcionário $nomeFuncionario: " . $mysqli->error . "'); window.location.href = 'funcionariospage.php';</script>";
        }
    } else {
        // Pergunta ao usuário se ele tem certeza que deseja excluir o funcionário
        echo "<script>
                if (confirm('Tem certeza que deseja excluir o funcionário $nomeFuncionario?')) {
                    window.location.href = 'excluir-funcionario.php?ID_Funcionario=$idFuncionario&confirmar=true';
                } else {
                    window.location.href = 'funcionariospage.php';
                }
            </script>";
    }
} else {
    // ID_Funcionario não foi fornecido na URL
    echo "<script>alert('ID do funcionário não especificado.'); window.location.href = 'funcionariospage.php';</script>";
}
?>
