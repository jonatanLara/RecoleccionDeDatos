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
    #vista Tabla monumentos
    public static function vistaTablaMonumentosModel(){
        $stmt = Conexion::conectar()->prepare("SELECT bd_tm_mnm_id, bd_tm_mnm_tramo, bd_tm_mnm_arq_pros,
        bd_tm_tao_id_matricula,
        bd_tm_pro_nombre, bd_tm_pro_apellido_p, bd_tm_pro_apellido_m
        FROM bd_tm_mnm
        INNER JOIN bd_tm_tao ON bd_tm_mnm.bd_tm_mnm_tramo = bd_tm_tao.bd_tm_tao_tramo AND substring(cast(bd_tm_mnm.bd_tm_mnm_arq_pros as varchar(5)),1,2) = substring(cast(bd_tm_tao.bd_tm_tao_codigo as varchar(5)),1,2)
        INNER JOIN bd_tm_pro ON bd_tm_tao.bd_tm_tao_id_matricula = bd_tm_pro.bd_tm_pro_matricula; ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }

    public static function vistaModalNuevoMonumentoModel(){

    }
    #Registro de personas
    public static function agrergarPersonaModel($datosModels,$nivel,$estatus){
        $stmt = Conexion::conectar()->prepare("INSERT INTO bd_tm_pro (bd_tm_pro_nombre, bd_tm_pro_apellido_p, bd_tm_pro_apellido_m, bd_tm_pro_edad, bd_tm_pro_genero, bd_tm_pro_origen, bd_tm_pro_matricula, bd_tm_pro_correo, bd_tm_pro_telefono, bd_tm_pro_estudio, bd_tm_pro_pass, bd_tm_pro_id_usuario, bd_tm_pro_id_estatus)
        VALUES (:nombre,:apellido_p,:apellido_m,:edad,:genero,:origen,:matricula,:correo,:telefono,:estudios,:password,:idusuario,:idestatus)");
        $clave = 1;
        #bindParam vincula
        $stmt->bindParam(":nombre", $datosModels[""],PDO::PARAM_STR);
        $stmt->bindParam(":apellido_p", $datosModels[""],PDO::PARAM_STR);
        $stmt->bindParam(":apellido_m", $datosModels[""],PDO::PARAM_STR);
        $stmt->bindParam(":edad", $datosModels[""],PDO::PARAM_STR);
        $stmt->bindParam(":genero", $datosModels[""],PDO::PARAM_STR);
        $stmt->bindParam(":origen", $datosModels[""],PDO::PARAM_STR);
        $stmt->bindParam(":matricula", $datosModels[""],PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datosModels[""],PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datosModels[""],PDO::PARAM_STR);
        $stmt->bindParam(":estudios", $datosModels[""],PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosModels[""],PDO::PARAM_STR);
        $stmt->bindParam(":idusuario", $nivel, PDO::PARAM_INT);
        $stmt->bindParam(":idestatus", $estatus, PDO::PARAM_INT);

        if($stmt->execute()){
            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
    #Registro id arqueólogos de prospección
    public static function agrergarIDClaveModel($datosModels, $clave){
        $stmt = Conexion::conectar()->prepare("INSERT INTO bd_tm_tao (bd_tm_tao_tramo, bd_tm_tao_codigo, bd_tm_tao_id_matricula, bd_tm_tao_id_tipo_clave)
        VALUES (:tramo,:codigo,:matricula,:clave)");
        #bindParam vincula
        $stmt->bindParam(":tramo", $datosModels["nombre-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":codigo", $datosModels["matricula-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":matricula", $datosModels["email-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":clave", $clave,PDO::PARAM_INT);// 1 arq pros, 2 arq exc, 3 topo, 4 proce

        if($stmt->execute()){
            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
    public  function datoExists($tramo, $codigo){
      $stmt = Conexion::conectar()->prepare("SELECT bd_tm_mnm_id, bd_tm_mnm_tramo, bd_tm_mnm_arq_pros
        FROM bd_tm_mnm
        WHERE bd_tm_mnm_tramo = :tramo AND bd_tm_mnm_arq_pros  = :codigo");
        $stmt->execute(['tramo'=>$tramo, 'codigo'=>$codigo]);
      if($stmt->rowcount()){
        return true;
      }else{
        return false;
      }
    }
    #Registro  de nuevo monumeto
    public static function registroNuevoMonumentoModel($datosModels, $clave){
        $stmt = Conexion::conectar()->prepare("INSERT INTO bd_tm_mnm(bd_tm_mnm_tramo, bd_tm_mnm_arq_pros)
        VALUES (:tramo,:codigo,:matricula)");
        #bindParam vincula
        $stmt->bindParam(":tramo", $datosModels["nombre-tld"],PDO::PARAM_STR);
        $stmt->bindParam(":codigo", $datosModels["matricula-tld"],PDO::PARAM_STR);

        if($stmt->execute()){
            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
    #Consulta con Ajax
    public static function validarUsuarioModel(){
      $stmt = Conexion::conectar()->prepare("SELECT bd_tm_pro_id, bd_tm_pro_nombre, bd_tm_pro_apellido_p, bd_tm_pro_apellido_m,
        bd_tm_pro_id_estatus, bd_tm_pro_id_usuario, bd_tm_pro_matricula, bd_tm_pro_pass FROM $tabla WHERE bd_tm_pro_matricula = :clave_matricula");
      $stmt->bindParam(":clave_matricula", $datosModels["clave_matricula"],PDO::PARAM_STR);
      $stmt->execute();
      return $stmt->fetch();
      $stmt->close();
    }
}
