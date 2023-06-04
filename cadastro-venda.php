<?php
include ("funcoes.php");

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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="Css/cadastro-venda.css">
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
			<p><a href="homepage.php" ><i class="fa fa-home" aria-hidden="true"></i></a> Home <i class="fa fa-arrow-right" aria-hidden="true"></i> Vendas <i class="fa fa-arrow-right" aria-hidden="true"></i> Cadastrar Venda</p>
			</div>
		</section>
	</div>

    <div class="content">
    <section>
        <div class="container">
            <div class="card">
                <h2>Cadastro de Vendas</h2>
                <div class="voltar">
                    <a href="vendaspage.php">
                        <i class="fas fa-share fa-rotate-180"> </i>
                        Voltar
                    </a>
                </div>
            <form action="registrar_vendas.php" method="post">
            <div class="grid">
                <div>
                    <label for="cliente">Cliente</label>
                    <select id="env-cliente" name="cliente">
                        <option value="0"></option>
                        <?php
                        criar_options("SELECT * from Clientes","ID_Cliente","Nome","");
                        ?>
                    </select>
                    
                </div>
                <div>
                    <label for="roupa">Roupa</label>
                    <select id="env-roupa" name="roupa">
                        <option value="0"></option>
                        <?php
                        criar_options("SELECT * from Roupas","ID_Roupa","Nome","");
                        ?>
                    </select>
                </div>
                <div>
                    <label for="quantidade">Quantidade</label>
                    <input type="text" id="env-quantidade" name="quantidade">
                </div>
            </div>
            <div class="grid-2">
                <div>
                    <label for="formpagamento">Forma de pagamento</label>
                    <select id="env-form-pag" name="formpagamento">
                        <option value="0"></option>
                        <?php
                        criar_options("SELECT * from FormasPagamento","ID_FormaPagamento","Descricao","");
                        ?>
                    </select>
                </div>
                <div>
                    <label for="valorunidade">Valor da Unidade</label>
                    <input type="text" id="env-valor-unid" name="valorunidade">
                </div>
                <div>
                    <label for="valortotal">Valor Total</label>
                    <input type="text" id="env-valor-total" name="valortotal">
                </div>

            </div>
                <br>
                <div class="button">
                    <input type="submit" value="Finalizar Venda" name="cadastrar">
                </div>
                </form>
                <br>
            </div>
        </div>
    </section>
</div>


</body>
</html>
