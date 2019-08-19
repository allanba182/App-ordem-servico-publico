<div class="col-md-9">
	<div class="container pagina">
		<div class="row">
			<div class="col">
				<h4>Cadastro de Usuario</h4>
				<hr />
				<form action="usuario.controller.php?acao=inserir" method="post">
					<div class="form-group">
						<label>Nome:</label>
							<input name="nome" type="text" class="form-control" placeholder="Exemplo: Fulano de Tal" required>
                    </div>
                    <div class="form-group">
						<label>E-mail:</label>
							<input name="email" type="email" class="form-control" placeholder="Exemplo: Fulano@fulano.com" required>
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
		</div>
	</div>
</div>