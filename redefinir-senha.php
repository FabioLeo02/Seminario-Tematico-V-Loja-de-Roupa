<?php
include("conexao.php"); 

if (isset($_POST['alterar'])) {
    $cpf = $_POST['cpf'];
    $novasenha = $_POST['novasenha'];
    $confirmarsenha = $_POST['confirmasenha'];

    if ($novasenha == $confirmarsenha) {
        $sql = "SELECT * FROM LoginUsuario WHERE CPF = '$cpf'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $sql = "UPDATE LoginUsuario SET Senha = '$novasenha' WHERE CPF = '$cpf'";
            if ($mysqli->query($sql) === TRUE) {
                echo "<script>alert('Senha alterada com sucesso.');</script>";
            } else {
                echo "<script>alert('Erro ao alterar a senha: " . $mysqli->error . "');</script>";
            }
        } else {
            echo "<script>alert('CPF não encontrado.');</script>";
        }
    } else {
        echo "<script>alert('A nova senha e a confirmação da senha não são iguais.');</script>";
    }

    $mysqli->close();

    echo "<script>window.location.href = 'loginpage.php';</script>";
}
?>
