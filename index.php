<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ordem de serviço - Login</title>

    <?php include './includes.php' ?>

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>

</head>
<body>
<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="./img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        OS - Ordem de Serviço
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>

            <div class="card-body">
              <form action="usuario.controller.php?acao=logar" method="post">
                <div class="form-group">
                  <input name="usuario" type="text" class="form-control" placeholder="Login">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php if( isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                
                <div class="text-danger">
                  Usuário ou senha inválido(s)
                </div>

                <?php } ?>

                <?php if( isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                <div class="text-danger">
                  Necessario fazer login para continuar
                </div>

                <?php } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>  
</body>
</html>