<?php
/**
 * Created by PhpStorm.
 * User: JonatanLara
 * Date: 21/10/2018
 * Time: 07:36 PM
 */

class Paginas
{

    public static function enlacesPaginasModel($enlacesModel){
        #lista blanca
        if ( $enlacesModel == "inicio" || $enlacesModel =="destroy" || $enlacesModel =="perfil"
        || $enlacesModel =="monumento"|| $enlacesModel =="usuarios" || $enlacesModel =="editar-usuario"
        || $enlacesModel =="codigos" || $enlacesModel =="minutas" ) {

            $module = "views/modules/" . $enlacesModel . ".php";
        } #lista por defecto
        else if ($enlacesModel == "index") {
            $module = "views/modules/login.php";
        } #lista negra
        else {
            $module = "views/modules/login.php";
        }
        return $module;
    }

}
