<?php
/**
 * Created by PhpStorm.
 * User: JonatanLara
 * Date: 2/9/2022
 * Time: 04:29 PM
 */
require_once "conexion.php";
  class User extends Conexion{
      PRIVATE $ID;
      PRIVATE $MATRICULA;
      PRIVATE $NOMBRE;
      PRIVATE $APELLIDO_P;
      PRIVATE $APELLIDO_M;
      PRIVATE $EDAD;
      PRIVATE $GENERO;
      PRIVATE $ORIGEN;
      PRIVATE $TELEFONO;
      PRIVATE $CORREO;
      PRIVATE $USUARIO;
      PRIVATE $NIVEL_USUARIO;
      PRIVATE $ESTATUS;
      /* login */

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
        $stmt = Conexion::conectar()->prepare("SELECT bd_tm_pro_id, bd_tm_pro_nombre,bd_tm_pro_apellido_p,bd_tm_pro_apellido_m, bd_tm_pro_fecha_nacimiento,
          bd_tm_pro_genero, bd_tm_pro_origen, bd_tm_pro_matricula, bd_tm_pro_correo, bd_tm_pro_telefono, bd_tm_pro_id_usuario, bd_tm_uur_usuario, bd_tm_ett_estatus
          FROM bd_tm_pro
          INNER JOIN bd_tm_uur ON bd_tm_pro.bd_tm_pro_id_usuario = bd_tm_uur.bd_tm_uur_id
          INNER JOIN bd_tm_ett ON bd_tm_pro.bd_tm_pro_id_estatus = bd_tm_ett.bd_tm_ett_id
          WHERE bd_tm_pro_matricula =:clave_matricula");
        $stmt->execute(['clave_matricula'=>$matricula]);

        foreach ($stmt as $currentUser) {
          $this->MATRICULA =  $currentUser['bd_tm_pro_matricula'];
          $this->NOMBRE =  $currentUser['bd_tm_pro_nombre'];
          $this->ID =  $currentUser['bd_tm_pro_id'];
          $this->APELLIDO_P =  $currentUser['bd_tm_pro_apellido_p'];
          $this->APELLIDO_M =  $currentUser['bd_tm_pro_apellido_m'];
          $this->EDAD =  $currentUser['bd_tm_pro_fecha_nacimiento'];
          $this->GENERO =  $currentUser['bd_tm_pro_genero'];
          $this->ORIGEN =  $currentUser['bd_tm_pro_origen'];
          $this->CORREO =  $currentUser['bd_tm_pro_correo'];
          $this->USUARIO =  $currentUser['bd_tm_uur_usuario'];
          $this->ESTATUS =  $currentUser['bd_tm_ett_estatus'];
          $this->TELEFONO = $currentUser['bd_tm_pro_telefono'];
          $this->NIVEL_USUARIO = $currentUser['bd_tm_pro_id_usuario'];
        }
      }
      public function getNombre(){return $this->NOMBRE;  }
      public function getMatricula(){return $this->MATRICULA;}
      public function getApellidos(){return $this->APELLIDO_p." ". $this->APELLIDO_M;}
      public function getClave(){return $this->ID;}
      public function getEdad(){return $this->EDAD;}
      public function getGenero(){return $this->GENERO;}
      public function getOrigen(){return $this->ORIGEN;}
      public function getCorreo(){return $this->CORREO;}
      public function getTelefono(){return $this->TELEFONO;}
      public function getUsuario(){return $this->USUARIO;}
      public function getNivelUsuario(){return $this->NIVEL_USUARIO;}
      public function getEstatus(){return $this->ESTATUS;}

  }
?>
