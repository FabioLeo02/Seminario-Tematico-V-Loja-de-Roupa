<?php
include("conexao.php");

// Verifica se o formulário foi enviado
if (isset($_POST['editar'])) {
    // Obtém os dados do formulário
    $idRoupa = $_POST['roupa'];
    $novoNome = $_POST['nome'];
    $novoFornecedor = $_POST['fornecedor'];
    $novaMarca = $_POST['marca'];
    $novaCategoria = $_POST['categoriaroupa'];
    $novoPublicoAlvo = $_POST['publicoalvo'];
    $novoTamanho = $_POST['tamanho'];

    // Atualiza os dados da roupa no banco de dados
    $atualizarRoupa = "UPDATE Roupas SET Nome = '$novoNome', ID_Fornecedor = '$novoFornecedor', ID_Marca = '$novaMarca', ID_Categoria = '$novaCategoria', ID_PublicoAlvo = '$novoPublicoAlvo', ID_Tamanho = '$novoTamanho' WHERE ID_Roupa = '$idRoupa'";
    $resultadoAtualizacao = $mysqli->query($atualizarRoupa);

    if ($resultadoAtualizacao) {
        // Atualização bem-sucedida
        echo '<script>alert("Roupa atualizada com sucesso!");</script>';
        echo '<script>window.location.href = "roupaspage.php";</script>';
    } else {
        // Erro na atualização
        echo '<script>alert("Erro ao atualizar roupa: ' . $mysqli->error . '");</script>';
    }
} else {
    echo '<script>alert("Ação inválida!");</script>';
}
?>
