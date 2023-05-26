<?php
include ("funcoes.php");

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
    
        <a href="homepage.php"></a><label>Vitrine System</label>   
        
    </nav>

    <div class="side-menu">

        <center>
            <img src="images/bluepen.jpg">
            <br><br>

            <h2>Nome</h2>
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

    <div class="content">
		<section>
			<div class="container">
                <div class="card">
				    <h2>Cadastro de Fornecedores</h2>
                    <br>
                    <div class="cliente">
                        <h3>Cliente</h3>
                        <select name="" id="">
                            <option value="0"></option>
                            <?php
                            criar_options("SELECT * from clientes","ID_Cliente","Nome","");
                            ?>
                        </select>
                    </div>
                    <div class="roupa">
                        <h3>Roupa</h3>
                        <select name="" id="">
                            <option value="0"></option>
                            <?php
                            criar_options("SELECT * from roupas","ID_Roupa","Nome","");
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="forma-pagamento">
                        <h3>Forma de pagamento</h3>
                        <select name="" id="">
                            <option value="0"></option>
                            <?php
                            criar_options("SELECT * from formaspagamento","ID_FormaPagamento","Descricao","");
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="quantidade">
                        <h3>Quantidade</h3>
                        <input type="text">
                    </div>
                    <div class="valor-unidade">
                        <h3>Valor da Unidade</h3>
                        <input type="text">
                    </div>
                    <div class="valor-total">
                        <h3>Valor Total</h3>
                        <input type="text">
                    </div>
                    <div class="button">
                        <input type="submit" value="Finalizar Venda">
                    </div>

                </div>
			</div>
		</section>
	</div>

</body>
</html>