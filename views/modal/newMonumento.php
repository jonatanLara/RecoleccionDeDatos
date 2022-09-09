<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Alta de nuevo monumeto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" method="post">
                    <div class="form-floating mb-3">
                      <select class="form-select" id="SelectTramo" name="SelectTramo" aria-label="Floating label select example">
                        <option value=""selected>Abrir este menú de selección</option>
                        <option value="T1">T1</option>
                        <option value="T2">T2</option>
                        <option value="T3">T3</option>
                        <option value="T4">T4</option>
                        <option value="T5">T5</option>
                        <option value="T6">T6</option>
                        <option value="T7">T7</option>
                      </select>
                      <label for="SelectTramo">Selecciona el tramo</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="IdArqpros" minlength="5" maxlength="5" value="">
                      <label for="SelectArqProsp"> ID Arq Prosp</label>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                        <button type="submit" class="btn bg-primario bg-primario-hover submitBtn">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
              $mvc = new MvcController();
              $mvc -> registroNuevoMonumentoController();
         ?>
        <script type="text/javascript">
        function comprobarHora(){
          var hoy = new Date();
          var fecha = hoy.getDate() + '/' + ( hoy.getMonth() + 1 ) + '/' + hoy.getFullYear();
          var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
          var fechaYHora = fecha + ' ' + hora;
          console.log(fechaYHora);
        }
          function submitFormMonumento(){
            if ($('#SelectTramo').val().trim() === '' || $('#SelectArqProsp').val().trim() === '' ) {
                console.log('Debe seleccionar una opción');
                return false;
              }
              else
              {
                // documentacion: https://programacion.net/articulo/formulario_modal_en_bootstrap_con_ajax_y_php_1786
                console.log("Clave de Monumento: " + $("#SelectTramo option:selected").text() +"_"+ $("#SelectArqProsp option:selected").text());
                comprobarHora();

              }

          }
        </script>
    </div>
</div>
