<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="NUnkqvFCshDhqBSQ5Jcsr0mW_L_KtAjm_qlE3PK1IF8" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>@</title>
</head>
<body>
  <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false" class="flex center">
      <div id="drag_upload_file">
          <p>Drop file here</p>
          <p>or</p>
          <p><input type="button" value="Select File" onclick="file_explorer();" /></p>
          <input type="file" id="selectfile" />
      </div>
    </div>
    <?php
        $cargarArchivo = new MvcController();
        $cargarArchivo ->cargarCSV();
    ?>
  </div>
  </div>


   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   <script src="js/jquery-2.1.4.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function(){
        $("#fileUpload").change(function(){
        var file = this.files[0];
            var fr=new FileReader();
            fr.onload=function(data){
                //$("#output").html(data.target.result);+
                console.log(data.target.result);
            }
            fr.readAsText(file);
        });
      })


   </script>
</body>
</html>
