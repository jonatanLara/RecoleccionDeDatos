<?php
$var = 0;
for ($i = 1; $i <= 72; $i++) {
  if($var === 0){
    $var = $var+1;
    //echo $var;
  }
  if($var===$i){
    #echo '( '.$i.' )';
    $var = $var+6;
    #print_r( $var);
    echo '</br>';
  }
  echo'( '. $i.' )';
}
?>
