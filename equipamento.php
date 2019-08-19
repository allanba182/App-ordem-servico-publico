<?php

	$acao = 'recuperar';
	require './tipo_equipamento.controller.php';
    
?>
<div class="col-md-9">
	<div class="container pagina">
		<div class="row">
			<div class="col">
				<h4>Cadastro de Equipamento</h4>
				<hr />
				<form action="equipamento.controller.php?acao=inserir" method="post">
					<div class="form-group">
						<label>Numero de série:</label>
							<input name="serie" type="text" class="form-control" placeholder="Exemplo: Impressora, Balanças, Relógio de ponto" required>
                    </div>
                    <div class="form-group">
						<label>Tipo:</label>
                        <select name="tipo" class="form-control" required>
                        
                        <!-- POPULANDO SELECT COM TIPOS CADASTRADOS NO BANCO -->
                        <?php foreach ($tipos as $indice => $tipo) { ?>

                            <option value="<?= $tipo->id_tipo ?>"> <?= $tipo->tipo ?> </option>

                        <?php } ?>
                        
                        </select>
					</div>
					<button class="btn btn-success">Cadastrar</button>
				</form>
			</div>
		</div>
	</div>
</div>