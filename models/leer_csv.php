<?php // Recibe la información del formulario

//echo "meta1";
if (isset($_POST['enviar']))
{


  $filename=$_FILES["file"]["name"];
  //creamos un objeto de la clase splfileinfo
  $info = new SplFileInfo($filename);

  $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);

   if($extension == 'csv'){
	$filename = $_FILES['file']['tmp_name'];
	$handle = fopen($filename, "r");
//prepara el arhivo, (conexion,numeroFilas,separador si es , o ;)
	while( ($data = fgetcsv($handle, 1000, ",") ) !== FALSE )

	{
    echo utf8_encode($data[0]);
    echo utf8_encode($data[1]);
    echo utf8_encode($data[2]);
    echo utf8_encode($data[3]);
    echo utf8_encode($data[4]);
    echo utf8_encode($data[5]);
    echo '</td>';
	   // $q = "INSERT INTO objetivo (contrato, titular) VALUES ('$data[0]','$data[1]')";
     //
	   //  $mysqli->query($q);
   }

    echo "meta3";
      fclose($handle);

   }
}
echo "meta4";
