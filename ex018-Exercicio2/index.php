<?php 

$y=0;
$quebradorLinha=1;
for($i = 0; $i < 210; $i++){
  echo "8";
  $y++;
  if($y >= $quebradorLinha){
    echo "</br>";
    $quebradorLinha++;
    $y = 0;
  }
}
 
//outro jeito muito mais facil
//inicializa um contador, while percore 20 vezes
//cont = 1 , cai no ecco funcao repetir string vai repetir 1 vez e apertar TAB
 $cont =0;
 while ($cont < 20){
    $cont ++;
    echo str_repeat("-",$cont);
    echo "</br>";    
 }



/* 
    -
    --
    ---
    ---



*/
"</br>";
"</br>";
for ($j = 0; $i < 20; $i++) {
    echo "</br>"; // Substitui System.out.println() com o equivalente em PHP
    for ($j = 0; $j <= $i; $j++) {
      echo "8"; // Substitui System.out.printf("8") com o equivalente em PHP, sem formatação
    }
  }

?>




