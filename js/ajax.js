$("#").change(function(){
  var usuario = $("#").val();
  console.log('usuario',usuario);
  var datos = new FormData();
  datos.append("validarUsuario",usuario);

  $.ajax({
    url: "views/models/ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    success: function (respuesta){
      console.log(resuesta);
      if(respuesta == 0){
        $("label[for='usuarioRegistro'] span").html('<p>Este usuario ya existe en la base de datos </p>');
      }else{
        $("label[for='usuarioRegistro'] span").html('');
      }
    }
  })
})
