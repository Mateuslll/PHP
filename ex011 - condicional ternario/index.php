<?php 
    $idade = 17;

if($idade >=18){
    echo "Maior de Idade". $idade."<br/>";
}else {
   echo "Menor de Idade".$idade."<br/>";
}

//condicional ternaria é quando valida a propria variavel;

echo ($idade>=18) ? "Maior de Idade" : "Menor de Idade";

echo ($idade) ? true : false;

?>