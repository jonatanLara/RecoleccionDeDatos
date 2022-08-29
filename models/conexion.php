<?php
/**
 * Created by PhpStorm.
 * User: JonatanLara
 * Date: 21/10/2018
 * Time: 07:36 PM
 */

class Conexion{
    public static function conectar(){
        try {
            $link = new PDO("mysql:host=localhost;dbname=bd_tren_maya","root","",
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $link;
    }
}
