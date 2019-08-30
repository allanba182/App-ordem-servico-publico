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

	<?php include './includes.php' ?>

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

	<div class="container app">
		<div class="row menu-fixed">
			<div class="col-md-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="home.php">Home</a></li>
					<li class="list-group-item active"><a href="./cadastro.php">Cadastro</a></li>
					<li class="list-group-item"><a href="abrir_os.php">Abrir Ordem de Serviço</a></li>
                </ul>
			</div>

			<div class="container col-md-9">
                <div class="row">
                    <div class="card-home card">   
                        <div class="card-body">
                            <div class="row">

                                <div class="col-6 d-flex justify-content-center">
                                    <a href="./form_cadastro.php?cadastro=usuario">
                                        <img src="./img/usuario.svg" width="70" height="70">
                                        <label for="Usuario">Usuario</label>
                                    </a>
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <a href="./form_cadastro.php?cadastro=prestador">
                                        <img src="./img/prestadores.svg" width="70" height="70">
                                        <label for="Prestadores de Serviço">Prestadores de Serviço</label>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-6 d-flex justify-content-center">
                                    <a href="./form_cadastro.php?cadastro=equipamento">
                                        <img src="./img/equip.svg" width="70" height="70">
                                        <label for="Equipamentos">Equipamentos</label>
                                    </a>
                                </div>

                                <div class="col-6 d-flex justify-content-center">
                                    <a href="./form_cadastro.php?cadastro=tipo">
                                        <img src="./img/tipos.svg" width="70" height="70">
                                        <label for="Tipos de Equipamento">Tipos de Equipamento</label>
                                    </a>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>	
            </div> 
		</div>
	</div>
</body>
</html>