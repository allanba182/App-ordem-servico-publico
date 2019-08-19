<div class="col-md-9">
	<div class="container pagina">
		<div class="row">
			<div class="col">
				<h4>Cadastro de Prestadores de Serviço</h4>
				<hr />
				<form action="prestador.controller.php?acao=inserir" method="post">
					<div class="form-group">
						<label>Fantasia:</label>
							<input name="fantasia" type="text" class="form-control" placeholder="Exemplo: Impressora, Balanças, Relógio de ponto" required>
                    </div>
                    <div class="form-group">
						<label>E-mail:</label>
							<input name="email" type="email" class="form-control" placeholder="Exemplo: Impressora, Balanças, Relógio de ponto" required>
                    </div>

					<button class="btn btn-success">Cadastrar</button>
				</form>
			</div>
		</div>
	</div>
</div>