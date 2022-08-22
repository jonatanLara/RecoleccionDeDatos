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
  <div class="img-content"></div>
  <?php
    //index.php

    //ubicacion csv
    define('CSV', 'T1_07043_0EG_20220617.csv');

    //leer csv
    $readCsv = array_map('str_getcsv', file(CSV));
  ?>
  <table border="1" class="table table-striped">
   <?php
   //recorremos filas del csv
   foreach ($readCsv as $itemCsv) {
     echo '<tr>';
     //recorremos celdas del csv
      foreach ($itemCsv as $elementoItemCSV) {
       echo '<td>';
       //mostramos la celda
       echo utf8_encode($elementoItemCSV);
       echo '</td>';
      }
      echo '</tr>';
     }
    ?>
   </table>
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   <script type="text/javascript">
    var fileobj;
    function upload_file(e) {
      e.preventDefault();
      fileobj = e.dataTransfer.files[0];
      ajax_file_upload(fileobj);
      console.log(fileobj)
    }

    function file_explorer() {
      document.getElementById('selectfile').click();
      document.getElementById('selectfile').onchange = function() {
          fileobj = document.getElementById('selectfile').files[0];
          ajax_file_upload(fileobj);
          console.log(fileobj)
      };
    }

    function ajax_file_upload(file_obj) {
      if(file_obj != undefined) {
          var form_data = new FormData();
          form_data.append('file', file_obj);
          var xhttp = new XMLHttpRequest();
          xhttp.open("POST", "ajax.php", true);
          xhttp.onload = function(event) {
              oOutput = document.querySelector('.img-content');
              if (xhttp.status == 200) {
                  oOutput.innerHTML = "<img src='"+ this.responseText +"' alt='The Image' />";
              } else {
                  oOutput.innerHTML = "Error " + xhttp.status + " occurred when trying to upload your file.";
              }
          }
          xhttp.send(form_data);
      }
    }
   </script>
</body>
</html>
