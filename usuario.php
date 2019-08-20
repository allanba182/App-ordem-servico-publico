<style>
	body {
  --table-width: 100%; 
}
tbody {
  display:block;
  max-height:300px;
  overflow-y:auto;
}
thead, tbody tr {
  display:table;
  width: var(--table-width);
  table-layout:fixed;
}
</style>

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
						<tr>
							<td>JohnJoh JohnJohnJohn JohnJohnJohn</td>
							<td>Doe</td>
							<td>john@example.com</td>
						</tr>
					</tbody>
				</table>
				<button class="btn btn-success">Cadastrar</button>
			</div>
		</div>

		<!-- <div class="row">
		<div class="col">
			<form action="usuario.controller.php?acao=inserir" method="post">
				<div class="form-group">
					<label>Nome:</label>
					<input name="nome" type="text" class="form-control" placeholder="Exemplo: Fulano de Tal" required>
				</div>
				<div class="form-group">
					<label>E-mail:</label>
					<input name="email" type="email" class="form-control" placeholder="Exemplo: Fulano@fulano.com"
						required>
				</div>
				<div class="form-group">
					<label>Usuario para login:</label>
					<input name="usuario" type="text" class="form-control" placeholder="Exemplo: fulano.tal" required>
				</div>
				<div class="form-group">
					<label>Senha:</label>
					<input name="senha" type="password" class="form-control" placeholder="Maximo 8 caracteres" required>
				</div>
				<button class="btn btn-success">Cadastrar</button>
			</form>
		</div>
	</div> -->
	</div>