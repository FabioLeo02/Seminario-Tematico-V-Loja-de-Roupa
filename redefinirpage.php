<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/redefinir-senha.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body>
    <nav>
        <label>Vitrine System</label>       
    </nav>


    <div class="container">
    <div class="wrapper">
    <div class="title"><span>Recuperar a Senha</span></div>
        <form action="redefinir-senha.php" method="post">
    <div class="row">
        <i class="fa fa-user"></i>
        <input type="text" placeholder="CPF" name="cpf" require>
    </div>

    <div class="row">
        <i class="fa fa-lock"></i>
        <input type="password" placeholder="Nova Senha" name="novasenha" require>
    </div>

    <div class="row">
        <i class="fa fa-user"></i>
        <input type="password" placeholder="Confirmar Senha" name="confirmasenha" require>
    </div>


    <!-- Botão Login -->
    <div class="pass"><a href="loginpage.php"> Voltar</a></div> 
    <div class="row button">
        <input type="submit" value="Alterar Senha" name="alterar">
    </div>
        <div class="signup-link">Não possui cadastro?<a href="cadastro-usuario.php"> Clique aqui</a></div>
        </form>
    </div>

    </div>

</body>
</html>