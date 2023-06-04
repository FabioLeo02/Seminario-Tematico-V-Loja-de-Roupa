<?php
include("conexao.php");

if(isset($_POST['editar'])) {
    $idFuncionario = $_POST['id'];
    $nomeFuncionario = $_POST['funcionario'];
    $emailFuncionario = $_POST['email'];
    $telefoneFuncionario = $_POST['telefone'];
    $enderecoFuncionario = $_POST['endereco'];
    $tipoUsuarioFuncionario = $_POST['tipousuario'];

    // Atualiza os dados do funcionario no banco de dados
    $atualizarFuncionario = "UPDATE Funcionarios SET Nome = '$nomeFuncionario', Email = '$emailFuncionario', Telefone = '$telefoneFuncionario',
                        Endereco = '$enderecoFuncionario', ID_TipoUsuario = '$tipoUsuarioFuncionario' WHERE ID_Funcionario = '$idFuncionario'";

    if ($mysqli->query($atualizarFuncionario)) {
        echo '<script>alert("Funcionário atualizado com sucesso!");</script>';
        echo '<script>window.location.href = "funcionariospage.php";</script>';
    } else {
        echo '<script>alert("Erro ao atualizar funcionário: ' . $mysqli->error . '");</script>';
    }
} else {
    echo '<script>alert("Ação inválida!");</script>';
}
?>
