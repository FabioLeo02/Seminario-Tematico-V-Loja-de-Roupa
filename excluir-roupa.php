<?php
include("conexao.php");

// Verifica se o parâmetro ID_Roupa está presente na URL
if (isset($_GET['ID_Roupa'])) {
    $idRoupa = $_GET['ID_Roupa'];

    // Consulta para obter o nome da roupa com base no ID_Roupa
    $consultaNome = "SELECT Nome FROM ViewRoupas WHERE ID_Roupa = $idRoupa";
    $resultadoNome = $mysqli->query($consultaNome);
    $nomeRoupa = $resultadoNome->fetch_assoc()['Nome'];

    // Verifica se o usuário confirmou a exclusão
    if (isset($_GET['confirmar']) && $_GET['confirmar'] == 'true') {
        // Consulta para excluir a roupa com base no ID_Roupa
        $consulta = "DELETE FROM Roupas WHERE ID_Roupa = $idRoupa";

        // Executa a consulta de exclusão
        if ($mysqli->query($consulta)) {
            // Roupa excluída com sucesso
            echo "<script>alert('Roupa $nomeRoupa excluída com sucesso!'); window.location.href = 'roupaspage.php';</script>";
        } else {
            // Ocorreu um erro ao excluir a roupa
            echo "<script>alert('Erro ao excluir a roupa $nomeRoupa: " . $mysqli->error . "'); window.location.href = 'roupaspage.php';</script>";
        }
    } else {
        // Pergunta ao usuário se ele tem certeza que deseja excluir a roupa
        echo "<script>
                if (confirm('Tem certeza que deseja excluir a roupa $nomeRoupa?')) {
                    window.location.href = 'excluir-roupa.php?ID_Roupa=$idRoupa&confirmar=true';
                } else {
                    window.location.href = 'roupaspage.php';
                }
            </script>";
    }
} else {
    // ID_Roupa não foi fornecido na URL
    echo "<script>alert('ID da roupa não especificado.'); window.location.href = 'roupaspage.php';</script>";
}
?>
