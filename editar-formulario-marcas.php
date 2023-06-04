<?php
include("funcoes.php");
include("fazer-login.php");

$nomeUsuario = '';

// Verifica se a variável de sessão 'nome' está definida
if (isset($_SESSION['nome'])) {
    $nomeUsuario = $_SESSION['nome'];
}

include("conexao.php");

// Recupera o ID da marca a partir do parâmetro na URL
$idMarca = $_GET['ID_Marca'];

$consulta_marca = "SELECT * FROM Marcas WHERE ID_Marca = '$idMarca'";
$resultado_marca = $mysqli->query($consulta_marca);

// Verifica se a marca foi encontrada
if ($resultado_marca->num_rows == 1) {
    $dados_marca = $resultado_marca->fetch_assoc();
    $nomeMarca = $dados_marca['Nome'];
    
    echo '
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/cadastro-marcas.css">
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
			<p><a href="homepage.php" ><i class="fa fa-home" aria-hidden="true"></i></a> Home <i class="fa fa-arrow-right" aria-hidden="true"></i> Vendas <i class="fa fa-arrow-right" aria-hidden="true"></i> Editar Marca</p>
			</div>
		</section>
	</div>

    <div class="content">
    <section>
        <div class="container">
            <div class="card">
                <h2>Editar Marca</h2>
                <div class="voltar">
                    <a href="marcaspage.php">
                        <i class="fas fa-share fa-rotate-180"> </i>
                        Voltar
                    </a>
                </div>
                <form method="POST" action="atualizar-marcas.php">
                <input type="hidden" name="id" value="' . $idMarca . '">
                <div class="grid">
                    <div>
                        <label for="marcas">Nome da Marca</label>
                        <input type="text" name="marcas" value="' . $nomeMarca . '">
                    </div>
                </div>
                <br>
                <div class="button" style="position: relative; left: 230px">
                    <input type="submit" value="Editar Marca" name="editar">
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
    echo '<script>alert("Marca não encontrada!");</script>';
}
?>