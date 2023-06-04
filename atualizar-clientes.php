<?php
include("conexao.php");

if(isset($_POST['editar'])) {
    $idCliente = $_POST['id'];
    $nomeCliente = $_POST['cliente'];
    $emailCliente = $_POST['email'];
    $telefoneCliente = $_POST['telefone'];
    $enderecoCliente = $_POST['endereco'];
    $tipoUsuarioCliente = $_POST['tipousuario'];

    // Atualiza os dados do cliente no banco de dados
    $atualizarCliente = "UPDATE Clientes SET Nome = '$nomeCliente', Email = '$emailCliente', Telefone = '$telefoneCliente',
                        Endereco = '$enderecoCliente', ID_TipoUsuario = '$tipoUsuarioCliente' WHERE ID_Cliente = '$idCliente'";

    if ($mysqli->query($atualizarCliente)) {
        echo '<script>alert("Cliente atualizado com sucesso!");</script>';
        echo '<script>window.location.href = "clientespage.php";</script>';
    } else {
        echo '<script>alert("Erro ao atualizar cliente: ' . $mysqli->error . '");</script>';
    }
} else {
    echo '<script>alert("Ação inválida!");</script>';
}
?>
