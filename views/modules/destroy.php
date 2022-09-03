<?php
$userSession = new UserSession();
$userSession -> closeSession();
#echo "<script>window.location='index.php</script>";
header("location:index.php")
?>
