<?php
include ("funcoes.php");
include ("fazer-login.php");

$nomeUsuario = '';

// Verifica se a variável de sessão 'nome' está definida
if (isset($_SESSION['nome'])) {
    $nomeUsuario = $_SESSION['nome'];
}

include("conexao.php");

// Recupera o ID da venda a partir do parâmetro na URL
$idVenda = $_GET['ID_Venda'];

$consulta_venda = "SELECT * FROM Vendas WHERE ID_Venda = '$idVenda'";
$resultado_venda = $mysqli->query($consulta_venda);

// Verifica se a venda foi encontrada
if ($resultado_venda->num_rows == 1) {
    $dados_venda = $resultado_venda->fetch_assoc();
    $cliente = $dados_venda['ID_Cliente'];
    $roupa = $dados_venda['ID_Roupa'];
    $quantidade = $dados_venda['Quantidade'];
    $formpagamento = $dados_venda['ID_FormaPagamento'];
    $valorunidade = $dados_venda['ValorUnitario'];
    $valortotal = $dados_venda['ValorTotal'];

    echo '
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="Css/cadastro-venda.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/f096223740.js" crossorigin="anonymous"></script>
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
                <h2>' . $nomeUsuario . '</h2>
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
			<p><a href="homepage.php" ><i class="fa fa-home" aria-hidden="true"></i></a> Home <i class="fa fa-arrow-right" aria-hidden="true"></i> Vendas <i class="fa fa-arrow-right" aria-hidden="true"></i> Editar Vendas</p>
			</div>
		</section>
	</div>


        <div class="content">
            <section>
                <div class="container">
                    <div class="card">
                        <h2>Editar Venda</h2>
                        <div class="voltar">
                        <a href="vendaspage.php">
                            <i class="fas fa-share fa-rotate-180"> </i>
                            Voltar
                        </a>
                        </div>
                        <form method="POST" action="atualizar-vendas.php">
                            <input type="hidden" name="venda" value="' . $idVenda . '">
                            <div class="grid">
                                <div>
                                    <label for="cliente">Cliente</label>
                                    <select id="env-cliente" name="cliente">
                                        <option value="0"></option>';
    criar_options("SELECT * FROM Clientes", "ID_Cliente", "Nome", $cliente);
    echo '
                                    </select>
                                </div>
                                <div>
                                    <label for="roupa">Roupa</label>
                                    <select id="env-roupa" name="roupa">
                                        <option value="0"></option>';
    criar_options("SELECT * FROM Roupas", "ID_Roupa", "Nome", $roupa);
    echo '
                                    </select>
                                </div>
                                <div>
                                    <label for="quantidade">Quantidade</label>
                                    <input type="text" id="env-quantidade" name="quantidade" value="' . $quantidade . '">
                                </div>
                            </div>
                            <div class="grid-2">
                                <div>
                                    <label for="formpagamento">Forma de pagamento</label>
                                    <select id="env-form-pag" name="formpagamento">
                                        <option value="0"></option>';
    criar_options("SELECT * FROM FormasPagamento", "ID_FormaPagamento", "Descricao", $formpagamento);
    echo '
                                    </select>
                                </div>
                                <div>
                                    <label for="valorunidade">Valor da Unidade</label>
                                    <input type="text" id="env-valor-unid" name="valorunidade" value="' . $valorunidade . '">
                                </div>
                                <div>
                                    <label for="valortotal">Valor Total</label>
                                    <input type="text" id="env-valor-total" name="valortotal" value="' . $valortotal . '">
                                </div>
                            </div>
                            <br>
                            <div class="button">
                                <input type="submit" value="Editar Venda" name="editar">
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
            </section>
        </div>

    </body>
    </html>';
} else {
    // Venda não encontrada
    echo '<script>alert("Venda não encontrada!");</script>';
}
?>
