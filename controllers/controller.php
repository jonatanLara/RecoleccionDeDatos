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

    public static function loginController(){
      $userSession = new UserSession();
      $user = new User();

      if (isset($_SESSION['cl_matricula'])){
        //echo "hay sesion";
        $user->setUser($userSession->getCurrentUser());
      //  echo "print".$userSession->getCurrentUser() ;
        echo "<script>window.location='index.php?action=inicio'</script>";
      } else if (isset($_POST["cl_matricula"]) && isset($_POST["cl_passw"])) {
        // mapeamos la info
          $matForm = $_POST["cl_matricula"];
          $passForm = $_POST["cl_passw"];

          //var_dump($respuesta);
          if($user->userExists($matForm, $passForm)){
            /*crear sesiones*/
              $userSession->setCurrentUser($matForm);
              $user->setUser($matForm);
            //  echo "Usuario Validado";
              echo "<script>window.location='index.php?action=inicio'</script>";
          }else{
            // el pass y la matricula son incorrectas
          echo "<script>window.location='index.php?action=error'</script>";
        }
      }
      else{
       //echo "<script>window.location='index.php'</script>";
      }
    }
    //tabla usuarios
    public static function vistaTablaUsuariosController(){
      $respuesta = Datos::vistaTablaUsuariosModel();
      $numcont=1;
      foreach ($respuesta as $row => $item){
        $numcont = $numcont + $row;
        echo '<tr>
                <td>'.$numcont.'</td>
                <td>'.$item["bd_tm_pro_matricula"].'</td>
                <td>'.$item["bd_tm_pro_nombre"].' '.$item["bd_tm_pro_apellido_p"].' '.$item["bd_tm_pro_apellido_m"].'</td>
                <td>'.$item["bd_tm_pro_origen"].'</td>
                <td>'.$item["bd_tm_pro_correo"].'</td>
                <td>'.$item["bd_tm_pro_telefono"].'</td>
                <td>'.$item["bd_tm_uur_usuario"].'</td>
                <td>'.$item["bd_tm_ett_estatus"].'</td>
                <td class="d-flex justify-content-end"><a type="button" class="btn btn-primary" href=index.php?action=editar-usuario&matricula='.$item["bd_tm_pro_matricula"].'
                  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                  <i class="fas fa-pen-square pe-1"></i> Editar</a></td>
              </tr>';
      }
    }
    //tabla usuarios
    public static function vistaTablaIDProspeccionController(){
      $respuesta = Datos::vistaTablaIDProspeccionModel();
      $numcont=1;
      foreach ($respuesta as $row => $item){
        $numcont = $numcont + $row;
        echo '<tr>
                <td>'.$numcont.'</td>
                <td>'.$item["bd_tm_tao_tramo"].'</td>
                <td>'.$item["bd_tm_tao_codigo"].'</td>
                <td>'.$item["bd_tm_pro_nombre"].' '.$item["bd_tm_pro_apellido_p"].' '.$item["bd_tm_pro_apellido_m"].'</td>
                <td>'.$item["bd_tm_pro_matricula"].'</td>
                <td class="d-flex justify-content-end"><a type="button" class="btn btn-primary" href=index.php?action=editar-usuario&matricula='.$item["bd_tm_pro_matricula"].'
                  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                  <i class="fas fa-pen-square pe-1"></i> Editar</a></td>
              </tr>';
      }
    }
    //tabla usuarios
    public static function vistaTablaIDExcavacionController(){
      $respuesta = Datos::vistaTablaIDExcavacionModel();
      $numcont=1;
      foreach ($respuesta as $row => $item){
        $numcont = $numcont + $row;
        echo '<tr>
                <td>'.$numcont.'</td>
                <td>'.$item["bd_tm_tao_tramo"].'</td>
                <td>'.$item["bd_tm_tao_codigo"].'</td>
                <td>'.$item["bd_tm_pro_nombre"].' '.$item["bd_tm_pro_apellido_p"].' '.$item["bd_tm_pro_apellido_m"].'</td>
                <td>'.$item["bd_tm_pro_matricula"].'</td>
                <td class="d-flex justify-content-end"><a type="button" class="btn btn-primary" href=index.php?action=editar-usuario&matricula='.$item["bd_tm_pro_matricula"].'
                  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                  <i class="fas fa-pen-square pe-1"></i> Editar</a></td>
              </tr>';
      }
    }

    //tabla usuarios
    public static function vistaTablaIDTopografoController(){
      $respuesta = Datos::vistaTablaIDTopografoModel();
      $numcont=1;
      foreach ($respuesta as $row => $item){
        $numcont = $numcont + $row;
        echo '<tr>
                <td>'.$numcont.'</td>
                <td>'.$item["bd_tm_tao_tramo"].'</td>
                <td>'.$item["bd_tm_tao_codigo"].'</td>
                <td>'.$item["bd_tm_pro_nombre"].' '.$item["bd_tm_pro_apellido_p"].' '.$item["bd_tm_pro_apellido_m"].'</td>
                <td>'.$item["bd_tm_pro_matricula"].'</td>
                <td class="d-flex justify-content-end"><a type="button" class="btn btn-primary" href=index.php?action=editar-usuario&matricula='.$item["bd_tm_pro_matricula"].'
                  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                  <i class="fas fa-pen-square pe-1"></i> Editar</a></td>
              </tr>';
      }
    }

    public static function cargarCSV(){
      $row = 1;
      $numCeldas = 0;
      $numColum = 0;
      if(isset($_FILES['dataCliente'])) { // si el input archivocsv_nombre tiene datos
        //input nombre del archivo
        $archivoCSV  = $_FILES['dataCliente']['tmp_name'];
        if (($handle = fopen($archivoCSV, "r")) !== FALSE) {
            echo '<table  class="generales">';
            while (($data = fgetcsv($handle, 100, ";")) !== FALSE) {
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
                            echo '<th class="col1">'.utf8_encode($cell).'</th>'; // encabezados

                        }
                    }else{
                      $cells2 = explode(",", $value);
                        foreach ($cells2 as $cell) {
                            $numCeldas ++;
                            echo '<td class="col2">'.utf8_encode($cell).' ('.$numCeldas.')</td>' ;// celdas
                            $numColum = count($cells2);

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
            echo 'Número de filas: '.$numCeldas/$numColum.' Números de datos en total: '.$numCeldas;
            fclose($handle);
        }
        }else{// error al cargar el archivo
          // va ir una alerta que no ha cargado el archivo
      }
    }
    public static function countRowCol(){

    }
    public static function intPost(){
      $var = 0;
      for ($i = 1; $i <= 72; $i++) {
        if($var === 0){
          $var = $var+1;
          //echo $var;
        }
        if($var===$i){
          #echo '( '.$i.' )';
          $var = $var+6;
          #print_r( $var);
          echo '</br>';
        }
        echo'( '. $i.' )';
      }
    }
}
