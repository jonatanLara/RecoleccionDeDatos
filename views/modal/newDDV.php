<!-- Modal -->
<div class="modal fade" id="modalDDV" role="dialog" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Alta de categoría derecho de vía</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" method="POST" id="modalDdv">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="clave" name="clave">
                    <label for="floatingInput">Clave</label>
                  </div>
                  <div class="form-floating">
                    <input type="text" class="form-control" id="nombre" name="nombre">
                    <label for="floatingPassword">Nombre</label>
                  </div>
                  <!-- Modal Footer -->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                      <button type="button" class="btn bg-primario bg-primario-hover submitBtn" id="registrar" >Guardar</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
