<?php
class UserSession{
  public function __construct(){
    session_start();
  }
  // seccion actual
  public function setCurrentUser($user){
    $_SESSION['cl_matricula'] = $user;
  }
  public function getCurrentUser(){
    return $_SESSION['cl_matricula'];
  }
  public function closeSession(){
    session_unset();
    session_destroy();
  }
}
?>
