<?php

    require_once '../../app_ordem_servico/validador_acesso.php';

    $acao = 'recuperar form';
    require './ordem_servico.controller.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abrir O.S. - Ordem de Serviço</title>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

    <style>
      .card-home 
      {
        width: 100%;
        margin: 0 20px;
        padding: 20px;
      }

      .card-body a
      {
        margin:50px;
      }

      a
      {
        display: block;
        width: 100%;
        height: 100%;
      }

    </style>

    <script>

      function recarregar()
      {
        var select_tipo = document.getElementById("selectTipo").value;
        window.location = "abrir_os.php?tipo="+select_tipo;

      }
    
    </script>

</head>
<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
				OS - Ordem de Serviço
			</a>
		</div>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="logoff.php">SAIR</a>
            </li>
        </ul>
    </nav>

    <!-- MENSAGEM CADASTRO INSERIDO COM SUCESSO -->
    <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>

    <div class="bg-success pt-2 text-white d-flex justify-content-center">
        <h5>Inserido com sucesso !</h5>
    </div>
    <?php } ?>
    <!--  -->

    <div class="container app">
		<div class="row menu-fixed">
			<div class="col-md-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="home.php">Home</a></li>
					<li class="list-group-item"><a href="./cadastro.php">Cadastro</a></li>
					<li class="list-group-item active"><a href="abrir_os.php">Abrir Ordem de Serviço</a></li>
                </ul>
            </div> 

            <!-- SECAO : FORMULARIO ABRIR OS -->        
            <div class="col-md-9">
                <div class="container pagina">
                    <div class="row">
                        <div class="col">
                            <h4>Abrir Ordem de Serviço</h4>
                            <hr />
                            <form action="ordem_servico.controller.php?acao=inserir" method="post">
                                <div class="form-group">
                                    <label>Tipo:</label>
                                    <select name="tipo" id="selectTipo" class="form-control" onchange="recarregar()" required>
                                    <option disabled selected value> -- Selecione uma opção -- </option>

                                    <!-- POPULANDO SELECT COM TIPOS CADASTRADOS NO BANCO -->
                                    <?php foreach ($tipos as $indice => $tipo) { ?>
                                        
                                        <?php if( isset($_GET['tipo']) && $_GET['tipo'] == $tipo->id_tipo ) { ?>
                                            <option selected value="<?= $tipo->id_tipo ?>" > <?= $tipo->tipo ?> </option>
                                        <?php }else { ?>
                                            <option value="<?= $tipo->id_tipo ?>" > <?= $tipo->tipo ?> </option>
                                        <?php } ?>

                                    <?php } ?>
                                    
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Numero de Série:</label>
                                    <select name="equipamento" class="form-control" required>
                                    <option disabled selected value> -- Selecione uma opção -- </option>

                                    <?php if( isset($equipamentos) ) { ?>
                                        <!-- POPULANDO SELECT COM EQUIPAMENTOS CADASTRADOS NO BANCO BASEADO NO TIPO SELECIONADO -->
                                        <?php foreach ($equipamentos as $indice => $equipamento) { ?>

                                        <option value="<?= $equipamento->id_equipamento ?>"> <?= $equipamento->numero_serie ?> </option>

                                        <?php } ?>
                                    <?php } else { }?>

                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Prestador de Serviço:</label>
                                    <select name="prestador" class="form-control" required>
                                    <option disabled selected value> -- Selecione uma opção -- </option>

                                    <!-- POPULANDO SELECT COM PRESTADORES CADASTRADOS NO BANCO -->
                                    <?php foreach ($prestadores as $indice => $prestador) { ?>

                                        <option value="<?= $prestador->id_prestador ?>"> <?= $prestador->fantasia ?> </option>

                                    <?php } ?>
                                    
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Motivo:</label>
                                        <textarea name="motivo" class="form-control" required ></textarea>
                                </div>
                                <button class="btn btn-success">Cadastrar O.S.</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>