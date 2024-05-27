<div class="modal fade" id="deleteModal" data-backdrop="static" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
          <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>-->
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de borrar este registro?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" :disabled="showSpinner">No</button>
          <button type="button" class="btn btn-danger" @click="deleteIt" :disabled="showSpinner"> <!-- data-dismiss="modal" -->
            <span v-if="showSpinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Sí, estoy seguro
            </button>
        </div>
      </div>
    </div>
  </div>
