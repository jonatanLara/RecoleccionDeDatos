<?php
/**
 * Created by PhpStorm.
 * User: JonatanLara
 * Date: 2/9/2022
 * Time: 04:29 PM
 */
require_once "conexion.php";

class User extends Conexion{
    PRIVATE $MATRICULA;
    PRIVATE $NOMBRE;

    public  function userExists($matricula, $pass){
      $stmt = Conexion::conectar()->prepare("SELECT bd_tm_pro_id, bd_tm_pro_nombre, bd_tm_pro_apellido_p, bd_tm_pro_apellido_m,
        bd_tm_pro_id_estatus, bd_tm_pro_id_usuario, bd_tm_pro_matricula, bd_tm_pro_pass
        FROM bd_tm_pro WHERE bd_tm_pro_matricula = :clave_matricula AND bd_tm_pro_pass  = :password");
        $stmt->execute(['clave_matricula'=>$matricula, 'password'=>$pass]);
      if($stmt->rowcount()){
        return true;
      }else{
        return false;
      }
    }

    public function setUser($matricula){
      $stmt = Conexion::conectar()->prepare("SELECT bd_tm_pro_id, bd_tm_pro_nombre, bd_tm_pro_apellido_p, bd_tm_pro_apellido_m,
        bd_tm_pro_id_estatus, bd_tm_pro_id_usuario, bd_tm_pro_matricula, bd_tm_pro_pass
        FROM bd_tm_pro WHERE bd_tm_pro_matricula = :clave_matricula");
        $stmt->execute(['clave_matricula'=>$matricula]);

      foreach ($stmt as $currentUser) {
        $this->MATRICULA =  $currentUser['bd_tm_pro_matricula'];
        $this->NOMBRE =  $currentUser['bd_tm_pro_nombre'];
      }
    }
    public function getNombre(){
      return $this->NOMBRE;
    }
}
 ?>
