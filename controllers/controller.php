<?php
/**
 * Created by PhpStorm.
 * User: JonatanLara
 * Date: 21/10/2018
 * Time: 07:36 PM
 */
class MvcController{
    #bloque de llamar a la plantilla
    public static function pagina(){
        include_once  'views/template.php';
    }
    public static function accion1(){
      $var = "estamos dentro de una funcion";
      json_encode($var);
    }
    public static function enlacesPaginasController(){
      #elimnar warning
      ##ini_set('display_errors','Off');
      if(isset($_GET["action"])){
        $enlaces = $_GET['action'];
      }else{
        $enlaces = "index.php";
      }
      $respuesta = Paginas::enlacesPaginasModel($enlaces);
      include_once $respuesta;
    }

    public static function cargarCSV(){
      $row = 1;
      if(isset($_FILES['dataCliente'])) { // si el input archivocsv_nombre tiene datos

        //input nombre del archivo
        $archivoCSV  = $_FILES['dataCliente']['tmp_name'];
        if (($handle = fopen($archivoCSV, "r")) !== FALSE) {
            echo '<table  class="table table-striped generales">';
            while (($data = fgetcsv($handle, 6000, ";")) !== FALSE) {
                $num = count($data);
                if ($row == 1) {
                    echo '<thead><tr>';
                }else{
                    echo '<tr>';
                }
                for ($c=0; $c < $num; $c++) {
                    if(empty($data[$c])) {
                       $value = "&nbsp;";
                    }else{
                       $value = $data[$c];
                    }
                    if ($row == 1) {
                        $cells = explode(",",$value);
                        foreach ($cells as $cell) {
                            echo '<th class="col">'.utf8_encode($cell).'</th>'; // encabezados
                        }
                    }else{
                      $cells2 = explode(",", $value);
                        foreach ($cells2 as $cell) {
                            echo '<td>'.utf8_encode($cell).'</td>';// celdas
                        }
                    }
                }
                if ($row == 1) {
                    echo '</tr></thead><tbody>';
                }else{
                    echo '</tr>';
                }
                $row++;
            }
            echo '</tbody></table>';
            fclose($handle);
        }
        }else{// error al cargar el archivo
          // va ir una alerta que no ha cargado el archivo
      }
    }
}
