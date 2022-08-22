<?php
/**
 * Created by PhpStorm.
 * User: JonatanLara
 * Date: 21/10/2018
 * Time: 07:36 PM
 */

class Paginas
{

    public static function enlacesPaginasModel($enlacesModel)
    {
        #lista blanca
        if ($enlacesModel == "inicio") {

            $module = "views/modules/" . $enlacesModel . ".php";
        } #lista por defecto
        else if ($enlacesModel == 'index') {
            $module = "views/modules/index.php";
        } #lista negra
        else {
            $module = "views/modules/index.php";
        }

        return $module;

    }

}

