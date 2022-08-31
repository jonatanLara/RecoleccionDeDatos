<?php
/**
 * Created by PhpStorm.
 * User: JonatanLara
 * Date: 21/10/2018
 * Time: 07:36 PM
 */
require_once "conexion.php";

class Datos extends Conexion{

    #login
    public static function loginPortalModel($datosModels,$tabla){
        $stmt = Conexion::conectar()->prepare("SELECT bd_tm_pro_id, bd_tm_pro_nombre, bd_tm_pro_apellido_p, bd_tm_pro_apellido_m,
          bd_tm_pro_id_estatus, bd_tm_pro_id_usuario, bd_tm_pro_matricula, bd_tm_pro_pass FROM $tabla WHERE bd_tm_pro_matricula = :clave_matricula");
        $stmt->bindParam(":clave_matricula", $datosModels["clave_matricula"],PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();

    }
    #vista
    public static function vistaDatosModel(){
        $stmt = Conexion::conectar()->prepare("SELECT idgaleria, imagen, texto FROM galeria WHERE categoria_id = 1");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    #Registro
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
