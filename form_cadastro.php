<?php
    require_once '../../app_ordem_servico/validador_acesso.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro - Ordem de Serviço</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

    <style>
      .card-home 
      {
        width: 100%;
        margin: 0 20px;
        padding: 20px;
      }

      .card-body a
      {
        margin:50px;
      }

      a
      {
        display: block;
        width: 100%;
        height: 100%;
      }

    </style>

</head>
<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
				OS - Ordem de Serviço
			</a>
		</div>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="logoff.php">SAIR</a>
            </li>
        </ul>
    </nav>

    <!-- MENSAGEM CADASTRO INSERIDO COM SUCESSO -->
    <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>

    <div class="bg-success pt-2 text-white d-flex justify-content-center">
        <h5>Inserido com sucesso !</h5>
    </div>
    <?php } ?>
    <!--  -->

    <div class="container app">
		<div class="row menu-fixed">
			<div class="col-md-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="home.php">Home</a></li>
					<li class="list-group-item active"><a href="./cadastro.php">Cadastro</a></li>
					<li class="list-group-item"><a href="abrir_os.php">Abrir Ordem de Serviço</a></li>
                </ul>
            </div>
            
            <!-- CARREGA FORM TIPO EQUIPAMENTO -->
            <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'tipo') 
            {
                require_once './tipo.php';

            } ?>

            <!-- CARREGA FORM EQUIPAMENTO -->
            <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'equipamento') 
            {
                require_once './equipamento.php';

            } ?>

            <!-- CARREGA FORM PRESTADORES DE SERVIÇO -->
            <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'prestador') 
            {
                require_once './prestador.php';

            } ?>

            <!-- CARREGA FORM CADASTRO DE USUARIO -->
            <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'usuario') 
            {
                require_once './usuario.php';

            } ?>

        </div>
    </div>
</body>
</html>