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
			margin-bottom: 20px;
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
							<br>
							<div class="row table-responsive">
								<div class="col">
									<table class="table table-striped table-hover ">
										<thead>
											<tr>
												<th>Tipo</th>
												<th>Nome</th>
												<th>Nº Série</th>
												<th>Prestador</th>
											</tr>
										</thead>
										<tbody class="overflow-auto">

											<?php foreach ($osPendente as $indice => $os) { ?>
											<tr data-toggle="modal" data-target="#modalOs" data-id="<?= $os->id_os ?>"
												data-abertura="<?= $os->data_abertura ?>"
												data-garantia="<?= $os->data_garantia ?>"
												data-serie="<?= $os->numero_serie ?>" data-tipo="<?= $os->tipo ?>"
												data-prestador="<?= $os->fantasia ?>" data-motivo="<?= $os->motivo ?>">
											
												<td><?= $os->tipo ?></td>
												<td><?= $os->nome_equipamento?></td>
												<td><?= $os->numero_serie ?></td>
												<td><?= $os->fantasia ?></td>
											</tr>
											<?php } ?>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- CARREGA ORDEM'S DE SERVIÇO AINDA NA GARANTIA DE SERVIÇO -->
				<div class="pagina">
					<div class="row">
						<div class="col">
							<h4>Garantia de Serviços</h4>
							<br>
							<div class="row table-responsive">
								<div class="col">
									<table class="table table-striped table-hover ">
										<thead>
											<tr>
												<th>Tipo</th>
												<th>Nome</th>
												<th>Nº Série</th>
												<th>Garantia</th>
											</tr>
										</thead>
										<tbody class="overflow-auto">
											
											<?php foreach ($osGarantia as $indice => $garantia) { ?>
											<tr data-toggle="modal" data-target="#modalOsFinalizado" data-id="<?= $garantia->id_os ?>"
												data-abertura="<?= $garantia->data_abertura ?>"
												data-garantia="<?= $garantia->data_garantia ?>"
												data-serie="<?= $garantia->numero_serie ?>" 
												data-tipo="<?= $garantia->tipo ?>"
												data-prestador="<?= $garantia->fantasia ?>" 
												data-motivo="<?= $garantia->motivo ?>" 
												data-reparos="<?= $garantia->reparos_realizados ?>"
												data-valor="<?= $garantia->valor ?>"
												data-anexo="<?= $garantia->anexo ?>">

												<td><?= $garantia->tipo ?></td>
												<td><?= $garantia->nome_equipamento?></td>
												<td><?= $garantia->numero_serie ?></td>
												<td><?= $garantia->data_garantia ?></td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- MODAL OS's PENDENTES -->
				<?php include './modal_os.php' ?>

				<!-- MODAL OS's FINALIZADAS -->
				<?php include './modal_os_finalizado.php' ?> 

			</div>
		</div>
	</div>
</body>

</html>