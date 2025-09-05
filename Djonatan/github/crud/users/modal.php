<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog modal-sm" role="document"> <!-- modal-sm deixa menor -->
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabel">
                    <i class="fa fa-exclamation-triangle"></i> Confirmar exclusão
                </h4>
            </div>

            <div class="modal-body text-center">
                <p>Deseja realmente excluir este item?</p>
                <small class="text-muted">Essa ação não poderá ser desfeita.</small>
            </div>

            <div class="modal-footer text-center">
                <a id="confirm" class="btn btn-danger" href="#">Sim, excluir</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>