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
                      <label for="SelectTramo">Selecciona el tramo</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="SelectArqProsp" aria-label="Floating label select example">
                        <option selected>Abrir este menú de selección</option>
                        <option value="1">16125</option>
                        <option value="2">16126</option>
                        <option value="3">16127</option>
                      </select>
                      <label for="SelectArqProsp">Selecciona el ID Arq Prosp</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="SelectArqExc" aria-label="Floating label select example">
                        <option selected>Abrir este menú de selección</option>
                        <option value="1">211</option>
                        <option value="2">219</option>
                        <option value="3">222</option>
                      </select>
                      <label for="SelectArqExc">Selecciona el ID Arq Ex</label>
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                <button type="button" class="btn bg-primario bg-primario-hover submitBtn" onclick="submitFormMonumento()">Guardar</button>
            </div>
        </div>

        <script type="text/javascript">
          function submitFormMonumento(){
            if ($('#SelectTramo').val().trim() === '' || $('#SelectArqProsp').val().trim() === '' || $('#SelectArqExc').val().trim() === '') {
                console.log('Debe seleccionar una opción');
                return false;
              }
              else
              {
                // documentacion: https://programacion.net/articulo/formulario_modal_en_bootstrap_con_ajax_y_php_1786
                console.log("Clave de Monumento: " + $("#SelectTramo option:selected").text() +"_"+ $("#SelectArqProsp option:selected").text() +"_"+ $("#SelectArqExc option:selected").text());
                $.ajax({
                      type:'POST',
                      url:'submit_form.php',
                      data:'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message,
                      beforeSend: function () {
                          $('.submitBtn').attr("disabled","disabled");
                          $('.modal-body').css('opacity', '.5');
                      },
                      success:function(msg){
                          if(msg == 'ok'){
                              $('#inputName').val('');
                              $('#inputEmail').val('');
                              $('#inputMessage').val('');
                              $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we'll get back to you soon.</p>');
                          }else{
                              $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                          }
                          $('.submitBtn').removeAttr("disabled");
                          $('.modal-body').css('opacity', '');
                      }
                  });
              }

          }
        </script>
    </div>
</div>
