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
    <link rel="stylesheet" type="text/css" href="css/cadastro-venda.css">
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
                    <label for="">Cadastro de Funcionarios</label>
                    <br>
                    <form action="">
                    <div class="cliente">
                        <label for="">Cliente</label>
                        <select name="" id="">
                            <option value="0"></option>
                            <?php
                            criar_options("SELECT * from Clientes","ID_Cliente","Nome","");
                            ?>
                        </select>
                    </div>
                    <div class="roupa">
                        <label for="">Roupa</label>
                        <select name="" id="">
                            <option value="0"></option>
                            <?php
                            criar_options("SELECT * from Roupas","ID_Roupa","Nome","");
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="forma-pagamento">
                        <label for="">Forma de pagamento</label>
                        <select name="" id="">
                            <option value="0"></option>
                            <?php
                            criar_options("SELECT * from FormasPagamento","ID_FormaPagamento","Descricao","");
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="quantidade">
                        <label for="">Quantidade</label>
                        <input type="text">
                    </div>
                    <div class="valor-unidade">
                        <label for="">Valor da Unidade</label>
                        <input type="text">
                    </div>
                    <div class="valor-total">
                        <label for="">Valor Total</label>
                        <input type="text">
                    </div>
                    </form>
                    <div class="button">
                        <input type="submit" value="Finalizar Venda">
                    </div>

                </div>
            </div>
        </section>
    </div>

</body>
</html>
