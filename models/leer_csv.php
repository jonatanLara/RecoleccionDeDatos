<?php // Recibe la información del formulario

//echo "meta1";
// if (isset($_POST['subir']))
// {
//   $filename =$_FILES["file"]["name"];
//   $size =$_FILES["file"]["size"];
  //creamos un objeto de la clase splfileinfo
//   $info = new SplFileInfo($filename);
//   $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);
//
//    if($extension == 'csv'){
// 	$filename = $_FILES['file']['tmp_name'];
// 	$handle = fopen($filename, "r");
// //prepara el arhivo, (conexion,numeroFilas,separador si es , o ;)
// 	while( ($data = fgetcsv($handle, 1000, ",") ) !== FALSE ){
//     echo utf8_encode($data[0]);
//     echo utf8_encode($data[1]);
//     echo utf8_encode($data[2]);
//     echo utf8_encode($data[3]);
//     echo utf8_encode($data[4]);
//     echo utf8_encode($data[5]);
//     echo '</td>';
// 	   // $q = "INSERT INTO objetivo (contrato, titular) VALUES ('$data[0]','$data[1]')";
//      //
// 	   //  $mysqli->query($q);
//    }
//       echo "meta3";
//       fclose($handle);

//    }}

$tipo = $_FILES['dataCliente']['tmp_name'];
$lineas = file($tipo);
$i=0;
echo '<table border="1" class="table table-striped">';
foreach ($lineas as $linea) {
  // code...
  $cantidad_reg = count($lineas);
  $cantidad_reg_agg =($cantidad_reg-1);
  if($i !=0){
    $datos = explode(";",$linea);
    $nombrePersona = utf8_encode($datos[0]);
    $sexoPersona = !empty($datos[1]) ? ($datos[1]) : '';

  }
  echo '<cente><div>'.$i."). ".utf8_encode($linea).'</div></center>';
  $i++;
}
echo '</table>';
echo '<cente><div> Total de registros: '.$cantidad_reg_agg.'</cente></div>';
