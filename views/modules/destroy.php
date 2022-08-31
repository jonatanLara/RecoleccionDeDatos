<?php
if(isset($_GET['action'])){
  @session_start();
  session_destroy();
  header("Location: index.php");
}

  #echo "<script>window.location='index.php</script>";
 ?>
 <h1>Haz salido de la aplicación</h1>
