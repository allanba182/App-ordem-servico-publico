<!-- MODAL PARA OS's PENDENTES  -->
<div class="modal fade" id="modalOsFinalizado" tabindex="-1" role="dialog" aria-labelledby="modalOsFinalizadoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="modalOsFinalizadoLabel"> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body ">

        <form class="form-group" action="ordem_servico.controller.php?acao=atualizar" method="POST"
          enctype="multipart/form-data">

          <div class="container-fluid">

            <div class="row">
              <div class="col-md-4">
                <label for="abertura" class="col-form-label">Data Abertura: </label>
                <input type="text" class="form-control" id="abertura" name="data_abertura" readonly>
                <input type="hidden" name="id_os" id="id_os" readonly>
              </div>

              <div class="col-md-4 ml-auto">
                <label for="garantia" class="col-form-label">Data Garantia: </label>
                <input type="date" class="form-control" id="garantia" name="data_garantia" readonly>
              </div>
            </div>

            <br>

            <div class="row">

              <div class="col-md-4">
                <label for="tipo" class="col-form-label">Tipo: </label>
                <input type="text" class="form-control" id="tipo" name="tipo" readonly>
              </div>

              <div class="col-md-4">
                <label for="numero-serie" class="col-form-label">Série: </label>
                <input type="text" class="form-control" id="serie" name="serie" readonly>
              </div>

              <div class="col-md-4">
                <label for="prestador" class="col-form-label">Prestador: </label>
                <input type="text" class="form-control" id="prestador" readonly>
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-md-6">
                <label for="Motivo" class="col-form-label">Motivo:</label>
                <textarea class="form-control" id="motivo" readonly></textarea>
              </div>

              <div class="col-md-6">
                <label for="Reparos" class="col-form-label">Reparos realizados:</label>
                <textarea class="form-control" id="reparos" name="reparos_realizados" readonly></textarea>
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-md-6">
                <label for="Anexo" class="col-form-label">Anexo:</label>
                <a name="anexo" id="anexo" download></a>
              </div>
              <div class="col-md-3 ml-auto">
                <label for="Reparos" class="col-form-label">Valor :</label>
                <input class="form-control" name="valor" id="valor" type="number" min="1" step="any" readonly>
              </div>
            </div>
            <br>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Reabrir Os</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $('#modalOsFinalizado').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var num_os = button.data('id') // Extract info from data-* attributes
    var data_abertura = button.data('abertura')
    var data_garantia = button.data('garantia')
    var numero_serie = button.data('serie')
    var tipo = button.data('tipo')
    var prestador = button.data('prestador')
    var motivo = button.data('motivo')
    var reparos = button.data('reparos')
    var valor = button.data('valor')
    var anexo = button.data('anexo')

    var localAnexo = '../../OS/' + tipo + '/' + numero_serie + '/' + anexo

    var modal = $(this)

    modal.find('.modal-title').text('Ordem de Serviço : ' + num_os)

    modal.find('.modal-body #id_os').val(num_os)

    modal.find('.modal-body #abertura').val(data_abertura)

    modal.find('.modal-body #garantia').val(data_garantia)

    modal.find('.modal-body #serie').val(numero_serie)

    modal.find('.modal-body #tipo').val(tipo)

    modal.find('.modal-body #prestador').val(prestador)

    modal.find('.modal-body #motivo').val(motivo)

    modal.find('.modal-body #reparos').val(reparos)

    modal.find('.modal-body #valor').val(valor)

    modal.find('.modal-body #anexo').text(anexo)

    modal.find('.modal-body #anexo').attr("href", localAnexo)
  })
</script>