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
$idCliente = $_GET['ID_Cliente'];

$consulta_cliente = "SELECT * FROM Clientes WHERE ID_Cliente = '$idCliente'";
$resultado_cliente = $mysqli->query($consulta_cliente);

// Verifica se a venda foi encontrada
if ($resultado_cliente->num_rows == 1) {
    $dados_cliente = $resultado_cliente->fetch_assoc();
    $cliente = $dados_cliente['ID_Cliente'];
    $nome = $dados_cliente['Nome'];
    $telefone = $dados_cliente['Telefone'];
    $email = $dados_cliente['Email'];
    $endereco = $dados_cliente['Endereco'];
    $tipoUsuario = $dados_cliente['ID_TipoUsuario'];

    echo'
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/cadastro-clientes.css">
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

            <h2> '. $nomeUsuario . '</h2>
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
        <p><a href="homepage.php" ><i class="fa fa-home" aria-hidden="true"></i></a> Home <i class="fa fa-arrow-right" aria-hidden="true"></i> Vendas <i class="fa fa-arrow-right" aria-hidden="true"></i> Editar Cliente</p>
        </div>
    </section>
    </div>

    <div class="content">
            <section>
                <div class="container">
                    <div class="card">
                        <h2>Editar Cliente</h2>
                        <div class="voltar">
                            <a href="clientespage.php">
                                <i class="fas fa-share fa-rotate-180"> </i>
                                Voltar
                            </a>
                        </div>
                        <form method="POST" action="atualizar-clientes.php">
                            <input type="hidden" name="id" value="' . $cliente . '">
                            <div class="grid">
                                <div>
                                        <label for="cliente">Nome do Cliente</label>
                                        <input type="text" name="cliente" value="' . $nome . '">
                                </div>

                                <div>
                                        <label for="email">Email</label>
                                        <input type="text" name="email" value="' . $email . '">
                                </div>

                                <div>
                                        <label for="telefone">Telefone</label>
                                        <input type="text" name="telefone" value="' . $telefone . '">
                                </div>
                            </div>
                            <div class="grid-2">
                                    <div>
                                        <label for="endereco">Endereço</label>
                                        <input type="text" name="endereco" value="' . $endereco . '">
                                    </div>

                                    <div>
                                        <label for="tipo-usu">Tipo de Usuario</label>
                                        <select name="tipousuario">';
                            criar_options("SELECT * from TipoUsuario","ID_TipoUsuario","Nome","2");
                            echo '                
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="button">
                                <input type="submit" value="Editar Cliente" name="editar">
                            </div>
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