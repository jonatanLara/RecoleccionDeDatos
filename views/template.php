<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">
    <title>@</title>
</head>
<body>
  <?php   ?>
  <div class="container">
    <div class="col-12">
    <div class="card">
      <div class="card-header">Completa el formulario</div>
      <div class="card-body">
        <form  method="post">
          <div class="mb-3">
            <label for="archivo">Selecciona un archivo <code>.csv</code></label>
            <input type="file" id="fileUpload" class="form-control" name="archivocsv_nombre" required>
          </div>
          <button class="btn btn-success" id="submit-file" type="submit">Importar</button>
        </form>
      </div>
    </div>
    <?php
      //  $cargarArchivo = new MvcController();
      //  $cargarArchivo ->cargarCSV();
    ?>
    <div id="output"></div>
    <table id="results"></table>
   </div>
  </div>
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   <script src="js/jquery-2.1.4.min.js"></script>
   <script src="js/leer_csv.js"></script>
   <script type="text/javascript">
       // function parseResult(result) {
       //     var resultArray = [];
       //     result.split("\n").forEach(function(row) {
       //         var rowArray = [];
       //         row.split(",").forEach(function(cell) {
       //             rowArray.push(cell);
       //         });
       //         resultArray.push(rowArray);
       //     });
       //     return resultArray;
       // }

      $(document).ready(function(){
        $("#fileUpload").change(function(){
        var file = this.files[0];
        console.log(file);
            var fr=new FileReader();
            fr.onload=function(data){
              var depurado = parseResult(data.target.result);
              console.log(depurado);
                $("#output").html(depurado);
                //console.log(data.target.result);
            }
            fr.readAsText(file);
        });
      })
   </script>
</body>
</html>
