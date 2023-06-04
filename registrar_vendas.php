<?php
include("conexao.php");
include("funcoes.php");

// Verifica se o formulário foi enviado
if (isset($_POST['cadastrar'])) {
    // Obtém os dados do formulário
    $cliente = $_POST['cliente'];
    $roupa = $_POST['roupa'];
    $quantidade = $_POST['quantidade'];
    $formpagamento = $_POST['formpagamento'];
    $valorunidade = $_POST['valorunidade'];
    $valortotal = $_POST['valortotal'];
    $valorunidade = str_replace(',', '.', $valorunidade);
    $valortotal = str_replace(',', '.', $valortotal);

    // Insere os dados na tabela Vendas
    $sql_vendas = "INSERT INTO Vendas (ID_Cliente, ID_Roupa, Quantidade, ID_FormaPagamento, ValorUnitario, ValorTotal, DataVenda) VALUES ('$cliente', '$roupa', '$quantidade', '$formpagamento', '$valorunidade', '$valortotal', CURDATE())";

    if ($mysqli->query($sql_vendas) === TRUE) {
        // Cadastro na tabela Vendas feito com sucesso
        echo '<script>alert("Cadastro de Venda feito com sucesso!");</script>';

        // Obtém o ID_Venda gerado na inserção
        $idVenda = $mysqli->insert_id;

        // Insere os dados na tabela MovimentacaoEstoque
        $sql_movimentacao = "INSERT INTO MovimentacaoEstoque (ID_Registro, ID_Roupa, ID_TipoOperacao, Quantidade, DataMovimentacao) VALUES ('$idVenda', '$roupa', '2', '$quantidade', CURDATE())";

        if ($mysqli->query($sql_movimentacao) === TRUE) {
            // Cadastro na tabela MovimentacaoEstoque feito com sucesso
            echo '<script>alert("Cadastro do Estoque feito com sucesso!");</script>';

            // Redireciona para a página "vendaspage.php" após 3 segundos
            echo '<script>setTimeout(function(){ window.location.href = "vendaspage.php"; }, 500);</script>';
        } else {
            // Erro ao registrar na tabela MovimentacaoEstoque
            echo '<script>alert("Erro ao registrar no Estoque: ' . $mysqli->error . '");</script>';
        }
    } else {
        // Erro ao registrar na tabela Vendas
        echo '<script>alert("Erro ao registrar Venda: ' . $mysqli->error . '");</script>';
    }
}
?>
