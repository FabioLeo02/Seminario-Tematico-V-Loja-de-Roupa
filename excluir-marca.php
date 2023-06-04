<?php
include("conexao.php");

// Verifica se o parâmetro ID_Roupa está presente na URL
if (isset($_GET['ID_Marca'])) {
    $idMarca = $_GET['ID_Marca'];

    // Consulta para obter o nome da roupa com base no ID_Roupa
    $consultaMarcas = "SELECT Nome FROM Marcas WHERE ID_Marca = $idMarca";
    $resultadoMarcas = $mysqli->query($consultaMarcas);
    $nomeMarca = $resultadoMarcas->fetch_assoc()['Nome'];

    // Verifica se o usuário confirmou a exclusão
    if (isset($_GET['confirmar']) && $_GET['confirmar'] == 'true') {
        // Consulta para excluir a roupa com base no ID_Roupa
        $consulta = "DELETE FROM Marcas WHERE ID_Marca = $idMarca";

        // Executa a consulta de exclusão
        if ($mysqli->query($consulta)) {
            // Roupa excluída com sucesso
            echo "<script>alert('Marca $nomeMarca excluída com sucesso!'); window.location.href = 'marcaspage.php';</script>";
        } else {
            // Ocorreu um erro ao excluir a roupa
            echo "<script>alert('Erro ao excluir a marca $nomeMarca: " . $mysqli->error . "'); window.location.href = 'roupaspage.php';</script>";
        }
    } else {
        // Pergunta ao usuário se ele tem certeza que deseja excluir a roupa
        echo "<script>
                if (confirm('Tem certeza que deseja excluir a marca $nomeMarca?')) {
                    window.location.href = 'excluir-marca.php?ID_Marca=$idMarca&confirmar=true';
                } else {
                    window.location.href = 'marcaspage.php';
                }
            </script>";
    }
} else {
    // ID_Roupa não foi fornecido na URL
    echo "<script>alert('ID da roupa não especificado.'); window.location.href = 'marcaspage.php';</script>";
}
?>
