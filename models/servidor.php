<?php
//$a = $_POST['a'];
//$b = $_POST['b'];
//echo $a+$b;
//print_r($_POST);
if(isset($_POST)){
  $clave = $_POST['clave'];
  $nombre = $_POST['nombre'];
  //consulta en la base de datos Agregar los post y listo!
  echo "ok";
}
else{
  echo "error";
}
?>
