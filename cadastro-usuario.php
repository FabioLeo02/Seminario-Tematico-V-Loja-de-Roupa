<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/cadastrar-usuario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body>
    <nav>
        <label>Vitrine System</label>       
    </nav>


    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Cadastrar Usuario</span></div>
                <form action="inserir-usuario.php" method="post">

                <div class="row">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Nome de Usuario" name="nome" require>
                </div>

                <div class="row">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Email" name="email" require>
                </div>

                <div class="row">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="CPF" name="cpf" require>
                </div>
                <div class="row">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Senha" name="senha" require>
                </div>

                <div class="row">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Confirmar Senha" name="confirmarsenha" require>
                </div>

                <div class="row button">
                    <input type="submit" value="Cadastrar" name="cadastrar">
                </div>
                <div class="signup-link">Já possui cadastro?<a href="loginpage.php"> Clique aqui</a></div>
                </form>
        </div>

    </div>

</body>
</html>