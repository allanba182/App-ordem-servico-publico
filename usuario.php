<?php
	$acao = recuperar;
	require './usuario.controller.php';

?>

<script>

	function editarSenha()
	{
		NovaSenha = document.getElementById('editar_senha').value;
		CNovaSenha = document.getElementById('editar_confirmar_senha').value;

		if (NovaSenha != CNovaSenha) {
			alert("SENHAS DIFERENTES!\nFAVOR DIGITAR SENHAS IGUAIS"); 
		}else{
			document.FormEditar.submit();
		}
	}

	function cadastrarSenha()
	{
		NovaSenha = document.getElementById('cadastrar_senha').value;
		CNovaSenha = document.getElementById('cadastrar_confirmar_senha').value;

		if (NovaSenha != CNovaSenha) {
			alert("SENHAS DIFERENTES!\nFAVOR DIGITAR SENHAS IGUAIS"); 
		}else{
			document.FormCadastrar.submit();
		}
	}


</script>

<div class="col-md-9">
	<div class="container pagina">
		<h4>Cadastro de Usuario</h4>
		<div class="row table-responsive">
			<div class="col">
				<table class="table table-striped table-hover ">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Usuario</th>
							<th>E-mail</th>
						</tr>
					</thead>
					<tbody class="overflow-auto">
						<?php foreach ($usuarios as $indice => $usuario) { ?>
						<tr data-toggle="modal" data-target="#modalEditar" data-id="<?= $usuario->id_usuario ?>"
							data-nome="<?= $usuario->nome ?>" data-usuario="<?= $usuario->usuario ?>"
							data-email="<?= $usuario->email ?>">

							<td><?= $usuario->nome ?></td>
							<td><?= $usuario->usuario ?></td>
							<td><?= $usuario->email ?></td>
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
				<h5 class="modal-title" id="modalCadastrarLabel">Cadastro de Usuario</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="usuario.controller.php?acao=inserir" method="post" id="FormCadastrar" name="FormCadastrar" >
					<div class="form-group">
						<label>Nome:</label>
						<input name="nome" type="text" class="form-control" placeholder="Exemplo: Fulano de Tal"
							required>
					</div>
					<div class="form-group">
						<label>E-mail:</label>
						<input name="email" type="email" class="form-control" placeholder="Exemplo: Fulano@fulano.com"
							required>
					</div>
					<div class="form-group">
						<label>Usuario para login:</label>
						<input name="usuario" type="text" class="form-control" placeholder="Exemplo: fulano.tal"
							required>
					</div>
					<div class="form-group">
						<label>Senha:</label>
						<input name="senha" id="cadastrar_senha" type="password" class="form-control" placeholder="Maximo 8 caracteres"
							required>
					</div>
					<div class="form-group">
						<label>Confirme a Senha:</label>
						<input name="confirmar_senha" id="cadastrar_confirmar_senha" type="password" class="form-control" placeholder="Maximo 8 caracteres"
							required>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success" onClick="cadastrarSenha()">Cadastrar</button>
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
				<form class="form-group" action="usuario.controller.php?acao=atualizar" method="POST" id="FormEditar" name="FormEditar">

					<div class="container-fluid">

						<div class="row">
							<div class="col-md-3">
								<label for="id" class="col-form-label">ID: </label>
								<input type="text" class="form-control" id="id" name="id" readonly>
							</div>

							<div class="col-md-9">
								<label for="nome" class="col-form-label">Nome: </label>
								<input type="text" class="form-control" id="nome" name="nome" required>
							</div>

						</div>

						<br>

						<div class="row">
							<div class="col-md-5">
								<label for="Usuario" class="col-form-label">Usuario:</label>
								<input type="text" class="form-control" id="usuario" name="usuario" required>
							</div>

							<div class="col-md-7">
								<label for="Email" class="col-form-label">Email:</label>
								<input type="email" class="form-control" id="email" name="email" required>
							</div>
						</div>
						<br>

						<div class="row">

							<div class="col-md-6">
								<label for="Nova Senha" class="col-form-label">Nova Senha:</label>
								<input type="password" class="form-control" id="editar_senha" name="senha" required>
							</div>

							<div class="col-md-6">
								<label for="Confirmar Senha" class="col-form-label">Confirmar Senha:</label>
								<input type="password" class="form-control" id="editar_confirmar_senha" name="confirmar_senha" required>
							</div>

						</div>
						<br>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" onClick="editarSenha()" >Salvar</button>
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
		var nome = button.data('nome')
		var usuario = button.data('usuario')
		var email = button.data('email')
		var modal = $(this)
		modal.find('#modalEditarLabel').text('Editar usuario : ' + nome)

		modal.find('#id').val(id)

		modal.find('#nome').val(nome)

		modal.find('#usuario').val(usuario)

		modal.find('#email').val(email)
	})
</script>