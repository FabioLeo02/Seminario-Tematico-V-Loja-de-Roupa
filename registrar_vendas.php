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
        echo '<script>alert("Cadastro na tabela Vendas feito com sucesso!");</script>';
    } else {
        // Erro ao registrar na tabela Vendas
        echo '<script>alert("Erro ao registrar na tabela Vendas: ' . $mysqli->error . '");</script>';
    }
    
    // Insere os dados na tabela MovimentacaoEstoque
    $sql_movimentacao = "INSERT INTO MovimentacaoEstoque (ID_Roupa, ID_TipoOperacao, Quantidade, DataMovimentacao) VALUES ('$roupa', '2', '$quantidade', CURDATE())";
    
    if ($mysqli->query($sql_movimentacao) === TRUE) {
        // Cadastro na tabela MovimentacaoEstoque feito com sucesso
        echo '<script>alert("Cadastro na tabela MovimentacaoEstoque feito com sucesso!");</script>';
    } else {
        // Erro ao registrar na tabela MovimentacaoEstoque
        echo '<script>alert("Erro ao registrar na tabela MovimentacaoEstoque: ' . $mysqli->error . '");</script>';
    }
    
    // Redireciona para a página "vendaspage.php" após 3 segundos
    echo '<script>setTimeout(function(){ window.location.href = "vendaspage.php"; }, 500);</script>';
}
?>
