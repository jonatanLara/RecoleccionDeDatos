<?php
/**
 * Created by PhpStorm.
 * User: JonatanLara
 * Date: 21/10/2018
 * Time: 07:36 PM
 */
require_once "conexion.php";

class Datos extends Conexion{

    #login no lo estoy utilizando
    public static function loginPortalModel($datosModels,$tabla){
        $stmt = Conexion::conectar()->prepare("SELECT bd_tm_pro_id, bd_tm_pro_nombre, bd_tm_pro_apellido_p, bd_tm_pro_apellido_m,
          bd_tm_pro_id_estatus, bd_tm_pro_id_usuario, bd_tm_pro_matricula, bd_tm_pro_pass FROM $tabla WHERE bd_tm_pro_matricula = :clave_matricula");
        $stmt->bindParam(":clave_matricula", $datosModels["clave_matricula"],PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }
    #vista
    public static function vistaTablaUsuariosModel(){
        $stmt = Conexion::conectar()->prepare("SELECT bd_tm_pro_id, bd_tm_pro_nombre,bd_tm_pro_apellido_p,bd_tm_pro_apellido_m,bd_tm_pro_edad,
          bd_tm_pro_genero, bd_tm_pro_origen, bd_tm_pro_matricula, bd_tm_pro_correo, bd_tm_pro_telefono, bd_tm_uur_usuario, bd_tm_ett_estatus
          FROM bd_tm_pro
          INNER JOIN bd_tm_uur ON bd_tm_pro.bd_tm_pro_id_usuario = bd_tm_uur.bd_tm_uur_id
          INNER JOIN bd_tm_ett ON bd_tm_pro.bd_tm_pro_id_estatus = bd_tm_ett.bd_tm_ett_id");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    #vista
    public static function vistaTablaIDProspeccionModel(){
        $stmt = Conexion::conectar()->prepare("SELECT bd_tm_tao_tramo, bd_tm_tao_codigo, bd_tm_pro_nombre, bd_tm_pro_apellido_p,bd_tm_pro_apellido_m, bd_tm_pro_matricula, bd_tm_car_calve
        FROM bd_tm_tao
        INNER JOIN bd_tm_pro ON bd_tm_tao.bd_tm_tao_id_matricula = bd_tm_pro.bd_tm_pro_matricula
        INNER JOIN bd_tm_cae ON bd_tm_tao.bd_tm_tao_id_tipo_clave = bd_tm_cae.bd_tm_car_id
        WHERE bd_tm_tao_id_tipo_clave = 1;");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    #vista
    public static function vistaTablaIDExcavacionModel(){
        $stmt = Conexion::conectar()->prepare("SELECT bd_tm_tao_tramo, bd_tm_tao_codigo, bd_tm_pro_nombre, bd_tm_pro_apellido_p,bd_tm_pro_apellido_m, bd_tm_pro_matricula, bd_tm_car_calve
        FROM bd_tm_tao
        INNER JOIN bd_tm_pro ON bd_tm_tao.bd_tm_tao_id_matricula = bd_tm_pro.bd_tm_pro_matricula
        INNER JOIN bd_tm_cae ON bd_tm_tao.bd_tm_tao_id_tipo_clave = bd_tm_cae.bd_tm_car_id
        WHERE bd_tm_tao_id_tipo_clave = 2;");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    #vista
    public static function vistaTablaIDTopografoModel(){
        $stmt = Conexion::conectar()->prepare("SELECT bd_tm_tao_tramo, bd_tm_tao_codigo, bd_tm_pro_nombre, bd_tm_pro_apellido_p,bd_tm_pro_apellido_m, bd_tm_pro_matricula, bd_tm_car_calve
        FROM bd_tm_tao
        INNER JOIN bd_tm_pro ON bd_tm_tao.bd_tm_tao_id_matricula = bd_tm_pro.bd_tm_pro_matricula
        INNER JOIN bd_tm_cae ON bd_tm_tao.bd_tm_tao_id_tipo_clave = bd_tm_cae.bd_tm_car_id
        WHERE bd_tm_tao_id_tipo_clave = 3;");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    #Registro id arqueólogos de prospección
    public static function agrergarIDArqProsModel($datosModels){
        $stmt = Conexion::conectar()->prepare("INSERT INTO bd_tm_tao (bd_tm_tao_tramo, bd_tm_tao_codigo, bd_tm_tao_id_matricula, bd_tm_tao_id_tipo_clave)
        VALUES (:tramo,:codigo,:matricula,:clave)");
        $clave = 1;
        #bindParam vincula
        $stmt->bindParam(":tramo", $datosModels["nombre-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":codigo", $datosModels["matricula-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":matricula", $datosModels["email-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":clave", $clave,PDO::PARAM_INT);

        if($stmt->execute()){
            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
    #Registro id arqueólogos de excavacion
    public static function agrergarIDArqExcModel($datosModels){
        $stmt = Conexion::conectar()->prepare("INSERT INTO bd_tm_tao (bd_tm_tao_tramo, bd_tm_tao_codigo, bd_tm_tao_id_matricula, bd_tm_tao_id_tipo_clave)
        VALUES (:tramo,:codigo,:matricula,:clave)");
        $clave = 2;
        #bindParam vincula
        $stmt->bindParam(":tramo", $datosModels["nombre-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":codigo", $datosModels["matricula-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":matricula", $datosModels["email-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":clave", $clave,PDO::PARAM_INT);

        if($stmt->execute()){
            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
    #Registro id arqueólogos de topografo
    public static function agrergarIDTopografosModel($datosModels){
        $stmt = Conexion::conectar()->prepare("INSERT INTO bd_tm_tao (bd_tm_tao_tramo, bd_tm_tao_codigo, bd_tm_tao_id_matricula, bd_tm_tao_id_tipo_clave)
        VALUES (:tramo,:codigo,:matricula,:clave)");
        $clave = 3;
        #bindParam vincula
        $stmt->bindParam(":tramo", $datosModels["nombre-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":codigo", $datosModels["matricula-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":matricula", $datosModels["email-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":clave", $clave,PDO::PARAM_INT);

        if($stmt->execute()){
            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
}
