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
$idFornecedor = $_GET['ID_Fornecedor'];

$consulta_fornecedor = "SELECT * FROM Fornecedores WHERE ID_Fornecedor = '$idFornecedor'";
$resultado_fornecedor = $mysqli->query($consulta_fornecedor);

// Verifica se a venda foi encontrada
if ($resultado_fornecedor->num_rows == 1) {
    $dados_fornecedor = $resultado_fornecedor->fetch_assoc();
    $fornecedor = $dados_fornecedor['ID_Fornecedor'];
    $nome = $dados_fornecedor['Nome'];
    $telefone = $dados_fornecedor['Telefone'];
    $email = $dados_fornecedor['Email'];

    echo'

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/cadastro-fornecedor.css">
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

            <h2> ' . $nomeUsuario . '</h2>
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
			<p><a href="homepage.php" ><i class="fa fa-home" aria-hidden="true"></i></a> Home <i class="fa fa-arrow-right" aria-hidden="true"></i> Vendas <i class="fa fa-arrow-right" aria-hidden="true"></i> Editar Fornecedor</p>
			</div>
		</section>
	</div>

    <div class="content">
            <section>
                <div class="container">
                    <div class="card">
                        <h2>Editar Fornecedor</h2>
                        <div class="voltar">
                        <a href="fornecedorespage.php">
                            <i class="fas fa-share fa-rotate-180"> </i>
                            Voltar
                        </a>
                        </div>
                        <form method="POST" action="atualizar-fornecedores.php">
                        <input type="hidden" name="id" value="' . $idFornecedor . '">
                        <div class="grid">
                            <div>
                                <label for="fornecedor">Nome do Fornecedor</label>
                                <input type="text" name="fornecedor" value="' . $nome . '">
                            </div>
                            <div>
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" value="' . $telefone . '">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="text" name="email" value="' . $email . '">
                            </div>
                        </div>
                        <br>
                        <div class="button">
                            <input type="submit" value="Editar Fornecedor" name="editar">
                        </div>
                        </form>
                        </div>
                </div>
            </section>
        </div>

    </body>
    </html>';

} else {
    // Venda não encontrada
    echo '<script>alert("Cliente não encontrada!");</script>';
}
?>