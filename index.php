<?php
/**
 * Created by PhpStorm.
 * User: JonatanLara
 * Date: 16/01/2018
 * Time: 07:25 PM
 */
require_once ('models/user.php');
 require_once ('models/user_session.php');
 require_once ('models/enlaces.php');
 require_once ('models/crud.php');
 require_once ('controllers/controller.php');

  $mvc = new MvcController();
  $mvc -> pagina();

?>
