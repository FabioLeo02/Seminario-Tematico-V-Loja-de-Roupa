<?php

include("conexao.php");

$consulta = 'SELECT ID_Venda, NomeCliente, NomeRoupa, FormaPagamento, Quantidade, ValorUnitario, ValorTotal, DataVenda FROM ViewVendas';
/* 
select * from - seleciona todos as colunas da tabela
order by - escolhe de que forma será ordenado as colunas

*/
$con = $mysqli->query($consulta) or die($mysqli->error); /* tentar fazer a conexão
e se não conseguir , destroi ela e mostra o erro
*/

include("fazer-login.php");

$nomeUsuario = '';

// Verifica se a variável de sessão 'nome' está definida
if (isset($_SESSION['nome'])) {
    $nomeUsuario = $_SESSION['nome'];

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="Css/style.css">
    <link rel="stylesheet" type="text/css" href="Css/vendas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/f096223740.js' crossorigin='anonymous'></script>
</head>
<body>

    <input type="checkbox" id="menu">

    <nav>
        <label for="menu" class="menu-bar">

            <i class="fa fa-bars"></i>

        </label>
    
        <a href="homepage.php"><label>Vitrine System</label></a>   
        
    </nav>

    
    <div class="side-menu">

        <center>
            <img src="images/bluepen.jpg">
            <br><br>

            <h2><?php echo $nomeUsuario; ?></h2>
        </center>
        <br>

        <a href="vendaspage.php"><i class="fa fa-usd" aria-hidden="true"></i><span>Vendas</span></a>
        <a href="roupaspage.php"><i class="fas fa-tshirt" aria-hidden="true"></i><span>Roupas</span></a>
        <a href="clientespage.php"><i class="fa fa-users" aria-hidden="true"></i><span>Clientes</span></a>
        <a href="fornecedorespage.php"><i class="fa fa-truck" aria-hidden="true"></i><span>Fornecedores</span></a>
        <a href="marcaspage.php"><i class="fa fa-industry" aria-hidden="true"></i><span>Marcas</span></a>
        <a href="funcionariospage.php"><i class="fa fa-id-badge" aria-hidden="true"></i><span>Funcionarios</span></a>
        <a href="movimentacaopage.php"><i class="fa fa-cubes" aria-hidden="true"></i><span>Movimentações</span></a>
        <a href="loginpage.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i><span>Logout</span></a> 
    </div>
    
    <div class="content2">
		<section>
			<div class="container2">     
			<p><a href="homepage.php" ><i class="fa fa-home" aria-hidden="true"></i></a> Home <i class="fa fa-arrow-right" aria-hidden="true"></i> Vendas</p>
			</div>
		</section>
	</div>

    <div class="content">
		<section>
		<div class="container">
        <a href='cadastro-venda.php'><button class="botao-cadastro"><i class="fa fa-plus" aria-hidden="true"></i> Cadastrar</button></a>  
                <div class="card">
                    <h2>Listagem de Vendas</h2>
                    <table class="table">
                        <tr>
                            <th>Ações</th>
                            <th><div class="cliente">Cliente</div></th>
                            <th><div class="roupa">Roupa</div></th>
                            <th><div class="forma">Forma de pagamento</div></th>
                            <th>Quantidade</th>
                            <th>Valor Unitario</th>
                            <th>Valor Total</th>
                            <th><div class="data">Data da Venda</div></th>
                        </tr>
                        <?php while($dado = $con->fetch_array()) { ?> 
                        <tr>
                            <td>
                            <a href="editar-formulario-vendas.php?ID_Venda=<?php echo $dado['ID_Venda']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="excluir-venda.php?ID_Venda=<?php echo $dado['ID_Venda']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                            <td><?php echo $dado["NomeCliente"]; ?></td>
                            <td><?php echo $dado["NomeRoupa"]; ?></td>
                            <td><?php echo $dado["FormaPagamento"]; ?></td>
                            <td><?php echo $dado["Quantidade"]; ?></td>
                            <td><?php echo $dado["ValorUnitario"]; ?></td>
                            <td><?php echo $dado["ValorTotal"]; ?></td>
                            <td><?php echo $dado["DataVenda"]; ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
		</div>
		</section>
	</div>


</body>
</html>