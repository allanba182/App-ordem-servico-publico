<?php

	$acao = 'recuperar';

	require './equipamento.controller.php';
    
?>

<div class="col-md-9">
	<div class="container pagina">
		<h4>Cadastro de Equipamento</h4>
		<div class="row table-responsive">
			<div class="col">
				<table class="table table-striped table-hover ">
					<thead>
						<tr>
							<th class="w-30">Tipo</th>
							<th>Nome</th>
							<th>Nº. Série</th>
						</tr>
					</thead>
					<tbody class="overflow-auto">
						<?php foreach ($equipamentos as $indice => $equipamento) { ?>
						<tr data-toggle="modal" data-target="#modalEditar" 
						data-id="<?= $equipamento->id_equipamento ?>"
						data-tipo="<?= $equipamento->tipo ?>" 
						data-nome="<?= $equipamento->nome ?>"
						data-numero_serie="<?= $equipamento->numero_serie ?>">

							<td class="w-30"><?= $equipamento->tipo ?></td>
							<td><?= $equipamento->nome ?></td>
							<td><?= $equipamento->numero_serie ?></td>
						</tr>
						<?php } ?>

					</tbody>
				</table>
				<button class="btn btn-success" data-toggle="modal" data-target="#modalCadastrar">Cadastrar</button>
			</div>
		</div>
	</div>
</div>


<!-- Modal Cadastrar-->
<div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="modalCadastrarLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalCadastrarLabel">Cadastro de Equipamento</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="equipamento.controller.php?acao=inserir" method="post">
					
					<div class="form-group">
						<label>Nome:</label>
						<input name="nome" type="text" class="form-control"
							placeholder="Exemplo: Dell Optiplex, HP Deskjet" required>
					</div>

					<div class="form-group">
						<label>Numero de série:</label>
						<input name="serie" type="text" class="form-control"
							placeholder="Exemplo: SW06124567, V556009844" required>
					</div>

					<div class="form-group">
						<label>Tipo:</label>
						<select name="tipo" class="form-control" required>
						<option disabled selected value> -- Selecione uma opção -- </option>
							<!-- POPULANDO SELECT COM TIPOS CADASTRADOS NO BANCO -->
							<?php foreach ($tipos as $indice => $tipo) { ?>

							<option value="<?= $tipo->id_tipo ?>"> <?= $tipo->tipo ?> </option>

							<?php } ?>

						</select>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success">Cadastrar</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Editar -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalEditarLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-group" action="equipamento.controller.php?acao=atualizar" method="POST">

					<div class="container-fluid">

						<div class="row">
							<div class="col-md-3">
								<label for="id" class="col-form-label">ID: </label>
								<input type="text" class="form-control" id="id" name="id" readonly>
							</div>

							<div class="col-md-9">
								<label for="Tipo" class="col-form-label">Tipo: </label>
								<input type="text" class="form-control" id="tipo" name="tipo" readonly>
							</div>

						</div>

						<br>
						
						<div class="row">
							<div class="col-md-12">
								<label for="Nome" class="col-form-label">Nome:</label>
								<input type="text" class="form-control" id="nome" name="nome" required>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<label for="Numero Serie" class="col-form-label">Numero de Série:</label>
								<input type="text" class="form-control" id="numero_serie" name="numero_serie" required>
							</div>
						</div>
						<br>

					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Salvar</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$('#modalEditar').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var id = button.data('id')
		var tipo = button.data('tipo')
		var nome = button.data('nome')
		var numero_serie = button.data('numero_serie')
		var modal = $(this)
		modal.find('#modalEditarLabel').text('Editar equipamento : ' + numero_serie)

		modal.find('#id').val(id)

		modal.find('#tipo').val(tipo)

		modal.find('#nome').val(nome)

		modal.find('#numero_serie').val(numero_serie)

	})
</script>