<?php 
include("conexao.php");

if (isset($_POST['editar'])) {
    // Obtém os dados do formulário
    $idMarca = $_POST['id'];
    $nomeMarca = $_POST['marcas'];

    $atualizar_marca = "UPDATE Marcas SET Nome = '$nomeMarca' WHERE ID_Marca = '$idMarca'";

    if ($mysqli->query($atualizar_marca)) {
        echo '<script>alert("Marca atualizada com sucesso!");</script>';
        echo '<script>window.location.href = "marcaspage.php";</script>';
    } else {
        echo '<script>alert("Erro ao atualizar marca: ' . $mysqli->error . '");</script>';
    }
} else {
    echo '<script>alert("Ação inválida!");</script>';
}
?>