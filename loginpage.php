<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body>
    <nav>
        <label>Vitrine System</label>       
    </nav>


    <div class="container">
    <div class="wrapper">
    <div class="title"><span>Bem-vindo(a)</span></div>
      <form action="fazer-login.php" method="post">

    <div class="row">
        <i class="fa fa-user"></i>
        <input type="text" placeholder="Email" name="email" require>
    </div>

    <div class="row">
        <i class="fa fa-lock"></i>
        <input type="password" placeholder="Password" name="senha" require>
    </div>


    <div class="pass"><a href="redefinirpage.php">Esqueceu a Senha?</a></div> 
      <div class="row button">
        <input type="submit" value="Login" name="logar">
    </div>
        <div class="signup-link">Não possui cadastro?<a href="cadastro-usuario.php"> Clique aqui</a></div>
      </form>
    </div>

    </div>

</body>
</html>