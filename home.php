<?php
	require_once '../../app_ordem_servico/validador_acesso.php';

	$acao = 'recuperar';
	require './ordem_servico.controller.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home - Ordem de Serviço</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
		integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>

	<link rel="stylesheet" href="css/estilo.css">

	<style>
		.pagina {
			margin: 20px 20px;
		}

		a {
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

		<ul class="navbar-nav ">

			<!-- <li class="nav-item">
			<label for="Usuario"><?= $_SESSION['nome']?></label>
            </li> -->

			<li class="nav-item">
				<a class="nav-link" href="logoff.php">SAIR</a>
			</li>

		</ul>
	</nav>

	<div class="container app">
		<div class="row">
			<div class="col-md-3 menu">
				<ul class="list-group">
					<li class="list-group-item active"><a href="home.php">Home</a></li>
					<li class="list-group-item"><a href="cadastro.php">Cadastro</a></li>
					<li class="list-group-item"><a href="abrir_os.php">Abrir Ordem de Serviço</a></li>
				</ul>
			</div>



			<div class="container col-md-9">

				<!-- CARREGA ORDEM DE SERVIÇO COM STATUS PENDENTE -->
				<div class="pagina">
					<div class="row">
						<div class="col">
							<h4>OS's Pendentes</h4>
							<hr />

							<?php foreach ($osPendente as $indice => $os) { ?>
							<div class="row mb-3 d-flex align-items-center tarefa">
								<div class="col-sm-9"> <strong> <?= $os['id_os'] ?> : <?= $os['tipo'] ?></strong>:
									<?= $os['numero_serie'] ?> || <strong> <?= $os['fantasia']?> </strong></div>
								<div class="col-sm-2 mt-2 d-flex justify-content-between">
									<i class="fas fa-trash-alt fa-md text-danger"></i>
									<i class="fas fa-check-square fa-md text-success" data-toggle="modal"
										data-target="#modalOs" data-id="<?= $os['id_os'] ?>"
										data-abertura="<?= $os['data_abertura'] ?>"
										data-garantia="<?= $os['data_garantia'] ?>"
										data-serie="<?= $os['numero_serie'] ?>" data-tipo="<?= $os['tipo'] ?>"
										data-prestador="<?= $os['fantasia'] ?>" data-motivo="<?= $os['motivo'] ?>"></i>
								</div>
							</div>
							<hr />
							<?php }?>

						</div>
					</div>
				</div>


				<!-- CARREGA ORDEM'S DE SERVIÇO AINDA NA GARANTIA DE SERVIÇO -->
				<div class="pagina">
					<div class="row">
						<div class="col">
							<h4>Garantia de Serviços</h4>
							<hr />

							<?php foreach ($osGarantia as $indice => $garantia) { ?>
								<div class="row mb-3 d-flex align-items-center tarefa">
								<div class="col-sm-9"> <strong> <?= $garantia['id_os'] ?> : <?= $garantia['tipo'] ?></strong>:
									<?= $os['numero_serie'] ?> || <strong> <?= $garantia['fantasia']?> </strong></div>
								<div class="col-sm-2 mt-2 d-flex justify-content-between">
									<i class="fas fa-search fa-sm text-info"></i>
								</div>
							</div>
							<hr />
							<?php }?>

						</div>
					</div>
				</div>

				<!-- MODAL BOOTSTRAP -->
				<?php include './modal_os.php'; ?>
			</div>


		</div>
	</div>
</body>

</html>