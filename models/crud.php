<?php
/**
 * Created by PhpStorm.
 * User: JonatanLara
 * Date: 21/10/2018
 * Time: 07:36 PM
 */
require_once "conexion.php";

class Datos extends Conexion{
    #vista Galeria taler 3D
    public static function vistaDatosModel(){
        $stmt = Conexion::conectar()->prepare("SELECT idgaleria, imagen, texto FROM galeria WHERE categoria_id = 1");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    #Registro Talent Land
    public static function agrergarDatoModel($datosModels){
        $stmt = Conexion::conectar()->prepare("INSERT INTO talent(nombre, matricula, correo, telefono, licenciatura, seguro, saldo)
        VALUES (:nombre,:matricula,:correo,:telefono,:licenciatura,:seguro,:saldo)");
        $saldo = 0;
        #bindParam vincula
        $stmt->bindParam(":nombre", $datosModels["nombre-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":matricula", $datosModels["matricula-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datosModels["email-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datosModels["tel-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":licenciatura", $datosModels["licenciatura-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":seguro", $datosModels["seguro-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":saldo", $saldo,PDO::PARAM_INT);

        if($stmt->execute()){

            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
}
