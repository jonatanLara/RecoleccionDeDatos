<?php
  session_start();
  $user = new User();
  if(isset($_SESSION["cl_matricula"])){// si validar es igual a falso
   $getNombre = $_SESSION["cl_matricula"];
   $user->setUser($getNombre);
   //exit();
  }
  else{
    // se le redirige a la persona al login
    echo "<script>window.location='index.php'</script>";
  }
?>
