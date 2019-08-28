<?php
	$acao = recuperar;
	require './tipo_equipamento.controller.php';

?>

<script>

      function remover()
      {
        var os = document.getElementById("id").value;
        window.location = "tipo_equipamento.controller.php?acao=remover&id="+os;

      }
    
</script>

<div class="col-md-9">
	<div class="container pagina">
		<h4>Cadastro de Tipo de Equipamento</h4>
		<div class="row table-responsive">
			<div class="col">
				<table class="table table-striped table-hover ">
					<thead>
						<tr>
							<th>Tipo</th>
						</tr>
					</thead>
					<tbody class="overflow-auto">
						<?php foreach ($tipos as $indice => $tipo) { ?>
						<tr data-toggle="modal" data-target="#modalEditar" data-id="<?= $tipo->id_tipo ?>"
							data-tipo="<?= $tipo->tipo ?>">

							<td><?= $tipo->tipo ?></td>
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
				<form action="tipo_equipamento.controller.php?acao=inserir" method="post">
					<div class="form-group">
						<label>Descrição do Tipo:</label>
						<input name="tipo" type="text" class="form-control"
							placeholder="Exemplo: Impressora, Balanças, Relógio de ponto" required>
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
				<form class="form-group" action="tipo_equipamento.controller.php?acao=atualizar" method="POST">

					<div class="container-fluid">

						<div class="row">
							<div class="col-md-3">
								<label for="id" class="col-form-label">ID: </label>
								<input type="text" class="form-control" id="id" name="id" readonly>
							</div>

							<div class="col-md-9">
								<label for="tipo" class="col-form-label">Tipo: </label>
								<input type="text" class="form-control" id="tipo" name="tipo" required>
								<input type="hidden" class="form-control" id="tipo_antigo" name="tipo_antigo">
							</div>
						</div>
						<br>						

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Salvar</button>
						<button type="button" class="btn btn-danger" onclick="remover()">Excluir</button>
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
		var modal = $(this)

		modal.find('#modalEditarLabel').text('Editar Tipo : ' + tipo)

		modal.find('#id').val(id)

		modal.find('#tipo').val(tipo)

		modal.find('#tipo_antigo').val(tipo)

	})
</script>