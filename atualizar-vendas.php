<?php
include("conexao.php");

if (isset($_POST['editar'])) {
    $idVenda = $_POST['venda'];
    $cliente = $_POST['cliente'];
    $roupa = $_POST['roupa'];
    $quantidade = $_POST['quantidade'];
    $formpagamento = $_POST['formpagamento'];
    $valorunidade = $_POST['valorunidade'];
    $valortotal = $_POST['valortotal'];

    // Atualiza os dados da venda no banco de dados
    $atualizar_venda = "UPDATE Vendas SET ID_Roupa = '$roupa', Quantidade = '$quantidade',
                        ID_FormaPagamento = '$formpagamento', ValorUnitario = '$valorunidade', ValorTotal = '$valortotal'
                        WHERE ID_Venda = '$idVenda'";

    if ($mysqli->query($atualizar_venda)) {
        echo '<script>alert("Venda atualizada com sucesso!");</script>';

        // Verifica se há registros para a venda na tabela de movimentação de estoque
        $verificar_estoque = "SELECT * FROM MovimentacaoEstoque WHERE ID_Registro = '$idVenda'";
        $resultado = $mysqli->query($verificar_estoque);

        if ($resultado->num_rows > 0) {
            // Atualiza os dados na tabela de movimentação de estoque
            $atualizar_estoque = "UPDATE MovimentacaoEstoque SET ID_Roupa = '$roupa', Quantidade = '$quantidade' WHERE ID_Registro = '$idVenda'";
            if ($mysqli->query($atualizar_estoque)) {
                echo '<script>alert("Dados do estoque atualizados com sucesso!");</script>';
            } else {
                echo '<script>alert("Erro ao atualizar dados do estoque: ' . $mysqli->error . '");</script>';
            }
        } else {
            // Insere os dados na tabela de movimentação de estoque
            $inserir_estoque = "INSERT INTO MovimentacaoEstoque (ID_Registro, ID_Roupa, ID_TipoOperacao, Quantidade, DataMovimentacao)
                                VALUES ('$idVenda', '$roupa', '1', '$quantidade', CURRENT_DATE)";
            if ($mysqli->query($inserir_estoque)) {
                echo '<script>alert("Dados do estoque inseridos com sucesso!");</script>';
            } else {
                echo '<script>alert("Erro ao inserir dados do estoque: ' . $mysqli->error . '");</script>';
            }
        }

        echo '<script>window.location.href = "vendaspage.php";</script>';
    } else {
        echo '<script>alert("Erro ao atualizar venda: ' . $mysqli->error . '");</script>';
    }
} else {
    echo '<script>alert("Ação inválida!");</script>';
}
?>
