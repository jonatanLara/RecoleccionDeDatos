<!-- Modal -->
<div class="modal fade" id="modalFormPersona" role="dialog" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel"> <i class="fas fa-user-plus pe-2"></i> Alta de nuevo usuario</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Nombres">
                    <label>Nombres</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Apellido paterno">
                    <label>Apellido Paterno</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Apellido materno">
                    <label>Apellido materno</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Edad">
                    <label>Edad</label>
                  </div>

                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                      <option selected>Genero</option>
                      <option value="1">Hombre</option>
                      <option value="2">Mujer</option>
                    </select>
                    <label for="floatingSelectGrid">Seleccione una opción</label>
                  </div>

                  <div class="form-floating mb-3">
                    <div class="form-floating mb-3">
                      <input type="number" class="form-control" placeholder="Teléfono">
                      <label>Teléfono</label>
                    </div>
                  </div>

                  <input type="hidden" name="nivelUsuario" value=<?php echo $user->getNivelUsuario() ?> >
                  <input type="hidden" name="estatus"  value="1">
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                <button type="button" class="btn bg-primario bg-primario-hover submitBtn" onclick="submitFormMonumento()">Guardar</button>
            </div>
        </div>
    </div>
</div>
