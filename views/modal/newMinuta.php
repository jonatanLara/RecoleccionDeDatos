<!-- Modal -->
<div class="modal fade" id="modalFormMinuta" role="dialog" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Alta de minuta</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-floating mb-3">
                      <select class="form-select" id="SelectTramo" aria-label="Floating label select example">
                        <option value=""selected>Abrir este menú de selección</option>
                        <option value="1">T1</option>
                        <option value="2">T2</option>
                        <option value="3">T3</option>
                        <option value="4">T4</option>
                        <option value="5">T5</option>
                        <option value="6">T6</option>
                        <option value="7">T7</option>
                      </select>
                      <label for="SelectTramo">Seleccione el tramo</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="SelectTramo" aria-label="Floating label select example">
                        <option value=""selected>Abrir este menú de selección</option>
                        <option value="1">FN</option>
                        <option value="2">FS</option>
                        <option value="3">F1</option>
                        <option value="4">F2</option>
                        <option value="5">F3</option>
                        <option value="6">F4</option>
                        <option value="7">F5</option>
                        <option value="8">F6</option>
                      </select>
                      <label for="SelectTramo">Frente</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="SelectTramo" aria-label="Floating label select example">
                        <option value=""selected>Abrir este menú de selección</option>
                        <option value="1">PROS</option>
                        <option value="2">EXC</option>
                        <option value="3">AMBAS</option>
                      </select>
                      <label for="SelectTramo">Tipo de minuta</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="SelectTramo" aria-label="Floating label select example">
                        <option value=""selected>Abrir este menú de selección</option>
                        <option value="1">DDV</option>
                        <option value="2">OC</option>
                      </select>
                      <label for="SelectTramo">Categoría de la minuta</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="SelectTramo" aria-label="Floating label select example">
                        <option value=""selected>Abrir este menú de selección</option>
                        <option value="1">PIV</option>
                        <option value="2">PSV</option>
                      </select>
                      <label for="SelectTramo">Lista de categoría</label>
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
