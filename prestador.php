<?php
	$acao = 'recuperar';
	require './prestador.controller.php';
?>
<div class="col-md-9">
	<div class="container pagina">
		<h4>Cadastro de Prestadores de Serviço</h4>
		<div class="row table-responsive">
			<div class="col">
				<table class="table table-striped table-hover ">
					<thead>
						<tr>
							<th>ID</th>
							<th>Fantasia</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody class="overflow-auto">
						<?php foreach ($prestadores as $indice => $prestador) { ?>
						<tr data-toggle="modal" data-target="#modalEditar" data-id="<?= $prestador->id_prestador ?>"
							data-fantasia="<?= $prestador->fantasia ?>" data-email="<?= $prestador->email ?>" data-envia_email="<?= $prestador->envia_email ?>">

							<td><?= $prestador->id_prestador ?></td>
							<td><?= $prestador->fantasia ?></td>
							<td><?= $prestador->email ?></td>
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
				<h5 class="modal-title" id="modalCadastrarLabel">Cadastro de Tipo de Equipamento</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="prestador.controller.php?acao=inserir" method="post">
					<div class="form-group">
						<label>Fantasia:</label>
						<input name="fantasia" type="text" class="form-control"
							placeholder="Exemplo: Impressora, Balanças, Relógio de ponto" required>
					</div>
					<div class="form-group">
						<label>E-mail:</label>
						<input name="email" type="email" class="form-control"
							placeholder="Exemplo: Impressora, Balanças, Relógio de ponto" required>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="envia_email" id="envia_email">
						<label class="form-check-label" for="Enviar email automaticamente">Enviar email automaticamente
							ao registrar O.S.</label>
					</div>
					<br>
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
				<form class="form-group" action="prestador.controller.php?acao=atualizar" method="POST">

					<div class="container-fluid">

						<div class="row">
							<div class="col-md-3">
								<label for="id" class="col-form-label">ID: </label>
								<input type="text" class="form-control" id="id" name="id" readonly>
							</div>

							<div class="col-md-9">
								<label for="Fantasia" class="col-form-label">Fantasia: </label>
								<input type="text" class="form-control" id="fantasia" name="fantasia">
							</div>
							<br>
							<div class="col-md-12">
								<label for="Email" class="col-form-label">Email: </label>
								<input type="text" class="form-control" id="email" name="email">
							</div>
							<br>
						</div>
						<br>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" name="envia_email" id="envia_email" >
							<label class="form-check-label" for="Enviar email automaticamente">Enviar email
								automaticamente
								ao registrar O.S.</label>
						</div>
						<br>

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
		var fantasia = button.data('fantasia')
		var email = button.data('email')
		var envia_email = button.data('envia_email')
		var modal = $(this)

		modal.find('#modalEditarLabel').text('Editar Prestador : ' + fantasia)

		modal.find('#id').val(id)

		modal.find('#fantasia').val(fantasia)

		modal.find('#email').val(email)


		if( envia_email === true)
			modal.find('#envia_email').prop("checked", true)
		else
			modal.find('#envia_email').prop("checked", false)
	})
</script>