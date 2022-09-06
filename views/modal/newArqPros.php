<!-- Modal -->
<div class="modal fade" id="modalFormPros" role="dialog" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Alta de ID. Arqueólogo de prospección</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-floating mb-3">
                      <select class="form-select" id="SelectTramo" aria-label="Floating label select example">
                        <option value=""selected>Abrir este menú de selección</option>
                        <option value="T1">T1</option>
                        <option value="T2">T2</option>
                        <option value="T3">T3</option>
                        <option value="T4">T4</option>
                        <option value="T5">T5</option>
                        <option value="T6">T6</option>
                        <option value="T7">T7</option>
                      </select>
                      <label for="SelectTramo">Seleccione el tramo</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="number" class="form-control" id="floatingInput" placeholder="05026" min="5" max="5">
                      <label for="floatingInput">Nuevo ID</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="05026">
                      <label for="floatingInput">Matrícula del arqueólogo</label>
                    </div>
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
